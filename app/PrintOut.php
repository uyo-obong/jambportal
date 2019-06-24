<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrintOut extends Model
{
	protected $fillable = ['center_id', 'studentid', 'firstname', 'middlename', 'lastname', 'photo', 'age', 'gender', 'email', 'amount', 'regno', 'phone', 'address', 'city', 'state',  'institution', 'faculty', 'department', 'sit_no'];

    public function center()
    {
    	$this->belongsTo(Center::class);
    }
}
