<style>

</style>
<nav class="navbar navbar-default" style="padding-bottom:-10px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <h5 style="padding-left:50px;">MCHOTEL</h5>
	  </a>
	  
	  
	</div>
	<div class="navbar-left" style="margin-top:75px; margin-left:250px;">
	<h4>
	<a href="{{route('dashboard')}}" style="padding-left:20px;">
				
				Notification
		
	</a>

	 <a href="{{route('room_availability')}}" style="padding-left:60px;">
		
				Reserve Room

	</a>
	
	<a href="{{url('user/setting')}}" style="padding-left:60px;">
	
				Profile Setting
		
	</a>
	<a href="{{route('reviews')}}" style="padding-left:60px;">
	
				Reviews
		
	</a>
	</h4>
	</div>
    <div class="navbar navbar-right">
    <br>
    <br>
    <h5><a href="{{route('logout')}}" style="margin-right:100px">LOGOUT</a></h5>
    </div>
  </div>
</nav>
 <!-- <div class="sidenav">
                <div class="ontop">
					<br>
						
							<a href="{{url('/')}}"> {{strtoupper(Auth::user()->firstname)}} {{strtoupper(Auth::user()->lastname)}}</a>
							
                </div>
                <div class="list">
				<a href="{{route('dashboard')}}">
					<div class="sidelink active">
						<span class="linkLabel">
							Notification
						</span>
					</div>
				</a>
				
                <a href="{{route('room_availability')}}">
					<div class="sidelink">
						<span class="linkLabel">
							Reserve Room
						</span>
					</div>
                </a>
				
				<a href="{{url('user/setting')}}">
					<div class="sidelink">
						<span class="linkLabel">
							Profile Setting
						</span>
					</div>
                </a>
				
				<a href="{{route('reviews')}}">
					<div class="sidelink">
						<span class="linkLabel">
							Reviews
						</span>
					</div>
                </a>

                <a href="{{route('logout')}}">
					<div class="logout">
						<span class="linkLabel">
							Logout
						</span>
					</div>
                </a>
            </div>
</div> -->
