<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirmation Email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style>
  .qlt-confirmation {
    width: 30%;
    margin: 10px auto;
 }
  
.qlt-confirmation .panel-body {
  	width: 99%;
 	margin: 0 auto;      
        padding: 40px 10px;
 }
      .qlt-confirmation .panel-body .desc{
             	margin: 10px auto; 
            }

.qlt-confirmation .panel-body .notice {
       padding: 0px 20px; 
        margin-top: 50px;
        text-align: left;
        font-style:italic;
        color: gray;
      }
  </style>
  </head>
 
  <body>
<div class="qlt-confirmation">
  	<div class="panel panel-default">
      <div class="panel-body">
        <center>
        <h2><strong>Mchotel</strong></h2>
          <p class="desc">Thank you for signing up!<br><a href='{{ url("guest/register/confirm/{$token}") }}'> Confirm Your Email Address
</a><br></p>
        </center>
        
        <p class="notice">Note: This <b>email</b> will serves as your authentication credential in our website.</p>
      </div>
	</div>
</div>
  </body>
</html>


