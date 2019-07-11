<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function view(User $user)
    {

        if ($user->role == "admin") {
            return true;
        }

        return false;
    }

    public function student(User $user)
    {

        if ($user->role == "student") {
            return true;
        }

        return false;
    }
}
