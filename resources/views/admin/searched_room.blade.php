@extends('admin/index')
@section('content')
<style>
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
</style>
<br>
<br>
<br>
<br>
<br>

<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12">
@include('admin.notices')
<div class="row">
<button data-toggle="modal" data-target="#add-room" class='btn btn-primary'>
Add Room
</button>
<div class="col-md-10">
<div class="col-md-6">
<form action="{{route('searchRoom')}}" method="GET">
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" name="search"/>
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
</form>
</div>

</div>
</div>
<br>
<br>
			<table class='table table-condensed table-bordered'>
				<thead>
					<tr>
						<td><b><center>ID</b></td>
						<td><b><center>ROOM NUMBER</b></td>
						<td><b><center>ROOM TYPE</b></td>
                        <td><b><center>STATUS</b></td>
                        <td><b><center>PRICE</b></td>
						<td><b><center>ACTION</b></td>
					</tr>
				</thead>
	
		
<tbody>
@foreach ($searchedroom as $searchedrooms)
<tr>
<td><center>{{$searchedrooms->id}}</td>
<td><center>{{$searchedrooms->room_number}}</td>
<td><center>{{$searchedrooms->room_type}}</td>
<td><center>{{$searchedrooms->status}}</td>
<td><center>{{$searchedrooms->price}}</td>
<td>
<button data-toggle="modal" data-target="#update-item-{{$searchedrooms->id}}" class='edit-modal btn btn-warning'>
Edit
</button>
</td>
</tr>

  <div>
		<div class="modal fade" id="update-item-{{$searchedrooms->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
      <center>
      <h4 class="modal-title"id="myModalLabel">EDIT searchedROOM</h4>
       </center>
       </div>
       <form action="{{route('updateRoom')}}" method="POST">
       {{ csrf_field() }}
    <div class="modal-body">
    <div class="form-group">
    <label for="description">ROOM NUMBER:</label>
    <input type="number" name="room_number" class="form-control" value="{{number_format($searchedrooms->room_number)}}"/>
    </div>
     <div class="form-group">
    <label for="price">ROOM TYPE:</label>
    <input type="text" name="room_type" class="form-control" value="{{$searchedrooms->room_type}}"/>
    </div>
    <div class="form-group">
        <label for="price">STATUS:</label>
        <select class="form-control" name="status">
        @if($searchedrooms->status == 'available')
        <option value="{{$searchedrooms->status}}">{{$searchedrooms->status}}</option>
        <option value="not available">Not Available</option>
        <option value="maintenance">Maintenance</option>
        @elseif($searchedrooms->status == 'not available')
        <option value="{{$searchedrooms->status}}">{{$searchedrooms->status}}</option>
        <option value="available">Available</option>
        <option value="maintenance">Maintenance</option>
        @else
        <option value="{{$searchedrooms->status}}">{{$searchedrooms->status}}</option>
        <option value="available">Available</option>
        <option value="not available">Not Available</option>
        @endif
        </select>
    </div>
    <div class="form-group">
        <label for="price">PRICE:</label>
        <input type="number" name="price" class="form-control" value="{{number_format($searchedrooms->price)}}"/>
    </div>
    <input type="text" name="id" class="form-control hidden" value="{{$searchedrooms->id}}"/>
    <div class="form-group">
   <center> <button type="submit" class="btn btn-success">Update room info</button>
    </div>
    </div>
    </form>
    </div>
      </div>
      </div>
@endforeach
</tbody>	
		</table>
    {{$searchedroom->links()}}
</div>
</div>		
</div>
</div>

<div>
		<div class="modal fade" id="add-room" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
      <center>
      <h4 class="modal-title"id="myModalLabel">ADD ROOM</h4>
       </center>
       </div>
       <form action="{{route('addRoom')}}" method="POST">
       {{ csrf_field() }}
    <div class="modal-body">
    <div class="form-group">
    <label for="description">ROOM NUMBER:</label>
    <input type="number" name="room_number" class="form-control" required/>
    </div>
     <div class="form-group">
        <label for="price">ROOM TYPE:</label>
        <select class="form-control" name="room_type">
        <option value="minimac">Minimac</option>
        <option value="standard">Standard</option>
        <option value="deluxe">Deluxe</option>
        <option value="premium">Premium</option>
        <option value="family and suit">Family and Suit</option>
        <option value="team">Team</option>
        </select>
    </div>
    <div class="form-group">
        <label for="price">STATUS:</label>
        <select class="form-control" name="status">
        <option value="Available">Available</option>
        <option value="not available">Not Available</option>
        <option value="Maintenance">Maintenance</option>
        </select>
    </div>
    <div class="form-group">
        <label for="price">PRICE:</label>
        <input type="number" name="price" class="form-control" required/>
    </div>
    <input type="text" name="id" class="form-control hidden"/>
    <div class="form-group">
   <center> <button type="submit" class="btn btn-success">Add Room</button>
    </div>
    </div>
    </form>
    </div>
      </div>
      </div>


    



@endsection