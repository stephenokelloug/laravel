<?php

namespace App\Permissions;

use Delgont\Auth\PermissionRegistrar;

class FinancePermissionRegistrar extends PermissionRegistrar
{
    const MANAGE_FEES = 'can manage student fees';
    const CAN_CREATE_FEES = 'can-create-fees';

    protected $group = 'finance';

}
