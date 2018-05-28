<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    //
    public static $request_validation_rules = [
        'room_no' => 'required',
        'access_type' => 'required',
        'sdate' => 'required',
        'edate' => 'required',
    ];
}
