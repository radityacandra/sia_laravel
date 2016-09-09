<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
	protected $table = 'class';
	
	public $timestamps = true;
	
	protected $fillable = ['class_name', 'student_count', 'consentration_id'];
	
	public function memberStudent(){
		return $this->hasMany('App\Student', 'current_class', 'class_id');
	}
	
	public function detailConsentration(){
		return $this->belongsTo('App\Consentration', 'consentration_id', 'consentration_id');
	}
}
