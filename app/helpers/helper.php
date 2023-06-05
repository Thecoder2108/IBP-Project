<?php

use App\Models\User;
use App\Models\Role;

function has_permission($role)
{
    $user_role_rank = Role::find(Auth::user()->role_id)->rank;
    $role = Role::where('name', $role)->first();

    if (!$role) return 'role not found';

    if ($role->id == Auth::user()->role_id || $user_role_rank < $role->rank) {
        return true;
    }

    return false;
}
?>
