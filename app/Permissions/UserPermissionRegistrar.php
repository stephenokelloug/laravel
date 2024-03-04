<?php

namespace App\Permissions;

use Delgont\Auth\PermissionRegistrar;

class UserPermissionRegistrar extends PermissionRegistrar
{
    protected $group = 'can_manage_users';

    const CAN_ADD_USER = 'can_add_user';

    
}