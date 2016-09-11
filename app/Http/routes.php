
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', function () {
	return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/student/all', 'StudentDisplayController@displayAllStudent');

Route::get('/student/add', function (){
	return view('student.addstudent');
});

Route::get('/student/detail', 'StudentDisplayController@displayDetailStudent');

Route::get('/student/detail/{NIM}', 'StudentDisplayController@setSessionDetailStudent');

Route::get('/student/edit/grade', function (){
	return view('student.addstudentgradereport');
});

Route::get('/teacher/all', 'TeacherDisplayController@displayAllTeacher');

Route::get('/teacher/detail', 'TeacherDisplayController@displayDetailTeacher');

Route::get('/teacher/detail/{NIP}', 'TeacherDisplayController@setTeacherSession');

Route::get('teacher/add', function(){
	return view('teacher.addteacher');
});

Route::get('mapel/all', 'MapelDisplayController@displayAllMapel');

Route::get('mapel/detail', 'MapelDisplayController@displayDetailSubject');

Route::get('mapel/detail/{code_subject}', 'MapelDisplayController@setSubjectSession');

Route::get('mapel/add', function(){
	return view('mapel.addmapel');
});

Route::get('class/all', 'ClassDisplayController@displayAllClass');

Route::get('class/add', function (){
	return view('class.addclass');
});

Route::get('class/detail', function (){
	return view('class.detailclass');
});