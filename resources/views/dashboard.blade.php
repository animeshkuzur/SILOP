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
            <a class="navbar-brand" href="#">
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
                            <div class="value">ACTUAL TEMP : <span class="value-text"> 24°C </span><br>SET TEMP : <span class="value-text"> 24°C </span></div>
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
                                        <h3>Rooms</h3>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="access-panel">

                            <div class="row">
                                <div class="col">
                                    <div class="title">
                                        <h3>Access Panel</h3>   
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
                                        {!! Form::open(array('route' => 'requestAuth','method'=>'POST')) !!}
                                            <div class="form-group">
                                                <label for="room_no">Room Number</label>
                                                <select class="form-control form-control-sm" id="room_no" name="room_no">
                                                    <option>201</option>
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
                                                <label for="access_type">Access Type</label>
                                                <select class="form-control form-control-sm" id="access_type" name="access_type">
                                                    <option>Guest Checkin</option>
                                                    <option>Guest Extension</option>
                                                    <option>Housekeeping</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group" hidden="hidden">
                                                <label for="other_at">Other Access Type</label>
                                                <input type="text" class="form-control form-control-sm" name="other_at" id="other_at" placeholder="Specify Access Type">
                                            </div>
                                            <div class="form-group" hidden="hidden">
                                                <label for="booking_id">Booking ID</label>
                                                <input type="text" class="form-control form-control-sm" name="booking_id" id="booking_id" placeholder="Booking ID">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Duration</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="sdate">From :</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-control-sm" id="sdate" name="sdate" placeholder="dd/mm/yyyy hh:mm">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="edate">To :</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-control-sm" id="edate" name="edate" placeholder="dd/mm/yyyy hh:mm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-success btn-sm btn-block">Request Unlock</button>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-danger btn-sm btn-block">Emergency Unlock</button>
                                                    </div>
                                                </div>
                                            </div>
                                        {!! Form::close() !!}
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
                                Door : 
                            </div>
                        </div>
                        <div class="col">
                            <div class="value">
                                <span class="badge badge-success">Open</span>
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
                                <span class="badge badge-success">On</span>
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
