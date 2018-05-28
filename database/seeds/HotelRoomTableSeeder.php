<?php

use Illuminate\Database\Seeder;

class HotelRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	[
        	['hotel_id' => 1,'room_id'=> 1],
        ];
        DB::table('hotel_rooms')->insert($data);
    }
}
