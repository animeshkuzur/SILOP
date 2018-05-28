<?php

use Illuminate\Database\Seeder;

class SwitchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =	[
        	['device_id' => 21,'channel_no'=> 1,'status'=>0],
        ];
        DB::table('switches')->insert($data);
    }
}
