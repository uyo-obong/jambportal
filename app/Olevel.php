<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olevel extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function type()
    {
    	return $this->hasMany(Type::class);
    }
}
