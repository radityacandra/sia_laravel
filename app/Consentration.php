<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consentration extends Model
{
	protected $table = 'consentration';
	
	public $timestamps = true;
	
	protected $fillable = ['consentration_name'];
	
	public function listClass(){
		return $this->hasMany('App\ClassModel', 'consentration_id', 'consentration_id');
	}
	
	public function listSubject(){
		return $this->hasMany('App\Subject', 'consentration_id', 'consentration_id');
	}
}
