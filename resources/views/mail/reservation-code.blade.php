<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirmation Email</title>
  </head>
  <body>
<div class="qlt-confirmation">
  	<div class="panel panel-default">
      <div class="panel-body">
        <center>
        <h2><strong>Mchotel</strong></h2>
        @foreach($code as $codes)
          <p class="desc">Your reservation code is <b>{{$codes->reservation_code}}</b></p>
        @endforeach
        </center>
        
        <p class="notice">Note: This <b>code</b> is your proof of reservation.</p>
      </div>
	</div>
</div>
  </body>
</html>


