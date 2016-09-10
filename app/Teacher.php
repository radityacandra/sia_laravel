<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected $table = 'teacher';
	
	public $timestamps = true;
	
	protected $fillable = ['NIP', 'full_name', 'joined_at', 'teacher_phone', 'teacher_picture', 'father_name', 'mother_name', 'phone', 'status', 'class_id'];

	protected $primaryKey = 'NIP';
	
	public $incrementing = false;
	
	public function hometeacher(){
		return $this->belongsTo('App\Teacher', 'class_id', 'class_id');
	}
}
