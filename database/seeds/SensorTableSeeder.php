<?php

use Illuminate\Database\Seeder;

class SensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	[
        	['device_id' => 20,'status'=>0],
        ];
        DB::table('sensors')->insert($data);
    }
}
