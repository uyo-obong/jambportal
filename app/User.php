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
        'all_institution_id', 'first_name', 'gender', 'email', 'role', 'amount',  'password',
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

    public function fullName()
    {
        return $this->load('student')->student->last_name . ', ' . $this->first_name . ' ' . $this->load('student')->student->middle_name;
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function olevel()
    {
        return $this->hasOne(Olevel::class);
    }

    public function institutions()
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
