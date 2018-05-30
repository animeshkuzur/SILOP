<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request){
    	$data = $request->all();
    	//return $data['room_no'];
    	$path = 'admin/report/'.$data['room_no'].'/1';
    	return redirect($path);
    }

    public function report_page($room_no,$id){
    	return view('report',['room_no'=>$room_no,'id'=>$id]);
    }

    public function report_map(){
    	return view('report-map');
    }
}
