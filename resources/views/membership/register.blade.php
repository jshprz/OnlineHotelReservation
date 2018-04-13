@extends('master/index')
@section('content')
<style>
    body{
        background:gray;
    }
</style>
    <div class="container">
        <div class="card-register card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <p class="text-white">Membership Registration</p>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="{{route('goregister')}}"> 
            {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
    
                <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                 @if ($errors->has('firstname'))
                                        <span class="text-danger">
                                            <p>{{ $errors->first('firstname') }}</p>
                                        </span>
                @endif
                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                 @if ($errors->has('lastname'))
                                        <span class="text-danger">
                                            <p>{{ $errors->first('lastname') }}</p>
                                        </span>
                @endif
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                 @if ($errors->has('email'))
                                        <span class="text-danger">
                                            <p>{{ $errors->first('email') }}</p>
                                        </span>
                @endif
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                 @if ($errors->has('password'))
                                        <span class="text-danger">
                                            <p>{{ $errors->first('password') }}</p>
                                        </span>
                @endif
                <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter your password" required>
                  @if ($errors->has('confirm'))
                                            <span class="text-danger">
                                                <p>{{ $errors->first('confirm') }}</p>
                                            </span>
                                        @endif
                <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" value="+63" required>
                  @if ($errors->has('mobile_number'))
                                            <span class="text-danger">
                                                <p>{{ $errors->first('mobile_number') }}</p>
                                            </span>
                                        @endif
                <select class="form-control" name="sex" required>
                    <option>Male</option>
                    <option>Female</option>
                    <select>
                      @if ($errors->has('sex'))
                                            <span class="text-danger">
                                                <p>{{ $errors->first('sex') }}</p>
                                            </span>
                                        @endif
                        <br>
                 <div class="wrapper">
                     <span class="group-btn">     
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Register</button>
                    </span>
                </div>
                 <a href="{{route('login')}}" class="forgot-password">
                            Back to login?
                    </a>
            </form><!-- /form -->
           
        </div><!-- /card-container -->
    </div><!-- /container -->
    
@endsection