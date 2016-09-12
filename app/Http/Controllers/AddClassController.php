<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ClassModel;
use App\Student;
use App\Teacher;
use App\Consentration;
use App\Subject;

class AddClassController extends Controller
{
	public function displayAddClassForm(){
		$consentrationModel = new Consentration();
		$listConsentration = $consentrationModel->get();
		
		$subjectModel = new Subject();
		$listSubject = $subjectModel->get();
		
		$studentModel = new Student();
		$listStudent = $studentModel->get();
		
		$teacherModel = new Teacher();
		$listTeacher = $teacherModel->get();
		
		$viewData = array();
		$viewData['list_consentration'] = $listConsentration;
		$viewData['list_subject'] = $listSubject;
		$viewData['list_student'] = $listStudent;
		$viewData['list_teacher'] = $listTeacher;
		
		return view('class.addclass')->with('viewData', $viewData);
	}
	
	public function proccessAddClass(Request $request){
		$input = $request->all();
		
		$classId = $input['kode_kelas'];
		
		$classModel = new ClassModel();
		$classModel->class_id = $classId;
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = $input['nama_kelas'];
		$classModel->consentration_id = $input['konsentrasi'];
		$classModel->save();
		
		foreach ($input['students'] as $NIM){
			$studentModel = new Student();
			$student = $studentModel->find($NIM);
			
			if ($student->current_class == ""){
				$student->update(['current_class' => $classId]);
			} else {
				$oldClass = $student->current_class;
				$student->update(['current_class' => $classId]);
				
				$student->classHistory()->attach($oldClass, [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
				]);
			}
		}
		
		foreach ($input['mapel'] as $code_mapel){
			$classModel->find($classId)->hasManySubjects()->attach($code_mapel, [
				'created_at'  => \Carbon\Carbon::now(),
				'updated_at'  => \Carbon\Carbon::now()
			]);
		}
		
		$teacherModel = new Teacher();
		$teacherModel->find($input['teacher'])
									->update([
										'status'  => 'wali',
										'class_id'=> $classId
									]);
		
		return redirect()->action('AddClassController@displayAddClassForm');
	}
}
