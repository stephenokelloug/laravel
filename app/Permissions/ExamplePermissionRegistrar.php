<?php

namespace App\Permissions;

use Delgont\Auth\PermissionRegistrar;

class ExamplePermissionRegistrar extends PermissionRegistrar
{
    const CAN_HACK_THE_WEB = 'can-hack-the-web';
    const CAN_FUCK_THE_WORLD = 'can-fuck-the-world';
    const CAN_HELLO = 'hello';

    protected $group = 'admin';


    public function descriptions()
    {
        return [
         self::CAN_HACK_THE_WEB => 'User will be able to view total number of students in the dashboard',
         self::CAN_FUCK_THE_WORLD => 'User will be able to view total number of students in the dashboard'
        ];
    }

}
