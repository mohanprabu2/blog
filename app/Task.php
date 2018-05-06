<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = ['name', 'project_id', 'user_id', 'company_id', 'days', 'hours'];
	
	public function user() {
		return $this->belongsToMany('App\User');
	}
	
	public function project() {
		return $this->belongsTo('App\Project');
	}
	
	public function comany() {
		return $this->belongsTo('App\Company');
	}
}
