<?php

use Illuminate\Database\Seeder;

class RoomSensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['room_id'=>1,'sensor_id'=>1],
        ];
        DB::table('room_sensors')->insert($data);
    }
}
