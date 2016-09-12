<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;

class MapelDisplayController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function displayAllMapel(Request $request){
		$request->flash();
		$mapel_name = $request->old('mapel_name');
		
		if (!$request->exists('_token')){
			$subjectModel = new Subject();
			$listSubject = $subjectModel->with('detailConsentration')
																	->orderBy('created_at', 'desc')
																	->paginate(15);
		} else {
			$input = $request->all();
			$mapelName = $input['mapel_name'];
			$sortOption = $input['sortoption'];
			$sort = $input['sort'];
			
			$subjectModel = new Subject();
			$listSubject = $subjectModel->where('subject_name', 'like', '%'.$mapelName.'%')
																	->with('detailConsentration')
																	->orderBy($sortOption, $sort)
																	->paginate(15);
		}
		
		$viewData = array();
		$viewData['list_subject'] = $listSubject;
		
		return view('mapel.allmapel')->with('viewData', $viewData);
	}
	
	public function setSubjectSession(Request $request, $code_subject){
		$request->session()->set('code_subject', $code_subject);
		
		return redirect()->action('MapelDisplayController@displayDetailSubject');
	}
	
	public function displayDetailSubject(Request $request){
		$codeSubject = $request->session()->get('code_subject');
		
		$subjectModel = new Subject();
		$detailSubject = $subjectModel->with('detailConsentration', 'teachedByTeacher', 'teachedInClass.detailConsentration', 'teachedInClass.hasHometeacher', 'teachedInClass.memberStudent')
																	->find($codeSubject);
		
		$viewData = array();
		$viewData['detail_subject'] = $detailSubject;
		$viewData['teached_by_teacher'] = $detailSubject->teachedByTeacher;
		$viewData['teached_in_class'] = $detailSubject->teachedInClass;
		
		return view('mapel.detailmapel')->with('viewData', $viewData);
	}
}
