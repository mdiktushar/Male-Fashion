<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    // public function viewDashboard (User $user) {
    //     return $user->role === 'admin';
    // }

    public function adminAccess (User $user) {
        return $user->role === 'admin';
    }
}
