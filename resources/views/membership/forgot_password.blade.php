@extends('master/index')
@section('content')

    <div class="container">
        <div class="card-login card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
         <p class="text-white">Forgot Password</p>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="{{route('password.email')}}">
            {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Send Password Reset Link</button>
    
                     <a href="{{route('login')}}" class="forgot-password">
                         Go back to login?
                    </a>
                
                </div>
            <!-- /form -->
           </form>
        </div><!-- /card-container -->
    </div><!-- /container -->
    
@endsection