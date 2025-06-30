<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function isAdmin(User $user)
    {
        return $user->email === 'admin@admin.com' ? Response::allow() : Response::deny('You are performing wrong task');
    }
}
