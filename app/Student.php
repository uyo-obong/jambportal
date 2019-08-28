<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = [
		'middle_name', 'last_name', 'phone', 'address', 
		'city', 'state', 'dob', 'country', 'zone', 'user_id'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function zone()
    {
        return $this->hasOne(Zone::class);
    }
}
