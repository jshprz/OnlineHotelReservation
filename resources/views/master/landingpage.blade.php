@extends('master/index')
@section('navbar')
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
@endsection