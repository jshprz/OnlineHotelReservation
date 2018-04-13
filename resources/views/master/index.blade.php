<!doctype html>
<html lang="en-US">

<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mchotel</title>
    <meta id="token" name="token" value="{{ csrf_token() }}">


    <title></title>
    <!--[if IE 8]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        @include('master.link')
        @yield('style') 
        
</head>

<body>
    @include('master.notices') 
   
     @yield('sidebar')
     @yield('navbar')
     <div class="container">
        <div class="row">    
                @yield('content')
    </div>
</div>
    @yield('pagination')    

<script type="text/javascript" src="{{asset('jquery/jquery-1.8.3.min.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('bootstrap/locales/bootstrap-datetimepicker.fr.js')}}" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
</script>
<script>
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar").css("background-color", "rgba(0,0,0,0.6)"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".navbar").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
</script>
<script>
$( "#map" ).click(function() {
  $( "#footer" ).scroll();
});
</script>
</body>

</html>