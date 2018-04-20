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
<br>
<br>
<div class="row">
<div class="col-sm-12">
<img src="{{asset('images/pics1.jpg')}}" width="500px" height="300px"/>
</div><!-- /col-sm-12 -->
</div><!-- /row -->

<div class="row">
<div class="col-sm-12">
@foreach($about as $abouts)
<article class="text-white">{{$abouts->value}}</article>
@endforeach
</div><!-- /col-sm-12 -->
</div><!-- /row -->

</div><!-- /container -->
@endsection