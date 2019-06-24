<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
	public function student()
	{
		return $this->belongsTo(Student::class);
	}

	public function center()
	{
		$this->hasMany(Center::class);
	}
}
