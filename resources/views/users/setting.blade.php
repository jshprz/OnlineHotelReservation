@extends('master/index')
@section('sidebar')

@include('users/sidebar')

@endsection
@section('content')

<style>
    body{
        background-image:none !important;
        background: #f2f2f2;   
        overflow:hidden;
        color:black;
    }
    h2{
       font-family: Segoe UI Light;
        
    }
    .greet{
        position:relative;
        text-align:center;
        }
    .card-update{
        overflow:hidden !important;
        color: black !important;
    }
</style>

<div>
    <h2 class="greet"><span class="glyphicon glyphicon-cog"></span> Profile Setting </h2>
</div>
<br>
<br>
<div class="container">
<div class="row">
    <div class="col-md-12">
    <div class="card-update">

                @foreach($user as $users)
                <form class="form-signin justify" method="POST" action="{{route('update')}}"> 
                         {{ csrf_field() }}
                <div class="row">
                <div class="col-lg-6">
                <label for="firstname">Firstname</label>
                </div>
                <div class="col-lg-6">
                <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{$users->firstname}}" required>
                 </div>
                  </div>
                 @if ($errors->has('firstname'))
                                        <span class="text-danger">
                                            <p>{{ $errors->first('firstname') }}</p>
                                        </span>
                @endif
                <div class="row">
                <div class="col-lg-6">
                <label for="lastname">Lastname</label>
                </div>
                <div class="col-lg-6">
                <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{$users->lastname}}" required>
                </div>
                  </div>
                 @if ($errors->has('lastname'))
                                        <span class="text-danger">
                                            <p>{{ $errors->first('lastname') }}</p>
                                        </span>
                @endif
                <div class="row">
                <div class="col-lg-6">
                <label for="mobile_number">Mobile Number</label>
                </div>
                <div class="col-lg-6">
                <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" value="{{$users->mobile_number}}" required>
                  </div>
                  </div>
                  @if ($errors->has('mobile_number'))
                                            <span class="text-danger">
                                                <p>{{ $errors->first('mobile_number') }}</p>
                                            </span>
                                        @endif
                <div class="row">
                <div class="col-lg-6">
                <label for="Sex">Sex</label>
                </div>
                <div class="col-lg-6">
                <select class="form-control" name="sex"  value="{{$users->sex}}" required>
                    <option>Male</option>
                    <option>Female</option>
                    <select>
                    </div>
                  </div>
                      @if ($errors->has('sex'))
                                            <span class="text-danger">
                                                <p>{{ $errors->first('sex') }}</p>
                                            </span>
                                        @endif
                        <br>
                 <div class="wrapper">
                     <span class="group-btn">     
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Update</button>
                    </span>
                </div>
            @endforeach
            </form>
</div>
</div>
</div>
@endsection




