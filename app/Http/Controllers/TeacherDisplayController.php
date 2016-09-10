<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Teacher;

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
																	->first();
		
		
		$viewData = array();
		$viewData['teacher_profile'] = $teacherProfile;
		
		return view('teacher.detailteacher')->with('viewData', $viewData);
	}
}
