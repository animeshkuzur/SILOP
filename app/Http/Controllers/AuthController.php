<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AccessLog;
use App\AccessType;
use Auth;

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
            $data = $request->only('room_no','access_type','sdate','edate');
            
            $flag=AccessLog::insert([
                'user_id' => Auth::user()->id,
                'room_id' => 1,
                'access_type_id' => 3,
                'start_datetime' => $data->sdate,
                'end_datetime' => $data->edate,
                'active' => 1,
                'uploaded' => 0,
                'approved' => 0,
            ]);

            


        }
        catch(Exception $e){

        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();    
        }
        return redirect()->route('login');
    }
}
