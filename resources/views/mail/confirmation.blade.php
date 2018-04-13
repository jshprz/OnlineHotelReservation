<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirmation Email</title>
  </head>
  <body>
<h1>Thanks for sign up!</h1>
<p>
You need to <a href='{{ url("guest/register/confirm/{$token}") }}'> Confirm Your Email Address
</a>
</p>
  </body>
</html>
