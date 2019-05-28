<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function school()
    {
    	return $this->hasOne(School::class);
    }
}
