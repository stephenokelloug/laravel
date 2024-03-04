<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Staff;
use App\Admin;

use Delgont\Auth\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create([
            'name' => 'admin'
        ]);

        $staff = Staff::create([
            'first_name' => 'Staff User'
        ]);

        $staff->user()->create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff')
        ]);

        $admin = Admin::create([
            'first_name' => 'Admin User'
        ]);

        $admin->user()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);
        
    }
}
