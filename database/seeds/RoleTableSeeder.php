<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_driver = new Role();
	    $role_driver->role = 'employee';
	    $role_driver->save();

	    $role_advertiser = new Role();
	    $role_advertiser->role = 'admin';
	    $role_advertiser->save();
    }
}
