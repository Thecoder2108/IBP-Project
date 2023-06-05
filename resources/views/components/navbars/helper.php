<?php

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

function has_permission($role)
{
    $user = Auth::user();
    if (!$user) return 'user not authenticated';

    $user_role_id = $user->role_id;
    if (!$user_role_id) return 'user role not found';

    $user_role = Role::find($user_role_id);
    if (!$user_role) return 'user role not found';

    $target_role = Role::where('name', $role)->first();
    if (!$target_role) return 'role not found';

    if ($user_role->id == $target_role->id || $user_role->rank < $target_role->rank) {
        return true;
    }

    return 'permission denied';
}
?>
