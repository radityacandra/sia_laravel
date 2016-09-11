<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Teacher;
use App\ClassModel;

class TeacherDisplayController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function displayAllTeacher(){
		$teacherModel = new Teacher();
		$listTeacher = $teacherModel->orderBy('created_at', 'desc')
																->paginate(15);
		
		$viewData = array();
		$viewData['list_teacher'] = $listTeacher;
		
		return view('teacher.allteacher')->with('viewData', $viewData);
	}
	
	public function setTeacherSession(Request $request, $NIP){
		$request->session()->set('nip', $NIP);
		
		return redirect()->action('TeacherDisplayController@displayDetailTeacher');
	}
	
	public function displayDetailTeacher(Request $request){
		$nip = $request->session()->get('nip');
		
		$teacherModel = new Teacher();
		$teacherProfile = $teacherModel->where('NIP', '=', $nip)
																	->with('hometeacher', 'teachingSubject')
																	->first();
		
		$viewData = array();
		$viewData['teacher_profile'] = $teacherProfile;
		
		if($teacherProfile->status == 'wali'){
			$teacherProfile->status = 'Wali Kelas';
			$classModel = new ClassModel();
			$classInfo = $classModel->where('class_id', '=', $teacherProfile->hometeacher->class_id)
															->with('detailConsentration', 'memberStudent')
															->first();
			
			$viewData['class_info']['name'] = $classInfo->class_name;
			$viewData['class_info']['consentration'] = $classInfo->detailConsentration->consentration_name;
			$viewData['class_info']['total_student'] = sizeof($classInfo->memberStudent);
		} else {
			$teacherProfile->status = 'Guru';
		}
		
		$viewData['teaching_subject'] = $teacherProfile->teachingSubject;
		
		return view('teacher.detailteacher')->with('viewData', $viewData);
	}
}
