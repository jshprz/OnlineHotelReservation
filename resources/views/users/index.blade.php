@extends('master/index')
@section('sidebar')

@include('users/sidebar')

@endsection
@section('content')

<style>
    body{
        background-image:none !important;
        background: rgba(0, 0, 0, 0.747);   
        overflow:hidden;
        color:white;
    }
    h2{
       font-family: Segoe UI Light;
        
    }
    .greet{
        position:relative;
        text-align:center;
        }
</style>

<div>
    <h2 class="greet"><span class="glyphicon glyphicon-bell"></span> Notification </h2>
</div>
<div class="container">
<div class="row">
    <div class="col-md-12">
    <div class="card-home">

</div>
</div>
</div>
</div>
@endsection




