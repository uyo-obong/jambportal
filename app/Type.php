<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function olevel()
    {
    	return $this->belongsTo(Olevel::class);
    }
}
