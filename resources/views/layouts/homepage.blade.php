<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 25px;
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .warna{
                background-color: grey
                color: black;
            }
            ul.dropdown-lr {
  width: 500px;
}
ul.nav li a, ul.nav li a:visited {
    color: white !important;
}
.navbar-nav > li > .dropdown-menu { background-color: black; }

ul.nav li a:hover, ul.nav li a:active {
    color: rgba(242, 242, 242,.9) !important;
}

ul.nav li.active{
    color: white !important;
}

#login-dp .form-group {
    margin-bottom: 10px;
}

    .dropdown-lr label {
        color: #eee;
    }
}
.dropdown-menu {
    width: 700px !important;
    background-color: black;
}
#login-dp{
    min-width: 350px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(191, 191, 19,.5);
}
#login-dp .help-block{
    font-size:2000px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
.navbar-default .navbar-nav > li > a {
   color: ; /*Change active text color here*/
    }

       li:hover{
        background-color:  grey;
       }
.login{


    color: black;
}
        </style>
    </head>
    <body>
        @yield('content')
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Kepolisian</a>
    </div>
    <div style="position: relative;">
        
     <ul class="nav navbar-nav top-right m-b-md warna link">
            @if (Route::has('login'))
                
                    @auth
                    <li class="active">

                        <a href="{{ url('/home') }}" >Home</a>
                    </li>
                    @else
                    <li class="dropdown login">

                       <a href="#"  data-toggle="dropdown"> Login <i class="   glyphicon glyphicon-log-in"></i><span class="caret"></span></a>
                     
                           
                    <ul id="login-dp" class="dropdown-menu pull-right" >
                        <div class="col-lg-12">
                         <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div>
                            <label for="email" id="email" class="col-md-11 control-label">E-Mail Address</label>
                        </div>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" id="password"  class="col-md-11 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" style="color : black" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                    </ul>
                           
                    
                        
                    </li>
                    <li>                  
                        <a href="{{ route('register') }}">Register</a>

                    </li>
                    @endauth
           
            @endif
   </ul>
    </div>
  </div>
</div>
</nav>

            
            </div>
        </div>
    </body>
</html>
