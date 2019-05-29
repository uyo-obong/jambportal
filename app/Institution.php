<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
	protected $fillable = [
		'institution_name', 'department', 'school_id', 'user_id'
	];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function school()
    {
    	return $this->hasOne(School::class);
    }
}
