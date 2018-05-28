<?php

use Illuminate\Database\Seeder;

class DoorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	[
        	['device_id' => 21,'channel_no'=> 2,'status'=>1],
        ];
        DB::table('doors')->insert($data);
    }
}
