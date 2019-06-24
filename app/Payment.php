<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $fillable = ['reg_no', 'amount', 'user_id' ];

	public function user()
	{
		$this->belongsTo(User::class);
	}
}
