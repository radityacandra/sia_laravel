<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consentration extends Model
{
	protected $table = 'consentration';
	
	public $timestamps = true;
	
	protected $fillable = ['consentration_name'];
}
