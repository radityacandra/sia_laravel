<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $table = 'subject';
	
	public $timestamps = true;
	
	protected $fillable = ['code_subject', 'subject_name', 'subject_weight', 'consentration_id'];
	
	public function detailConsentration(){
		return $this->belongsTo('App\Consentration', 'consentration_id', 'consentration_id');
	}
}
