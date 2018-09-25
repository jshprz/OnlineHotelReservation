@extends('master/index')
@section('sidebar')

@section('content')
<style>
    body{
        
        color:white;
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
                <h3>Notification</h3>
            
             <div class="row">
            <div class="col-md-6">
             <label for="membership_code">Reservation Code:</label>
             </div>
             {{ $reservation_code }}
             <div class="col-md-6">
             <label for="membership_code">Room Number:</label>
             </div>
             {{ $room_number }}
             <div class="col-md-6">
             <label for="membership_code">Room Type:</label>
             </div>
             {{ $room_type }}
             <div class="col-md-6">
             <label for="membership_code">Total Payment:</label>
             </div>
             Php.{{ $total_payment }}
             <div class="col-md-6">
             <label for="membership_code">Hours:</label>
             </div>
             {{ $hour }}
             <div class="col-md-6">
             <label for="membership_code">Time In:</label>
             </div>
             {{ $time_in }}
             <div class="col-md-6">
             <label for="membership_code">Time Out:</label>
             </div>
             {{ $time_out }}
        </div><!-- /card-container -->
    </div>

@endsection