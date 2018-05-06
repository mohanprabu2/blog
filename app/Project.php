<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = ['name', 'description', 'user_id', 'days', 'company_id'];
	
	public function user() {
		return $this->belongsToMany('App\User');
	}
	
	public function comany() {
		return $this->belongsTo('App\Company');
	}
}
