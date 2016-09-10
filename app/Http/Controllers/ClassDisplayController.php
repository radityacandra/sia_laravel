<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ClassModel;

class ClassDisplayController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function displayAllClass(){
		$classModel = new ClassModel();
		$listClass = $classModel->with('detailConsentration')
														->orderBy('class_id', 'asc')
														->paginate(15);
		
		$viewData = array();
		$viewData['list_class'] = $listClass;
		
		return view('class.allclass')->with('viewData', $viewData);
	}
}
