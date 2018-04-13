@extends('master/index')
@section('content')
<style>
    body{
        background:gray;
    }
</style>
<div class="container">
<br>

<div id="carousel-example" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                        @foreach ($image as $images => $value)
                               <div class="item{{ $images == 0 ? ' active' : '' }}">
                                     <img src="../images/{{ $value->name }}">
                                             </div>
                        @endforeach
                             <!-- Carouse Images -->
                        <!-- Carousel Controls -->
                        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                        <!-- End Carousel Controls -->
                    </div>

</div><!-- /container -->
@endsection