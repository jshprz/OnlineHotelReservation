@extends('master/index')
@section('navbar')

<style>
    #minimac:hover {

box-shadow:0px 1px 5px gray;
transition:0.3s;
 border-radius:4px;
}

#minimac {

transition:0.9s;

}
</style>

<h4 style="color:#EFDE04;text-shadow:0px 3px 4px #46544E;">Your Comfort Your Choice</h4>
<small style="color:#575650;"> A proud member of Hotel and Restaurant Association of the Philippines</small>

    </div>

<nav class="navbar navbar-expand-md  navbar-dark sticky-top" style="box-shadow:1px 1px 4px black;">
<a class="navbar-brand" href="#" style="padding-bottom:20px;">
  @foreach ($logo as $logos)    
  <img src="/images/{{$logos->value}}" width="55" height="55" alt="MCHOTEL">
  @endforeach
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"  data-toggle="modal" data-target="#myModal">Notification</a>
      </li>
         




      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
My Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Account Settings</a>
        <a class="dropdown-item" href="{{ route('reviews') }}">Reviews</a>
                <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
      </div>
    </li>
  </ul>
  </div>  
</nav>
<br>

<div class="container" style="background-color:rgba(0,0,0,0.6);color:white;">
<div class="col-sm-6">
<div class="row">

<h3>Reserve A Room At Affordable Price!</h3>
<h6>Here! At Mchotel!</h6>


</div>
</div>
</div>






<div class="container">
  <div class="row">
    <div class="col-sm-6">
     <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top:10px;width:100%;">

  
  <!-- The slideshow -->
  <div class="carousel-inner">
  @foreach ($image as $images => $value)
                               <div class="carousel-item {{ $images == 0 ? ' active' : '' }}">
                                     <img src="../images/{{ $value->name }}" width="100%" height="500">
                                             </div>
                        @endforeach

  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    </div>
    <div class="col-sm-6" style="background-color:rgba(0,0,0,0.6);color:white;margin-top:10px;">
   <h3> Services Offered</h3>
 
   <p>One meeting room, Free self parking, Dry cleaning/laundry service, Free WiFi, Lift, Outdoor pool Breakfast available (surcharge), Concierge services </p>
    </div>
  </div>
    </div>
</div>


<div class="container" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12">
      <h4 style="color:#40064E">Room Type</h4>

<div class="container" id="minimac" style="margin-top:20px;background-color:rgba(0,0,0,0.6);color:white;">
  <div class="row">
    <div class="col-sm-7">
        <br>
        <br>
        <br>
        <br>
      <h1 style="color:white">Minimac</h1>
  

    </div>
    <div class="col-sm-5">
    <p><b>Room Price : P120.00</b></p>
     <p><b>Good For 4 Persons</b></p>
      <p><b>Room Packages</b></p>
      <p>  <small>Free Breakfast</small></p>
       <p>  <small>Free Wifi</small></p>
       <p>  <small>Free Swimming</small></p>
       <button class="btn btn-warning" data-toggle="modal" data-target="#modalforminimac">Reserve Now!</button>

    </div>
  </div>


</div>
<div class="container" id="minimac" style="margin-top:20px;background-color:rgba(0,0,0,0.6);color:white;">
  <div class="row">
    <div class="col-sm-7">
    <br>
        <br>
        <br>
        <br>
      <h1 style="color:white">Deluxe</h1>
      
    </div>
    <div class="col-sm-5">
    <p><b>Room Price : P180.00</b></p>
     <p><b>Good For 4 Persons</b></p>
      <p><b>Room Packages</b></p>
      <p>  <small>Free Breakfast</small></p>
       <p>  <small>Free Wifi</small></p>
       <p>  <small>Free Swimming</small></p>
       <button class="btn btn-warning" data-toggle="modal" data-target="#modalforDelux">Reserve Now!</button>

    </div>
  </div>
</div>


<div class="container" id="minimac" style="margin-top:20px;background-color:rgba(0,0,0,0.6);color:white;">
  <div class="row">
    <div class="col-sm-7">
    <br>
        <br>
        <br>
        <br>
      <h1 style="color:white">Standard</h1>


    </div>
    <div class="col-sm-5">
    <p><b>Room Price : P160.00</b></p>
     <p><b>Good For 4 Persons</b></p>
      <p><b>Room Packages</b></p>
      <p>  <small>Free Breakfast</small></p>
       <p>  <small>Free Wifi</small></p>
       <p>  <small>Free Swimming</small></p>
       <button class="btn btn-warning" data-toggle="modal" data-target="#modalforVIP">Reserve Now!</button>

    </div>
  </div>
</div>


<div class="container" id="minimac" style="margin-top:20px;background-color:rgba(0,0,0,0.6);color:white;">
  <div class="row">
    <div class="col-sm-7">
    <br>
        <br>
        <br>
        <br>
      <h1 style="color:white">Premium</h1>
      
    </div>
    <div class="col-sm-5">
    <p><b>Room Price : P200.00</b></p>
     <p><b>Good For 4 Persons</b></p>
      <p><b>Room Packages</b></p>
      <p>  <small>Free Breakfast</small></p>
       <p>  <small>Free Wifi</small></p>
       <p>  <small>Free Swimming</small></p>
       <button class="btn btn-warning" data-toggle="modal" data-target="#modalforPremium">Reserve Now!</button>

    </div>
  </div>
</div>

<div class="container" id="minimac" style="margin-top:20px;background-color:rgba(0,0,0,0.6);color:white;">
  <div class="row">
    <div class="col-sm-7">
    <br>
        <br>
        <br>
        <br>
      <h1 style="color:white">Family and Suit</h1>
      
    </div>
    <div class="col-sm-5">
    <p><b>Room Price : P280.00</b></p>
     <p><b>Good For 4 Persons</b></p>
      <p><b>Room Packages</b></p>
      <p>  <small>Free Breakfast</small></p>
       <p>  <small>Free Wifi</small></p>
       <p>  <small>Free Swimming</small></p>
       <button class="btn btn-warning" data-toggle="modal" data-target="#modalforFamily">Reserve Now!</button>

    </div>
  </div>
</div>

<div class="container" id="minimac" style="margin-top:20px;background-color:rgba(0,0,0,0.6);color:white;">
  <div class="row">
    <div class="col-sm-7">
    <br>
        <br>
        <br>
        <br>
      <h1 style="color:white">Team</h1>
      
    </div>
    <div class="col-sm-5">
    <p><b>Room Price : P400.00</b></p>
     <p><b>Good For 4 Persons</b></p>
      <p><b>Room Packages</b></p>
    <p>  <small>Free Breakfast</small></p>
       <p>  <small>Free Wifi</small></p>
       <p>  <small>Free Swimming</small></p>
       <button class="btn btn-warning" data-toggle="modal" data-target="#modalforTeam">Reserve Now!</button>

    </div>
  </div>
</div>





    </div>
  </div>
</div>


  </div>





  <div class="container" style="margin-top:40px;">
      <div class="row">
<div class="col-sm-12">


 <form action="{{route('sendfeedback')}}" method="POST">
            {{ csrf_field() }}
    <div class="form-group">
      <h6>Send Us Your Comments</h6>
      
      <textarea class="form-control" rows="5" id="comment" name="feedback" required></textarea>
      @if ($errors->has('feedback'))
                <span class="text-danger">
                <p>{{ $errors->first('feedback') }}</p>
                </span>
                @endif
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>


  </div>
</div>
</div>



  <!-- The Modal -->
  <div class="modal fade" id="myModal" style="overflow:scroll">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Notifications</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">


            
    @foreach($join as $notifications)
    <div class="notice notice-lg notice-success">
        <strong>{{$notifications->created_at}} -</strong>
        <form action="{{route('notification')}}" method="GET">
            {{ csrf_field() }}
            <input type="hidden" name="reservation_code" value="{{$notifications->reservation_code}}">
            <input type="hidden" name="room_number" value="{{$notifications->room}}">
            <input type="hidden" name="room_type" value="{{$notifications->room_type}}">
            <input type="hidden" name="total_payment" value="{{$notifications->total_payment}}">
            <input type="hidden" name="hour" value="{{$notifications->hour}}">
            <input type="hidden" name="time_in" value="{{$notifications->time_in}}">
            <input type="hidden" name="time_out" value="{{$notifications->time_out}}">
        <button type="submit" class="btn btn-success"><strong>{{$notifications->body}}</strong></button>
        </form>
        <a class="trash" href="{{route('trashnotif',['id' => $notifications->id])}}"><span class="glyphicon glyphicon-trash"></span></a>
    </div>
    <div style="color:black">
		<div class="modal fade" id="update-item-{{$notifications->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
      <center>
      <h4 class="modal-title"id="myModalLabel"><strong>YOUR RESERVATION INFORMATION</strong></h4>
       </center>
       </div>
        <h3>RESERVATION CODE: {{$notifications->reservation_code}}</h3>
       <h3>ROOM NUMBER: {{$notifications->room}}</h3>
       <h3>ROOM TYPE: {{strtoupper($notifications->room_type)}}</h3>
       <h3>TOTAL PAYMENT: Php.{{$notifications->total_payment}}</h3>
       <h3>HOURS: {{$notifications->hour}}</h3>
       <h3>TIME IN DATE: {{$notifications->time_in}}</h3>
       <h3>TIME OUT DATE: {{$notifications->time_out}}</h3>
    </div>
      </div>
      </div>
    
    @endforeach
   

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


<div class="modal fade" id="modalforFamily" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Family and Suit Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
                <input type="hidden" name="room_type" value="family and suit"/>
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

      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="modalforTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Team Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
                <input type="hidden" name="room_type" value="team"/>
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

      </div>
     
    </div>
  </div>
</div>


<div class="modal fade" id="modalforPremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Premium Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
                <input type="hidden" name="room_type" value="premium"/>
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

      </div>
     
    </div>
  </div>
</div>

<!---minimacmodal-->
<div class="modal fade" id="modalforminimac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Minimac Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           
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
                <input type="hidden" name="room_type" value="minimac"/>
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
       


      </div>

    </div>
  </div>
</div>


<!---DELUX MODAL-->

<div class="modal fade" id="modalforDelux" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deluxe Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
                <input type="hidden" name="room_type" value="deluxe"/>
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

      </div>
     
    </div>
  </div>
</div>

<!----vip modal-->
<div class="modal fade" id="modalforVIP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Standard Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
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
                <input type="hidden" name="room_type" value="standard"/>
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

      </div>
      
    </div>
  </div>


    


<!-- <div>
    <h2 class="greet"><span class="glyphicon glyphicon-bell"></span> Notification </h2>
</div>
<div class="container">
<div class="row">
    <div class="col-md-12">
    <div class="card-home">
    @if(!is_null($notification))
    @foreach($join as $notifications)
    <div class="notice notice-lg notice-success">
        <strong>{{$notifications->created_at}} -</strong>
        <a type="button" href="#" data-toggle="modal" data-target="#update-item-{{$notifications->id}}"><strong>{{$notifications->body}}</strong></a>
        <a class="trash" href="{{route('trashnotif',['id' => $notifications->id])}}"><span class="glyphicon glyphicon-trash"></span></a>
    </div>
    <div style="color:black">
		<div class="modal fade" id="update-item-{{$notifications->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
      <center>
      <h4 class="modal-title"id="myModalLabel"><strong>YOUR RESERVATION INFORMATION</strong></h4>
       </center>
       </div>
        <h3>RESERVATION CODE: {{$notifications->reservation_code}}</h3>
       <h3>ROOM NUMBER: {{$notifications->room}}</h3>
       <h3>ROOM TYPE: {{strtoupper($notifications->room_type)}}</h3>
       <h3>TOTAL PAYMENT: Php.{{$notifications->total_payment}}</h3>
       <h3>HOURS: {{$notifications->hour}}</h3>
       <h3>TIME IN DATE: {{$notifications->time_in}}</h3>
       <h3>TIME OUT DATE: {{$notifications->time_out}}</h3>
    </div>
      </div>
      </div>
    
    @endforeach
    @else
    h3 style="color:black">Empty notification</h3>
    @endif
</div>
</div>
</div>
</div> -->
@endsection




