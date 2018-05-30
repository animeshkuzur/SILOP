<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AccessLog;
use App\AccessType;
use Auth;
use App\Http\Controllers\RoomController;
use Carbon\Carbon;
/*use App\Switch;*/

class AuthController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function loginAuth(Request $request){
    	try{
    		$this->validate($request, User::$login_validation_rules);
    		$data = $request->only('username','password');
    		if (Auth::attempt($data)){
            	return redirect('dashboard');
        	}
        	else{
            	return back()->withInput()->withErrors(['errors' => 'Username or password is invalid']);
        	}
    	}
    	catch(Exception $e){

    	}
    }

    public function requestAuth(Request $request){
        try{
            $this->validate($request, AccessLog::$request_validation_rules);
            $data = $request->all();
            $access_type = 0;
            if($data['access_type'] == 'Guest Checkin')
                $access_type = 1;
            elseif($data['access_type'] == 'Guest Extension')
                $access_type = 2;
            elseif($data['access_type'] == 'HouseKeeping')
                $access_type = 3;
            elseif($data['access_type'] == 'Others')
                $access_type = 4;
            else
                $access_type = 5;

            $sdate = Carbon::createFromFormat('d-m-Y H:i:s', $data['sdate'], 'Asia/Kolkata');
            $edate = Carbon::createFromFormat('d-m-Y H:i:s', $data['edate'], 'Asia/Kolkata');
            $cur_time = Carbon::now('Asia/Kolkata');

            $flag=AccessLog::insert([
                'user_id' => Auth::user()->id,
                'room_id' => 1,
                'access_type_id' => $access_type,
                'start_datetime' => $sdate,
                'end_datetime' => $edate,
                'timestamp' => $cur_time,
                'active' => 1,
                'uploaded' => 0,
                'approved' => 1,
            ]);

        $open = new RoomController();
        $open->unlock();
        $this->changeStatus(1,1,0,1);   


        }
        catch(Exception $e){

        }

        return redirect('/dashboard');
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();    
        }
        return redirect()->route('login');
    }

    public function emergencyUnlock(Request $request){
        try{
            $cur_time = Carbon::now('Asia/Kolkata');
            $sdate = $cur_time;
            $edate = $cur_time->addMinutes(5);
            

            $flag=AccessLog::insert([
                'user_id' => Auth::user()->id,
                'room_id' => 1,
                'access_type_id' => 6,
                'start_datetime' => $sdate,
                'end_datetime' => $edate,
                'timestamp' => $cur_time,
                'active' => 1,
                'uploaded' => 0,
                'approved' => 1,
            ]);

            $open = new RoomController();
            $open->unlock();
            $this->changeStatus(1,1,0,1);  
        }
        catch(Exception $e){

        }
        return redirect('/dashboard');
    }

    public function emergencyLock(Request $request){
        try{
            $cur_time = Carbon::now('Asia/Kolkata');
            $sdate = $cur_time;
            $edate = $cur_time;

            $flag=AccessLog::insert([
                'user_id' => Auth::user()->id,
                'room_id' => 1,
                'access_type_id' => 5,
                'start_datetime' => $sdate,
                'end_datetime' => $edate,
                'timestamp' => $cur_time,
                'active' => 0,
                'uploaded' => 0,
                'approved' => 1,
            ]);

            $open = new RoomController();
            $open->lock();  
            $this->changeStatus(1,0,1,1);
        }
        catch(Exception $e){

        }
        return redirect('/dashboard');
    }

    public function changeStatus($room_no,$door_stauts,$light_status,$sensors_status){
        $room_doors = \DB::table('rooms')->where('rooms.id',1)->join('room_doors','room_doors.room_id','=','rooms.id')->join('doors','doors.id','=','room_doors.door_id')->get(['rooms.room_no','doors.status','doors.id'])->first();
        $room_switches = \DB::table('rooms')->where('rooms.id',1)->join('room_switches','room_switches.room_id','=','rooms.id')->join('switches','switches.id','=','room_switches.switch_id')->get(['rooms.room_no','switches.status','switches.id'])->first();
        $room_sensors = \DB::table('rooms')->where('rooms.id',1)->join('room_sensors','room_sensors.room_id','=','rooms.id')->join('sensors','sensors.id','=','room_sensors.sensor_id')->get(['rooms.room_no','sensors.status','sensors.id'])->first();

        $ds = \DB::table('doors')->where('id',$room_doors->id)->update(['status'=>$door_stauts]);
        $sws = \DB::table('switches')->where('id',$room_switches->id)->update(['status'=>$light_status]);
        $sns = \DB::table('sensors')->where('id',$room_sensors->id)->update(['status'=>$sensors_status]);
    }


    public function adminLogin(){
        return view('admin-login');  
    }

    public function adminLoginAuth(Request $request){
        try{
            $this->validate($request, User::$login_validation_rules);
            $data = $request->only('username','password');
            if (Auth::attempt($data)){
                return redirect('admin/dashboard');
            }
            else{
                return back()->withInput()->withErrors(['errors' => 'Username or password is invalid']);
            }
        }
        catch(Exception $e){

        }
    }
}
