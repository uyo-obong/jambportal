<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllInstitution extends Model
{
	protected $fillable = ['user_id'];
	
	public function user()
	{
		$this->hasMany(User::class, 'all_institution_id');
	}
}
