<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Hotel;
use App\Room;
use App\Role;


class PageController extends Controller
{
    public function index(){
    	if(Auth::check()){
            return redirect('dashboard');    
        }
    	return redirect('login');
    }

    public function dashboard(){
    	try{
    		if(!Auth::check()){
            	return view('login');    
        	}

        	$room_doors = Room::where('rooms.id',1)->join('room_doors','room_doors.room_id','=','rooms.id')->join('doors','doors.id','=','room_doors.door_id')->get(['rooms.room_no','doors.status'])->first();
        	$room_switches = Room::where('rooms.id',1)->join('room_switches','room_switches.room_id','=','rooms.id')->join('switches','switches.id','=','room_switches.switch_id')->get(['rooms.room_no','switches.status'])->first();
        	$room_sensors = Room::where('rooms.id',1)->join('room_sensors','room_sensors.room_id','=','rooms.id')->join('sensors','sensors.id','=','room_sensors.sensor_id')->get(['rooms.room_no','sensors.status'])->first();

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
        	return view('dashboard',['status'=>$status,'room_no'=>$room_no,'door'=>$room_doors->status,'switch'=>$room_switches->status,'sensor'=>$room_sensors->status]);
    	}
    	catch(Exception $e){

    	}	
    }





    public function admin(){
        if(Auth::check()){
            return redirect('admin/dashboard');    
        }
        return redirect('admin/login');
    }


    public function test(){
        $role = Role::find(2)->users->first();
        /*return Auth::user()->id;*/
        return $role->id;
        return $role->pivot->role_id;
    }

    public function adminDashboard(){
        /*return view('admin-dashboard');*/
        try{
            if(!Auth::check()){
                return redirect('admin/login');    
            }

            $room_doors = Room::where('rooms.id',1)->join('room_doors','room_doors.room_id','=','rooms.id')->join('doors','doors.id','=','room_doors.door_id')->get(['rooms.room_no','doors.status'])->first();
            $room_switches = Room::where('rooms.id',1)->join('room_switches','room_switches.room_id','=','rooms.id')->join('switches','switches.id','=','room_switches.switch_id')->get(['rooms.room_no','switches.status'])->first();
            $room_sensors = Room::where('rooms.id',1)->join('room_sensors','room_sensors.room_id','=','rooms.id')->join('sensors','sensors.id','=','room_sensors.sensor_id')->get(['rooms.room_no','sensors.status'])->first();

            $status = 0;
            $room_no = $room_doors->room_no;

            if($room_doors->status == 0 && $room_switches->status == 1 && $room_sensors->status == 1){
                $status = 1;
            }
            else if($room_doors->status == 1 && $room_switches->status == 0 && $room_sensors->status == 0){
                $status = 2;
            }
            else if($room_doors->status == 1 && $room_switches->status == 0 && $room_sensors->status == 1){
                $status = 2;
            }
            else if($room_doors->status == 0 && $room_switches->status == 1 && $room_sensors->status == 0){
                $status = 3;
            }
            else{
                $status = 4;
            }
            return view('admin-dashboard',['status'=>$status,'room_no'=>$room_no,'door'=>$room_doors->status,'switch'=>$room_switches->status,'sensor'=>$room_sensors->status]);
        }
        catch(Exception $e){

        }
    }
}
