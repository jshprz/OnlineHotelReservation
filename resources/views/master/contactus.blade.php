@extends('master/index')
@section('content')
<style>
    body{
        background:gray;
    }
</style>
<div class="container">
<br>
<br>
<br>
<br>
<a class="btn btn-primary" href="{{url('/')}}">Go Back</a> 
<div class="row">
<div class="col-sm-12">
<h3 class="text-white">CONTACT<h3>
<h3 class="text-white">We would love to help!<h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->

<div style="margin-left:350px">
<div class="row">
<div class="col-sm-6">
@foreach($email as $emails)
<h3 class="text-white">Email: {{$emails->value}}<h3>
@endforeach
</div><!-- /col-sm-12 -->
</div><!-- /row -->

<div class="row">
<div class="col-sm-6">
@foreach($mobile as $mobiles)
<h3 class="text-white">Mobile Number: {{$mobiles->value}}<h3>
@endforeach
</div><!-- /col-sm-12 -->
</div><!-- /row -->

<div class="row">
<div class="col-sm-6">
@foreach($telephone as $telephones)
<h3 class="text-white">Telephone Number: {{$telephones->value}}<h3>
@endforeach
</div><!-- /col-sm-12 -->
</div><!-- /row -->
</div>
</div><!-- /container -->
@endsection