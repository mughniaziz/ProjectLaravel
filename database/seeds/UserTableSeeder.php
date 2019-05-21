<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //initials Role
        // $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();

        //make new admin
        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admins');
        $admin->ttl = '1992/05/05';
        $admin->gender = 'Pria';
        $admin->save();
        $admin->roles()->attach($role_admin);

    }
}
