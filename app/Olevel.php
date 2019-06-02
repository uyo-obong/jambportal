<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olevel extends Model
{
	protected $fillable = [
		'center_number', 'reg_no', 'exam_year', 'type', 
		'user_id', 'sub1',  'sub2', 'sub3', 'sub4', 'sub5',
	 	'grad1', 'grad2', 'grad3',  'grad4', 'grad5',
	];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function type()
    {
    	return $this->hasMany(Type::class);
    }
}
