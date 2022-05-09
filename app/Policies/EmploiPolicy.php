<?php

namespace App\Policies;

use App\Emploi;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmploiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function view(User $user, Emploi $emploi)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->role_id == 1 or $user->role_id == 2) 
        {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function update(User $user, Emploi $emploi)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function delete(User $user, Emploi $emploi)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function restore(User $user, Emploi $emploi)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function forceDelete(User $user, Emploi $emploi)
    {
        //
    }
}
