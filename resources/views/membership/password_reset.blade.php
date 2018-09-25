@extends('master/index')
@section('content')

    <div class="container">
        <div class="card-login card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
         <p class="text-white">Reset Password</p>
            <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-signin" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <input type="hidden" name="token" value="{{ $token }}">
                 <input type="text" name="email" id="inputEmail" class="form-control" value="{{ $email or old('email') }}" placeholder="Email Address" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="inputEmail" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <input id="inputEmail" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Send Password Reset Link</button>
    
                </div>
            <!-- /form -->
           </form>
        </div><!-- /card-container -->
    </div><!-- /container -->
    
@endsection