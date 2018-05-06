<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	protected $fillable = [
			'body',
			'url',
			'user_id'
	];
}
