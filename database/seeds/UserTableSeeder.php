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
        //
        $role_admin = Role::where('name', 'admin')->first();
	    $role_user  = Role::where('name', 'user')->first();
	    $employee = new User();
	    $employee->name = 'Usuario';
	    $employee->email = 'user@project.com';
	    $employee->password = bcrypt('user');
	    $employee->save();
	    $employee->roles()->attach($role_user);
	    $manager = new User();
	    $manager->name = 'Administrador';
	    $manager->email = 'admin@project.com';
	    $manager->password = bcrypt('admin');
	    $manager->save();
	    $manager->roles()->attach($role_admin);
    }
}
