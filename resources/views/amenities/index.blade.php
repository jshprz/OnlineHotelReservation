@extends('master/index')
@section('content')
<style>
    body{
        background:gray;
        color:white;
    }
</style>
<div class="container">
<br>
<a class="btn btn-primary" href="{{url('/')}}">Go Back</a> 
<div class="carousel slide" id="myCarousel" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                        @foreach ($image as $images => $value)
                               <div class="item {{ $images == 0 ? ' active' : '' }}">
                                     <img src="../images/{{ $value->name }}">
                                             </div>
                        @endforeach
                             <!-- Carouse Images -->
                        <!-- Carousel Controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="row">
<div class="col-md-2">
<br>
<span><strong>Mchotel</strong></span>
</div>
</div>
<div class="row">
<div class="col-md-4">
<p>35 Susano Road,Quezon City,Manila</p>
</div>
</div>
<div class="row">
<div class="col-md-3">
<span><strong>Hotel Amenities</strong></span>
<ul>
<li>Restaurant</li>
<li>One meeting room</li>
<li>Dry cleaning/laundry service</li>
<li>Elevator/lift</li>
<li>Breakfast available(surcharge)</li>
<li>Designated smoking areas</li>
</ul>

<span><strong>Family Friendly Amenities</strong></span>
<ul>
<li>Outdoor pool</li>
<li>Rollaway</li>
<li>Free Wi-Fi</li>
</ul>

<span><strong>Internet</strong></span>
<ul>
<li>Available in all rooms:Free Wi-Fi</li>
<li>Available in some public areas:Free Wi-Fi</li>
</ul>

<span><strong>Parking</strong></span>
<ul>
<li>Available in all rooms:Free self parking</li>
</ul>

<span><strong>Room Amenities</strong></span>
<ul>
<li>Balcony</li>
<li>Free local calls</li>
<li>Private bathroom</li>
<li>Shower only</li>
<li>Desk</li>
<li>Cable TV service</li>
</ul>
<span><strong>Where to Eat</strong></span>
<ul>
<li>Breakfast is available for a surcharge and served each morning between 6 AM and 10 AM</li>
</ul>
<span><strong>Nearby thing to do</strong></span>
<ul>
<li>Recreational amenities at the hotel include an outdoor pool</li>
</ul>
<span><strong>Accessibility</strong></span>
<ul>
<li>If you have requests for specific accessibility needs, please note them at check-out when you book your room</li>
<li>Accessible bathroom</li>
<li>In-room accessibility</li>
</ul>
</div>
<div class="col-md-4">
<br>
<ul>
<li>Total number of rooms - 94</li>
<li>Free self parking</li>
<li>Free Wifi</li>
<li>Outdoor pool</li>
<li>Concierge services</li>
<li>24-hour front desk</li>
</ul>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<ul>
<li>Air conditioning</li>
<li>Daily housekeeping</li>
<li>Free toiletries</li>
<li>Hair dryer (on quest)</li>
<li>Rollaway/extra beds available</li>
<li>Free Wi-Fi</li>
</ul>
</div>

<div class="col-md-4">
<span><strong>Hotel Policies</strong></span>
<br>
<ul>
<li>Check-in time starts at 2:00 PM</li>
<li>Minimum check-in age is 18</li>
<li>Check-out time is noon</li>
<li>Outdoor pool</li>
</ul>
<span><strong>Payment type</strong></span>
<ul>
<li>Paypal</li>
</ul>
<span><strong>Children and extra beds</strong></span>
<ul>
<li>Children are welcome</li>
<li>Rollaway/extra beds are available</li>
<li>Cribs (infant beds) are not available</li>
</ul>
<span><strong>Pets</strong></span>
<ul>
<li>No pets or service animals allowed</li>
</ul>
<span><strong>You need to know</strong></span>
<ul>
<li>Extra-person charges may apply and vary depending on property policy</li>
</ul>
<span><strong>Fees Optional Extras</strong></span>
<ul>
<li>The following  fees and deposits are charged by the property at the time of service, check-in, or check-out</li>
<li>Breakfast fee:PHP 200 per person (approximately)</li>
<li>The above list may not be comprehensive. Fees and deposits may not include tax and are subject to change</li>
</ul>
</div>
</div>

</div><!-- /container -->
@endsection