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
	
	public function displayAllClass(Request $request){
		$request->flash();
		$class_name = $request->old('class_name');
		
		if (!$request->exists('_token')){
			$classModel = new ClassModel();
			$listClass = $classModel->with('detailConsentration')
															->orderBy('class_id', 'asc')
															->paginate(15);
		} else {
			$input = $request->all();
			$className = $input['class_name'];
			$consentration = $input['consentration'];
			$sortOption = $input['sortoption'];
			$sort = $input['sort'];
			
			$classModel = new ClassModel();
			if ($consentration!='all'){
				$listClass = $classModel->where('class_name', 'like', '%'.$className.'%')
																->where('consentration_id', '=', $consentration)
																->with('detailConsentration')
																->orderBy($sortOption, $sort)
																->paginate(15);
			} else {
				$listClass = $classModel->where('class_name', 'like', '%'.$className.'%')
																->with('detailConsentration')
																->orderBy($sortOption, $sort)
																->paginate(15);
			}
		}
		
		$viewData = array();
		$viewData['list_class'] = $listClass;
		
		return view('class.allclass')->with('viewData', $viewData);
	}
	
	public function setClassSession(Request $request, $class_id){
		$request->session()->set('class_id', $class_id);
		
		return redirect()->action('ClassDisplayController@displayDetailClass');
	}
	
	public function displayDetailClass(Request $request){
		$classId = $request->session()->get('class_id');
		
		$classModel = new ClassModel();
		
		$classProfile = $classModel->with('hasManySubjects.teachedByTeacher', 'memberStudent', 'detailConsentration')
																->find($classId);
		
		$viewData = array();
		$viewData['class_profile'] = $classProfile;
		$viewData['subjects'] = $classProfile->hasManySubjects;
		$viewData['students'] = $classProfile->memberStudent;
		
		return view('class.detailclass')->with('viewData', $viewData);
	}
}
