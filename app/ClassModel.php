<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
	protected $table = 'class';
	
	public $timestamps = true;
	
	protected $fillable = ['class_name', 'student_count', 'consentration_id'];
}
