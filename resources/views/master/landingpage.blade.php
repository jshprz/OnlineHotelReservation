@extends('master/index')
@section('navbar')


	<div class="container">
  <div class="row">
    <div class="col-sm-6">
<h4 style="color:#EFDE04;text-shadow:0px 3px 4px #46544E;">Your Comfort Your Choice</h4>
<small style="color:#575650;"> A proud member of Hotel and Restaurant Association of the Philippines</small>

    </div>
    <div class="col-sm-6">
        
 <form class="form-inline">
 		<small>Sign in with us.</small>
    <small> <a class="nav-link" href="{{route('login')}}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSign In</a></small>
</form>
 
<form class="form-inline">
 		<small>Don't have an account?</small>
    <small> <a class="nav-link" href="{{route('register')}}">Sign Up For Free!</a></small>
</form>
</div>
</div>

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
        <a class="nav-link" href="#Reviews">Reviews</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>    
       <li class="nav-item">
        <a class="nav-link" href="#Amenities">Amenities</a>
      </li> 
   
    </ul>
  </div>  
</nav>







<!---Carousel-->
<div id="demo" class="carousel slide" data-ride="carousel">


  
   <!-- Indicators -->

  
  <!-- The slideshow -->
  <div class="carousel-inner" style="width:100%;margin-top:1px;">
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

<!---end carousel-->


<div class="container" style="background-color:rgba(0,0,0,0.6);margin-top:10px;color:white">
  <div class="row">
    <div class="col-sm-6">
   
  <h4 id="contactus">Contact Us</h4>
  <ul>
  <h6><li>Tel no. Call (02) 293 1188</li></h6>
   <h6><li>Facebook Page: https://www.facebook.com/pg/mchotelph</li></h6>
</ul>
    </div>
    <div class="col-sm-6">
    <h4 id="aboutus">About Us</h4>
    @foreach($about as $abouts)
<article class="text-white">{{$abouts->value}}</article>
@endforeach
    </div>
  </div>
</div>

<div class="container" style="margin-top:20px;">

  <div class="row" style="background-color:rgba(0,0,0,0.6);color:white">
    <div class="col-sm-6">
	<h4 id="Amenities">Amenities</h4>
<ul>
	<h6> Hotel Amenities</h6>
	<li>Restaurant</li>
	<li> Total number of rooms - 94</li>
	 <li>One meeting room</li>
	 <li> Free self parking</li> 
	 <li> Dry cleaning/laundry service 
	 <li> Free WiFi </li>
	 <li> Lift </li>
	  <li>Outdoor pool Breakfast available (surcharge) </li>
	 <li> Concierge services </li>
	 <li> Designated smoking areas</li> 
	<li>  24-hour front desk </li>
<h6>Family Friendly Amenities</h6>
</ul>
<ul>
	<li>Outdoor pool </li>
	<li> Free Wi-Fi </li>
	  <li>Rollaway/extra beds available  </li>
</ul>
<ul>
<h6>Room Amenities</h6>

<li>Balcony </li>
<li>Air conditioning</li>
 <li>Free local calls </li>
 <li>Daily housekeeping</li>
  <li>Private bathroom</li>
   <li>Free toiletries </li>
   <li>Shower only</li>
    <li>Hair dryer (on request) </li>
    <li>Desk Cable TV service</li>
     <li>Free WiFi</li>
      <li>Number of bathrooms -94</li> 
<li>Room service (24 hours) </li>
<li>LCD TV</li> 






</ul>

</div>
 <div class="col-sm-6" style="background-color:rgba(0,0,0,0.6); color:white">
    <h4 id="aboutus">Location</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.795301845491!2d121.03681831439833!3d14.724161989723878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0ff2c71d3d5%3A0xfa7ee1d7272c67d2!2sMchotel!5e0!3m2!1sen!2sph!4v1536908171357" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<h4>Branches</h4>
<small><p>#35 Susano Road Novaliches Proper Quezon City Manila</p></small>
<small><p> 370 Regalado Hwy, Novaliches, Quezon City, Metro Manila</p></small>


    </div>
  </div>
</div>


<div class="container" style="background-color:rgba(0,0,0,0.6);color:white;">
  <div class="row">
    <div class="col-sm-12">

      <h5 id="Reviews">Client Feed Back</h5>
      @foreach($join as $joins)
      <p style="background-color:white;border-radius:4px;height:30px;">{{$joins->firstname}}&nbsp{{$joins->lastname}} - {{$joins->feedback}}</p>
      @endforeach
    </div>
  </div>
</div>


<footer class="mainfooter" role="contentinfo" style="margin-top:90px;background-color:rgba(0,0,0,0.6);color:white">
  <div class="footer-top p-y-2">
    <div class="container-fluid"  style="background-color:#E7E7E3;">
      <div class="row">
        
 
        </div>
    </div>
  </div>
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Address</h4>
          <address>
                <ul class="list-unstyled">
                  <li>
                    City Hall<br>
                    212  Street<br>
                    Lawoma<br>
                    735<br>
                  </li>
                  <li>
                    Phone: 0
                  </li>
                </ul>
              </address>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Popular Services</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Payment Center</a></li>
            <li><a href="#">Contact Directory</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="#">News and Updates</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Website Information</h4>
          <ul class="list-unstyled">
            <li><a href="#">Website Tutorial</a></li>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Webmaster</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
       
    </div>
  </div>
  </div>
  <div class="footer-bottom" style="text-align:center;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!--Footer Bottom-->
          <p class="text-xs-center">&copy; Copyright 2018 - Mchotel Philippines  All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>









<!-- Modal SIGNUP -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MC Hotel Account Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      	<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" class="btn btn-success btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
				            <a href="mchotelHome.html">Already Have An Account?</a>
				         </div>
					</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>






@endsection
<!-- @extends('master/index')
@section('navbar')
<style>
    .navbar {
  text-align: center;
  background: transparent;
  color: white;
  font-size: 1em;
  position: fixed;
  width: 100%;
  right: 0%;
   -webkit-transition: background-color 2s ease-out;
  -moz-transition: background-color 2s ease-out;
  -o-transition: background-color 2s ease-out;
  transition: background-color 2s ease-out;
  border:none;
}
.navbar:hover{
  background: rgba(0,0,0,0.6) !important;
}
.navbar li{
  text-decoration: none;
  display: inline-block;
  padding: 2em 3.9em 1em;
  -webkit-transition: all .3s ease-in;
   text-align: center;
   position: relative;
}
.navbar li:hover {
  background: rgba(255,255,255,0.3);
}

    </style>
<div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-center text-white">
                <li><a id="map" href="{{route('viewfeedbackPage')}}">Reviews</a></li>
                <li><a id="contact" href="{{route('contactus')}}">Contact us</a></li>
                <li><a id="about" href="{{route('aboutus')}}">About us</a></li>
                <li><a id="gallery" href="{{route('amenitiesPage')}}">Amenities</a></li>
               <li><a id="membership" href="{{route('login')}}">Sign in</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
</div>
<section class="front-section">
   <div class="middle">
   @foreach ($logo as $logos)
<img src="/images/{{$logos->value}}"></img>
@endforeach
<p class="text-white">My Comforts, My Choice</p>
</div>
</section>
@endsection -->