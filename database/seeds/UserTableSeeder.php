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
	    $driver->name = 'M. Gustave';
	    $driver->username = 'm.gustave';
	    $driver->password = bcrypt('password');
	    $driver->save();
	    $driver->roles()->attach($role_employee);

	    $advertiser = new User();
	    $advertiser->name = 'Zero Moustafa';
	    $advertiser->username = 'zero.moustafa';
	    $advertiser->password = bcrypt('password');
	    $advertiser->save();
	    $advertiser->roles()->attach($role_admin);
    }
}
