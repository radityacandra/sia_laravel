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
																		->with('detailClass')
																		->first();
		
		$viewData = array();
		$viewData['student_profile'] = $studentProfile;
		
		return view('student.detailstudent')->with('viewData', $viewData);
	}
}
