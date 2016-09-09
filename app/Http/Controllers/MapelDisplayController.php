<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;

class MapelDisplayController extends Controller
{
	public function displayAllMapel(){
		$subjectModel = new Subject();
		$listSubject = $subjectModel->with('detailConsentration')
																->orderBy('created_at', 'desc')
																->paginate(15);
		
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
		$detailSubject = $subjectModel->where('code_subject', '=', $codeSubject)
																	->first();
		
		$viewData = array();
		$viewData['detail_subject'] = $detailSubject;
		
		return view('mapel.detailmapel')->with('viewData', $viewData);
	}
}
