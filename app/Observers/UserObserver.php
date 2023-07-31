<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserObserver
{
    public function creating(User $user)
    {
        $user->created_by = Auth::user()->name;
    }

    public function updating(User $user)
    {
        $user->updated_by = Auth::user()->name;
    }
}
