<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'student';
	
	public $timestamps = true;
	
	protected $fillable = ['NIM', 'full_name', 'joined_at', 'birth_place', 'birth_date', 'father_name', 'mother_name', 'student_address', 'parent_address', 'student_phone', 'parent_phone', 'student_picture'];

	protected $primaryKey = 'NIM';
	
	public $incrementing = false;
	
	public function detailClass(){
		return $this->belongsTo('App\ClassModel', 'current_class', 'class_id');
	}
	
	public function receiveManySubject(){
		return $this->belongsToMany('App\Subject', 'student_receive_subject', 'NIM', 'subject_id')->withPivot('semester', 'grade');
	}
}
