@extends('master/index')
@section('sidebar')

@section('content')
<style>
    body{
        background:gray;
    }
    
    h3{
     font-family: Segoe UI Light;
    }
    .card-header{
        position:relative;
        top:-180px;
    }
</style>
    <div class="container">
        <div class="card-availability card-container">
            <div class="card-header">
                <h3>Reservation</h3>
                
             <div class="row">
            <div class="col-md-6">
             <label for="membership_code">Schedule:</label>
             </div>
             <div class="col-md-6">
                 <label>{{$request->session()->get('time_in')}} - {{$request->session()->get('time_out')}}</label>
             </div>

            <div class="col-md-6">
             <label for="membership_code">Room Type:</label>
             </div>
             <div class="col-md-6">
                 <label>{{$request->session()->get('room_type')}}</label>
             </div>

            <div class="col-md-6">
             <label for="membership_code">Hour:</label>
             </div>
             <div class="col-md-6">
                 <label>{{$request->session()->get('hours')}}</label>
             </div>

             <div class="col-md-6">
             <label for="membership_code">Payment Amount:</label>
             </div>
             <div class="col-md-6 justify">
                 <label>Php.{{$request->session()->get('total_price')}}</label>
             </div>
             </div>
            <br>
            
             <a class="form-control btn btn-primary" type="submit" href="{{route('payment')}}">reserve and pay with paypal</a>
             <br>
             <br>
             <a class="form-control btn btn-danger" type="submit" href="{{route('room_availability')}}">cancel reservation</a>
        </div><!-- /card-container -->
    </div>

@endsection