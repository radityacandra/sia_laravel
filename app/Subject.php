<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $table = 'subject';
	
	public $timestamps = true;
	
	protected $fillable = ['code_subject', 'subject_name', 'subject_weight', 'consentration_id'];
	
	protected $primaryKey = 'code_subject';
	
	public $incrementing = false;
	
	public function detailConsentration(){
		return $this->belongsTo('App\Consentration', 'consentration_id', 'consentration_id');
	}
	
	public function teachedInClass(){
		return $this->belongsToMany('App\ClassModel', 'class_receive_subject', 'subject_id', 'class_id');
	}
	
	public function teachedToStudents(){
		return $this->belongsToMany('App\Student', 'student_receive_subject', 'subject_id', 'NIM');
	}
}
