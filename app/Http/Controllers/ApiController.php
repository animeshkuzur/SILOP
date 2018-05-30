<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hotel;
use App\Room;
use App\Role;
use App\LuxLog;

class ApiController extends Controller
{
    public function getstatus(){
    	$room_doors = Room::where('rooms.id',1)->join('room_doors','room_doors.room_id','=','rooms.id')->join('doors','doors.id','=','room_doors.door_id')->get(['rooms.room_no','doors.status'])->first();
        	$room_switches = Room::where('rooms.id',1)->join('room_switches','room_switches.room_id','=','rooms.id')->join('switches','switches.id','=','room_switches.switch_id')->get(['rooms.room_no','switches.status'])->first();
        	$room_sensors = Room::where('rooms.id',1)->join('room_sensors','room_sensors.room_id','=','rooms.id')->join('sensors','sensors.id','=','room_sensors.sensor_id')->get(['rooms.room_no','sensors.status'])->first();
        	$lux = \DB::table('lux_logs')->orderBy('id','desc')->first();
        	$temp = \DB::table('temp_logs')->orderBy('id','desc')->first();

        	$status = 0;
        	$room_no = $room_doors->room_no;

        	if($room_doors->status == 0 && $room_switches->status == 1 && $room_sensors->status == 1){
        		$status = 1;
        	}
        	elseif($room_doors->status == 1 && $room_switches->status == 0 && $room_sensors->status == 0){
        		$status = 2;
        	}
        	elseif($room_doors->status == 1 && $room_switches->status == 0 && $room_sensors->status == 1){
        		$status = 2;
        	}
        	elseif($room_doors->status == 0 && $room_switches->status == 1 && $room_sensors->status == 0){
        		$status = 3;
        	}
            elseif ($room_doors->status == 0 && $room_switches->status == 1 && $room_sensors->status == 1) {
                $status = 2;
            }
            elseif ($room_doors->status == 0 && $room_switches->status == 1 && $room_sensors->status == 0) {
                $status = 2;
            }
            elseif ($room_doors->status == 0 && $room_switches->status == 0 && $room_sensors->status == 1) {
                $status = 2;
            }
            elseif ($room_doors->status == 0 && $room_switches->status == 0 && $room_sensors->status == 0) {
                $status = 2;
            }
        	else{
        		$status = 4;
        	}

        	return response()->json(['room_no' => $room_no,'status'=>$status,'door'=>$room_doors->status,'switch'=>$room_switches->status,'sensor'=>$room_sensors->status,'lux_value'=>$lux->lux,'lux_timestamp'=>$lux->timestamp,'temp'=>$temp->temp,'temp_timestamp'=>$temp->timestamp]);
    }
}
