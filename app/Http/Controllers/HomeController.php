<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Student;
use App\Teacher;
use App\ClassModel;
use DB;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 * Show the application dashboard.
	 *
	 * @return Response
	 */
	public function index()
	{
		$studentModel = new Student();
		$teacherModel = new Teacher();
		$classModel = new ClassModel();
		
		$listStudent = $studentModel->orderBy('created_at', 'desc')
																->take(8)
																->get();
		
		$totalStudent = $studentModel->select(DB::raw('count(*) as count'))
																->first();
		
		$totalTeacher = $teacherModel->select(DB::raw('count(*) as count'))
																->first();
		
		$totalClass=  $classModel->select(DB::raw('count(*) as count'))
														->first();
		
		$viewData = array();
		$viewData['list_student'] = $listStudent;
		$viewData['total_student'] = $totalStudent->count;
		$viewData['total_teacher'] = $totalTeacher->count;
		$viewData['total_class'] = $totalClass->count;
		
		return view('home')->with('viewData', $viewData);
	}
}