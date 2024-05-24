<?php

namespace App\Policies;

use App\Models\Advert;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdvertPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_advert');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Advert $advert): bool
    {
        return $user->can('view_advert');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_advert');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Advert $advert): bool
    {
        return $user->can('update_advert');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Advert $advert): bool
    {
        return $user->can('delete_advert');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_advert');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Advert $advert): bool
    {
        return $user->can('force_delete_advert');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_advert');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Advert $advert): bool
    {
        return $user->can('restore_advert');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_advert');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Advert $advert): bool
    {
        return $user->can('replicate_advert');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_advert');
    }
}
