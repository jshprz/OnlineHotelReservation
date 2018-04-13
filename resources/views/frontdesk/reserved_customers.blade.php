@extends('master/index')
		<style type="text/css">
			body{
                font-family:Segoe UI Light;
                background:white !important;
            }
div.sidenav{
	z-index: 10;
	-webkit-user-select: none;
	transition: .325s;
	font-size: 14px;
	z-index: 0;
    background: rgb(126, 14, 14) !important;
	position: fixed;
	height: 100vh;
    width: 120px;
    font-family:Segoe UI Light;

}
ul{
	margin: 0;
}

ul#topnavs{
	background-color: #e00f0fa1;
	position: fixed;
	width: 100%;
	z-index: 1000;
	padding-left: 0;
}

a.toplink, a#webname{
	color: white;
	list-style-type: none;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
}

a#webname:hover, a.toplink:hover{
	color: white;
}

a.toplink{
	float: right;
}

a:hover{
	text-decoration: none;
}


div.sidelink{
	list-style-type: none;
	color: white;
	margin-left: 0;
}

div.sidelink:hover{
	text-decoration: underline;
}

#linkLabel{
	text-decoration: none;
}

div.active{
	transition: .325s;
	padding: 10px 10px 10px 10px;
	margin: 15px 0px 0px 0px;
	border-left: 2px solid white;
	background-color: #626262;
	width: inherit;
	color: white;
}

div.containers{
	z-index: 5;
	position: relative;
	top: 60px;
	left: 190px;
	font-size: 13px;
	width: 1140px;

}
table{
    border: solid 1px gray;
    width: 50%;
    margin-top:100px;
  }

input{ 
	width: 85%; 
	padding: 5px;
}

#footer{
	position: relative;
	bottom: 0;
}

table tr td{
	border: 1px solid gray;
	padding: 8px;
}

#btnAdd{
	padding: 10px;
	background: #212121;
	border: none;
	color: white;
}

#btnAdd:hover{
	cursor: pointer;
}
.card-container.card-home {
    max-width: 400px;
    padding: 80px 80px;
}
.card-home {
     background: white;
    /* just in case there no content*/
    padding: 250px;
    margin: 0 auto 25px;
    margin-top: 80px;
    margin-left: 15rem;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.gotocenter{
    margin-left:70px;
}
.category{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:normal;line-height:1.428571429;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;background-image:none;border:1px solid transparent;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}
.category:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.category:hover,.category:focus{color:#333;text-decoration:none}.category:active,.category.active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}        
.category{color:#333;background-color:#fff;border-color:#ccc}.category:hover,.category:focus,.category:active,.category.active,.open .dropdown-toggle.category{color:#333;background-color:#ebebeb;border-color:#adadad}        
 .category{
     position: relative;
     width: 20% !important;
     left:35%;
 }  
 .followme{
 position: relative;
     width: 5% !important;
     left:35%;
 }  
        </style>
	</head>
	<body>
        

	
    	<div class="sidenav">
		<a href="{{route('frontdesk')}}">
					<div class="sidelink">
						<span class="linkLabel">
							Pending Customer
						</span>
					</div>
				</a>
				<a href="{{route('ongoing')}}">
					<div class="sidelink active">
						<span class="linkLabel">
							Ongoing Reservation 
						</span>
					</div>
				</a>
				<a href="{{route('logout')}}">
					<div class="sidelink">
						<span class="linkLabel">
							Log out 
						</span>
					</div>
				</a>
			</div>
        </div>
        <div class="gotocenter">
        <div class="container">
<div id="app">		
 
        <h1>FRONT DESK</h1>
	
        <table class='table table-condensed table-bordered'>
				<thead>
					<tr>
						<td><b>FIRSTNAME</b></td>
						<td><b>LASTNAME</b></td>
						<td><b>ROOM NUMBER</b></td>
						<td><b>ROOM TYPE</b></td>
                        <td><b>TIME IN</b></td>
                        <td><b>TIME OUT</b></td>
						<td><b>ACTIONS</b></td>
					</tr>
				</thead>
	
@foreach($reserved as $ongoing)		
<tbody>
<tr>
<td>{{$ongoing->firstname}}</td>
<td>{{$ongoing->lastname}}</td>
<td>{{$ongoing->room_number}}</td>
<td>{{$ongoing->room_type}}</td>
<td>{{$ongoing->time_in}}</td>
<td>{{$ongoing->time_out}}</td>
<td>
<a class='edit-modal btn btn-success' href="{{route('approve',['id'=>$ongoing->id,'user_id'=>$ongoing->user_id])}}">
Extend
</a>
<a class='edit-modal btn btn-danger' href="{{route('endDuration',['user_id'=>$ongoing->user_id],'room_number'=>$ongoing->room_number,'room_type'=>$ongoing->room_type,'time_in'=>$ongoing->time_in,'time_out'=>$ongoing->time_out,'hour'=>$ongoing->hour,'total_payment'=>$ongoing->total_payment)}}">
End Duration
</a>
</td>
</tr>
</tbody>
@endforeach	
		</table>
        </div>
        </div>
        </div>
