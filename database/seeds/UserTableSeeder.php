<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('role', 'employee')->first();
	    $role_admin  = Role::where('role', 'admin')->first();

	    $driver = new User();
	    $driver->name = 'John Smith';
	    $driver->username = 'j.smith';
	    $driver->password = bcrypt('password');
	    $driver->save();
	    $driver->roles()->attach($role_employee);

	    $advertiser = new User();
	    $advertiser->name = 'John Doe';
	    $advertiser->username = 'j.doe';
	    $advertiser->password = bcrypt('password');
	    $advertiser->save();
	    $advertiser->roles()->attach($role_admin);
    }
}
