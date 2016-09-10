<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;

class StudentDisplayController extends Controller
{
	public function displayAllStudent(){
		$studentModel = new Student();
		$listStudent = $studentModel->with('detailClass')
																->orderBy('created_at', 'desc')
																->paginate(15);
		
		$viewData = array();
		$viewData['list_student'] = $listStudent;
		
		return view('student.allstudent')->with('viewData', $viewData);
	}
	
	public function setSessionDetailStudent(Request $request, $NIM){
		$request->session()->put('nim', $NIM);
		return redirect()->action('StudentDisplayController@displayDetailStudent');
	}
	
	public function displayDetailStudent(Request $request){
		$nim = $request->session()->get('nim');
		
		$studentModel = new Student();
		
		$studentProfile = $studentModel->where('NIM', '=', $nim)
																		->with('detailClass', 'receiveManySubject')
																		->first();
		
		$arraySemester = array();
		$arrayMapel = array();
		$counterMapel = 0;
		$counter = 0;
		$currentSemester = '';
		foreach ($studentProfile->receiveManySubject as $subject){
			if($currentSemester!=$subject->pivot->semester){
				$arraySemester[$counter] = $subject->pivot->semester;
				$currentSemester = $subject->pivot->semester;
				$counterMapel = 0;
				$counter++;
			}
			
			$arrayMapel[$counter-1][$counterMapel]['code'] = $subject->code_subject;
			if ($subject->pivot->grade==""){
				$arrayMapel[$counter-1][$counterMapel]['grade'] = "Belum Diisi";
			} else {
				$arrayMapel[$counter-1][$counterMapel]['grade'] = $subject->pivot->grade;
			}
			$arrayMapel[$counter-1][$counterMapel]['name'] = $subject->subject_name;
			$arrayMapel[$counter-1][$counterMapel]['weight'] = $subject->subject_weight;
			$counterMapel++;
		}
		
		$viewData = array();
		$viewData['student_profile'] = $studentProfile;
		$viewData['array_semester'] = $arraySemester;
		$viewData['array_mapel'] = $arrayMapel;
		
		return view('student.detailstudent')->with('viewData', $viewData);
	}
}
