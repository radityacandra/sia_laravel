<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $table = 'message';
	
	public $timestamps = true;
	
	protected $fillable = ['subject', 'role_table', 'id_sender', 'id_receiver'];
}
