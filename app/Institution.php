<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
	protected $fillable = [
		'institution', 'reg_no', 'department',  'jamb_reg_no', 'jamb_score', 'school', 'user_id'
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
