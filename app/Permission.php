<?php

namespace App;

use Delgont\Auth\Permission as Permissions;


class Permission extends Permissions
{

    const   CAN_HACK_THE_WEB = 'hack_the_web';
    const   CAN_EDIT_USER_DETAILS = 'can-edit-user-hello';

    protected $group = 'uganda';

}