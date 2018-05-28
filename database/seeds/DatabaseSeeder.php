<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccessTypeTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(HotelTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(DoorTableSeeder::class);
        $this->call(SwitchTableSeeder::class);
        $this->call(SensorTableSeeder::class);
        $this->call(HotelRoomTableSeeder::class);
        $this->call(RoomDoorTableSeeder::class);
        $this->call(RoomSensorTableSeeder::class);
        $this->call(RoomSwitchTableSeeder::class);
    }
}
