<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>OYO Rooms</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/styles.css')}}">
    </head>

    <body>
        <div class="login-panel">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-auto">
                        <div class="logo">
                            <img src="{{URL::asset('/assets/logo.png')}}" class=""/>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-auto">
                        <div class="login-form">
                            <div class="title">
                                <h3>Admin Login</h3>
                            </div>
                            @if($errors)
                                @if(count($errors))
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <font style="font-size: 12px; padding: 0px; margin : 0px;">
                                                {{ $error }}
                                                </font>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                
                                            </button>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                            <hr>
                            {!! Form::open(array('route' => 'adminLoginAuth','method'=>'POST')) !!}
                                <div class="form-group ">
                                    <label for="username">Employee ID</label>
                                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter Employee ID">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            {!! Form::close() !!}
                            <hr>
                            <div class="footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="status">
                                            Status : <span class="badge badge-success">Online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>

        <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
    </body>
</html>
