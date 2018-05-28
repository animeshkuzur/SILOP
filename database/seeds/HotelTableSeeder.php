<?php

use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['name'=>'Grand Budapest Hotel','location'=>'New Delhi'],
        ];
        DB::table('hotels')->insert($data);
    }
}
