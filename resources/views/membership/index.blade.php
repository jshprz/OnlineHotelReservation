@extends('master/index')
@section('content')
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <div class="container">
        <div class="card-login card-container">
        
            <a href="{{url('/')}}" class="forgot-password">
                         Go back to landing page?
                    </a>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
         <p class="text-white">Login</p>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="{{route('login')}}">
            {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                     <a href="{{route('password.email')}}" class="forgot-password">
                            Forgot the password?
                    </a>
                </div>
                 <div class="wrapper">
                    <span class="group-btn  col-lg-6">     
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">login</button>
                    </span>
                    </form>
                     <span class="group-btn col-lg-6">     
                        <a href="{{route('register')}}" class="btn btn-lg btn-primary btn-block btn-signin">Register</a>
                    </span>
                    
                </div>
                
            <!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    
@endsection