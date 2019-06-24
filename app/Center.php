<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
	public function zone()
	{
		$this->belongsTo(Zone::class);
	}

	public function user()
	{
		$this->belongsTo(User::class);
	}

	public function printout()
	{
		$this->hasOne(PrintOut::class);
	}
}
