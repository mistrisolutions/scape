<?php

namespace App\Policies;

use App\Models\User;
use App\ShopOwner;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopOwnerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */

    public function before(User $user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    
    }

    public function viewAny(User $user)
    {
        //
        return $user->hasAbility('view-any-shop-owner');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ShopOwner  $shopOwner
     * @return mixed
     */
    public function view(User $user, ShopOwner $shopOwner)
    {
        //
        return $user->hasAbility('view-shop-owner');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->hasAbility('create-shop-owner');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ShopOwner  $shopOwner
     * @return mixed
     */
    public function update(User $user, ShopOwner $shopOwner)
    {
        //
        return $user->hasAbility('update-shop-owner');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ShopOwner  $shopOwner
     * @return mixed
     */
    public function delete(User $user, ShopOwner $shopOwner)
    {
        //
        return $user->hasAbility('delete-shop-owner');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ShopOwner  $shopOwner
     * @return mixed
     */
    public function restore(User $user, ShopOwner $shopOwner)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ShopOwner  $shopOwner
     * @return mixed
     */
    public function forceDelete(User $user, ShopOwner $shopOwner)
    {
        //
    }
}
