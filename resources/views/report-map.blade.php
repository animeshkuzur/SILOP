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
                    <div class="col">
                        <div class="report-body">
                            <br>
                            <div class="row">
                                <div class="col">
                                    <h4>{{ DB::table('hotels')->where('id',1)->get(['name'])->first()->name }}
                                    </h4>    
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col">
                                    <img src="{{ URL::asset('/assets/Map.jpg') }}" width="80%">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                        <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary btn-lg btn-sm">Dashboard</a>
                                    
                                </div>
                            </div>
                            <br><br><Br>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
    </body>
</html>
