<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected $table = 'teacher';
	
	public $timestamps = true;
	
	protected $fillable = ['NIP', 'full_name', 'joined_at', 'teacher_phone', 'teacher_picture', 'father_name', 'mother_name', 'phone'];

	protected $primaryKey = 'NIP';
	
	public $incrementing = false;
}
