<?php

namespace App\Policies;

use App\Models\User;

class UserProfilePolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, User $profileUser)
    {
        return $user->id === $profileUser->id;
    }
}
