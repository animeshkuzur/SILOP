<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>SILOP Rooms Dashboard</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/styles.css')}}">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
                <img src="{{URL::asset('/assets/logo.png')}}" height="40" alt="">
                {{ DB::table('hotels')->where('id',1)->get(['name'])->first()->name }} <sup><span class="badge badge-success">Online</span></sup>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item border-secondary border-right d-md-block d-none d-lg-block d-xl-block">
                        <a class="nav-link ">
                            <div class="value">SET TEMP : <span class="value-text"> 24°C </span></div>
                        </a>
                    </li>
                    <li class="nav-item dropdown mt-auto mb-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-user-circle-o"></i> {{ \Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Setings</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </li>
                </ul>    
            </div>
        </nav>
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="room-status">
                            <div class="row">
                                <div class="col">
                                    <div class="title">
                                        <h4>2<sup>nd</sup> Floor</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    @if($status == 1)
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        {{ $room_no }}
                                    </button>
                                    @elseif($status == 2)
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        {{ $room_no }}
                                    </button>
                                    @elseif($status == 3)
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#roomDetails">
                                        {{ $room_no }}
                                    </button>
                                    @else
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#roomDetails">
                                        {{ $room_no }}
                                    </button>
                                    @endif
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#roomDetails">
                                        202
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        203
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        204
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        205
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        206
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        207
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        208
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        209
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        210
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        211
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        212
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        213
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        214
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        215
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        216
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        217
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        218
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        219
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        220
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        221
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        222
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        223
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        224
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        225
                                    </button> 
                                </div>
                            </div>
                        </div>
                        <div class="room-status">
                            <div class="row">
                                <div class="col">
                                    <div class="title">
                                        <h4>1<sup>st</sup> Floor</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#roomDetails">
                                        101
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#roomDetails">
                                        102
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        103
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        104
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        105
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        106
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        107
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        108
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        109
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        110
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        111
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        112
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        113
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        114
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        115
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        116
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        117
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        118
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        119
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        120
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        121
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        122
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        123
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        124
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        125
                                    </button> 
                                </div>
                            </div>
                            <div class="room-status">
                            <div class="row">
                                <div class="col">
                                    <div class="title">
                                        <h4>Ground Floor</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#roomDetails">
                                        001
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#roomDetails">
                                        002
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        003
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        004
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        005
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        006
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        007
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        008
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        009
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        010
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        011
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        012
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        013
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        014
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        015
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        016
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        017
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        018
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        019
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#roomDetails">
                                        020
                                    </button> 
                                </div>
                                <div class="col-auto">
                                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        021
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        022
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        023
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        024
                                    </button> 
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#roomDetails">
                                        025
                                    </button> 
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="access-panel">

                            <div class="row">
                                <div class="col">
                                    <div class="title">
                                        <h3>Generate Report</h3>   
                                    </div>
                                </div>
                            </div>
                            @if($errors)
                                @if(count($errors))
                                    @foreach($errors->all() as $error)
                                        <div class="row">
                                        <div class="col">
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <font style="font-size: 12px; padding: 0px; margin : 0px;">
                                                {{ $error }}
                                                </font>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                
                                            </button>
                                        </div>
                                        </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                            <div class="row">
                                <div class="col">
                                    <div class="body">
                                        {!! Form::open(array('route' => 'report','method'=>'POST')) !!}
                                            <div class="form-group">
                                                <label for="room_no">Room Number</label>
                                                <select class="form-control form-control-sm" id="room_no" name="room_no">
                                                    <option value="201">201</option>
                                                    <option>202</option>
                                                    <option>203</option>
                                                    <option>204</option>
                                                    <option>205</option>
                                                    <option>206</option>
                                                    <option>207</option>
                                                    <option>208</option>
                                                    <option>209</option>
                                                    <option>210</option>
                                                    <option>211</option>
                                                    <option>212</option>
                                                    <option>213</option>
                                                    <option>214</option>
                                                    <option>215</option>
                                                    <option>216</option>
                                                    <option>217</option>
                                                    <option>218</option>
                                                    <option>219</option>
                                                    <option>220</option>
                                                    <option>221</option>
                                                    <option>222</option>
                                                </select>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-block">Generate Report</button>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                            {!! Form::close() !!}
                                            <hr>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ url('/admin/report/map') }}" class="btn btn-primary btn-block btn-sm">View Map</a>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="roomDetails" tabindex="-1" role="dialog" aria-labelledby="roomDetails" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Room Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title">
                                Room Number : 201
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="key">
                                Door Lock :
                            </div>
                        </div>
                        <div class="col">
                            <div class="value">
                                @if($door == 0)
                                    <span class="badge badge-danger">Energized</span>
                                @elseif($door == 1)
                                    <span class="badge badge-success">Not Energized</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="key">
                                Door Status: 
                            </div>
                        </div>
                        <div class="col">
                            <div class="value">
                                @if($sensor == 0)
                                    <span class="badge badge-success">Open</span>
                                @elseif($sensor == 1)
                                    <span class="badge badge-danger">Closed</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="key">
                                Lights :
                            </div>
                        </div>
                        <div class="col">
                            <div class="value">
                                @if($switch == 0)
                                    <span class="badge badge-success">On</span>
                                @elseif($switch == 1)
                                    <span class="badge badge-danger">Off</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="key">
                                Temperature :
                            </div>
                        </div>
                        <div class="col">
                            <div class="value">
                                24
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>
        <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
    </body>
</html>
