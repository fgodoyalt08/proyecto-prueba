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

	    $employee = new User();
	    $employee->name = 'Florencia';
	    $employee->email = 'Florencia@project.com';
	    $employee->password = bcrypt('Florencia');
	    $employee->save();
	    $employee->roles()->attach($role_user);

	    $employee = new User();
	    $employee->name = 'Esteban';
	    $employee->email = 'Esteban@project.com';
	    $employee->password = bcrypt('Esteban');
	    $employee->save();
	    $employee->roles()->attach($role_user);

	    $employee = new User();
	    $employee->name = 'Franco';
	    $employee->email = 'Franco@project.com';
	    $employee->password = bcrypt('Franco');
	    $employee->save();
	    $employee->roles()->attach($role_user);

	    $employee = new User();
	    $employee->name = 'Maria';
	    $employee->email = 'Maria@project.com';
	    $employee->password = bcrypt('Maria');
	    $employee->save();
	    $employee->roles()->attach($role_user);

	    $employee = new User();
	    $employee->name = 'Tatiana';
	    $employee->email = 'Tatiana@project.com';
	    $employee->password = bcrypt('Tatiana');
	    $employee->save();
	    $employee->roles()->attach($role_user);

	    $employee = new User();
	    $employee->name = 'Tadeo';
	    $employee->email = 'Tadeo@project.com';
	    $employee->password = bcrypt('Tadeo');
	    $employee->save();
	    $employee->roles()->attach($role_user);

	    $employee = new User();
	    $employee->name = 'Tomas';
	    $employee->email = 'Tomas@project.com';
	    $employee->password = bcrypt('Tomas');
	    $employee->save();
	    $employee->roles()->attach($role_user);

	    $employee = new User();
	    $employee->name = 'Sofia';
	    $employee->email = 'Sofia@project.com';
	    $employee->password = bcrypt('Sofia');
	    $employee->save();
	    $employee->roles()->attach($role_user);
    }
}
