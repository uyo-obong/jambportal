<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'all_institution_id', 'first_name', 'gender', 'email', 'role', 'age', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function olevel()
    {
        return $this->hasOne(Olevel::class);
    }

    public function institution()
    {
        return $this->hasOne(Institution::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function allinstitution()
    {
        $this->belongsTo(AllInstitution::class, 'all_institution_id');
    }

    public function center()
    {
        $this->hasOne(Center::class);
    }
}
