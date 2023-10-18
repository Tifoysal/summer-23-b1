<?php

use App\Models\Permission;
use App\Models\RolePermission;

function checkUserPermission($route)
{

    $permission = Permission::where('slug', $route)->first();

    $checkHasPermission = RolePermission::where('permission_id', $permission->id)
        ->where('role_id', auth()->user()->role_id)->first();

    if ($checkHasPermission) {
        return true;
    }

    return false;
}
