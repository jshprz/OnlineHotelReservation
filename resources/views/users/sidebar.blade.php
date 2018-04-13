 <div class="sidenav">
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
</div>
