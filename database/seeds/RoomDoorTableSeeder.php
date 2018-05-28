<?php

use Illuminate\Database\Seeder;

class RoomDoorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['room_id'=>1,'door_id'=>1],
        ];
        DB::table('room_doors')->insert($data);
    }
}
