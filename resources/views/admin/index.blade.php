<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mchotel</title>
    <meta id="token" name="token" value="{{ csrf_token() }}">

    
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <style>

    body {
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color:white;
  color:black;
  overflow-x: hidden;
}


.sidenav {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
    opacity: 0.7;
}

.sidenav a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size:27px;
    color: #818181;
    display: block;
    margin-top:40px;
    font-family: "Agency Fb";
    
}

.sidenav a:hover {
    color: #f1f1f1;
    background-color:#3B4039;

}



@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}

}

ul {

  list-style-type:  none;
}

 
ul h3 {
 
    margin: 0;
    padding: 0;
    margin-left:  300px;
    background-color: #333;
    position: fixed;  
    top: 0;
    width: 900px;
    font-size:16px;
    margin-top:100px;
    font-family: "Agency Fb";
    height: 47px;
    opacity:0.8;
}

li  {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
   ;
}

li a:hover:not(.active) {
    background-color: #111;
}


ul h3 p {
margin-top:15px;
margin-left:700px;
color:#757171;
}




.header {
  font-family: "Century Gothic";
  font-size:60px;
  margin-left: 500px;
  text-shadow: 0px 1px 5px white; 
}
.content{
  margin-left: 250px;
  text-shadow: 0px 1px 5px white; 
}






    </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <h1>&nbsp&nbspMCHOTEL ADMIN</h1>
      </a>
    </div>
    <div class="navbar navbar-right">
    <br>
    <br>
    <a href="{{route('logout')}}" style="margin-right:100px">LOGOUT</a>
    </div>
  </div>
</nav>
@include('admin.sidebar')
<center>
@yield('content')

<script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);
});
</script>
</body>
</html>