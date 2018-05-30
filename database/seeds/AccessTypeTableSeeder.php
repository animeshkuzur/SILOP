<?php

use Illuminate\Database\Seeder;

class AccessTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	[
        	['type' => 'Guest Checkin'],
        	['type' => 'Guest Extension'],
        	['type' => 'Housekeeping'],
        	['type' => 'Others'],
            ['type' => 'EmergencyLock'],
            ['type' => 'EmergencyUnlock'],
        ];
        DB::table('access_types')->insert($data);
    }
}
