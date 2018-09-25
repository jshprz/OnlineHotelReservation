@extends('master/index')
@section('sidebar')

@include('users/sidebar')

@endsection
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
        top:-160px;
    }
</style>
    <div class="container">
        <div class="card-availability card-container">
            <div class="card-header">
                <br>
                <h3>Reservation</h3>
             <div class="row">
                 <form action="{{route('availability')}}" class="form-horizontal" method="GET"  role="form">
        <fieldset>
            <div class="container">
            <div class="form-group">
               
                <center>
                <div class="input-group date form_datetime col-lg-12" data-date-format="yyyy-mm-dd HH:ii:ss P" data-link-field="dtp_input1">
                    <input class="form-control" type="text" value="" name="time_in" placeholder="Time In" id="time_in" required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            <br>
              <div class="input-group date form_datetime col-lg-12" data-date-format="yyyy-mm-dd HH:ii:ss P" data-link-field="dtp_input1">
                    <input class="form-control" type="text" value="" name="time_out" placeholder="Time Out" id="time_out" required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            <br>
                <div class="input-group col-lg-12">
                    <select class="form-control transparent" name="room_type" required>
                        <option value="">ROOM TYPE</option>
                        <option value="minimac">Minimac</option>
                        <option value="standard">Standard</option>
                        <option value="deluxe">Deluxe</option>
                        <option value="premium">Premium</option>
                        <option value="family and suit">Family and Suit</option>
                        <option value="team">Team</option>
                    </select>
                </div>
            <br>
                 <div class="input-group col-lg-12">
                    <button class="form-control btn btn-primary" type="submit">Check Availability</button>
                    </select>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
        </div>
        </fieldset>
    </form>
        </div><!-- /card-container -->
    </div>

@endsection