<?php

use Illuminate\Database\Seeder;

class RoomSwitchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['room_id'=>1,'switch_id'=>1],
        ];
        DB::table('room_switches')->insert($data);
    }
}
