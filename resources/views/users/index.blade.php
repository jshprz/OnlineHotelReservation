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
    .card-home{
        width: 81%;
	height: 180px;
	overflow: auto;
	line-height: 52px;
	clear: both;
	overflow-y:visible;
    }
    .greet{
        position:relative;
        text-align:center;
        }
        .trash{
            float:right;
        }
</style>

<div>
    <h2 class="greet"><span class="glyphicon glyphicon-bell"></span> Notification </h2>
</div>
<div class="container">
<div class="row">
    <div class="col-md-12">
    <div class="card-home">
    @if(!is_null($notification))
    @foreach($join as $notifications)
    <div class="notice notice-lg notice-success">
        <strong>{{$notifications->created_at}} -</strong>
        <a type="button" href="#" data-toggle="modal" data-target="#update-item-{{$notifications->id}}"><strong>{{$notifications->body}}</strong></a>
        <a class="trash" href="{{route('trashnotif',['id' => $notifications->id])}}"><span class="glyphicon glyphicon-trash"></span></a>
    </div>
    <div style="color:black">
		<div class="modal fade" id="update-item-{{$notifications->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
      <center>
      <h4 class="modal-title"id="myModalLabel"><strong>YOUR RESERVATION INFORMATION</strong></h4>
       </center>
       </div>
        <h3>RESERVATION CODE: {{$notifications->reservation_code}}</h3>
       <h3>ROOM NUMBER: {{$notifications->room}}</h3>
       <h3>ROOM TYPE: {{strtoupper($notifications->room_type)}}</h3>
       <h3>TOTAL PAYMENT: Php.{{$notifications->total_payment}}</h3>
       <h3>HOURS: {{$notifications->hour}}</h3>
       <h3>TIME IN DATE: {{$notifications->time_in}}</h3>
       <h3>TIME OUT DATE: {{$notifications->time_out}}</h3>
    </div>
      </div>
      </div>
    
    @endforeach
    @else
    h3 style="color:black">Empty notification</h3>
    @endif
</div>
</div>
</div>
</div>
@endsection




