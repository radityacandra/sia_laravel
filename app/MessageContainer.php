<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageContainer extends Model
{
	protected $table = 'message_container';
	
	public $timestamps = true;
	
	protected $fillable = ['message_id', 'body', 'role_table', 'id_sender', 'id_receiver'];
}
