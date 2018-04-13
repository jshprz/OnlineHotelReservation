@extends('admin/index')
@section('content')
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
<a class="btn btn-default" href="{{route('users')}}">Go Back</a>
<br>
<br>
			<table class='table table-condensed table-bordered'>
				<thead>
					<tr>
						<td><b><center>ID</b></td>
						<td><b><center>EMAIL</b></td>
                        <td><b><center>FIRSTNAME</b></td>
                        <td><b><center>LASTNAME</b></td>
						<td><b><center>MOBILE NUMBER</b></td>
						<td><b><center>SEX</b></td>
						<td><b><center>ACTION</b></td>
					</tr>
				</thead>
	
		
<tbody>
@foreach ($banneduser as $bannedusers)
<tr>
<td><center>{{$bannedusers->id}}</td>
<td><center>{{$bannedusers->email}}</td>
<td><center>{{$bannedusers->firstname}}</td>
<td><center>{{$bannedusers->lastname}}</td>
<td><center>{{$bannedusers->mobile_number}}</td>
<td><center>{{$bannedusers->sex}}</td>
<td>
<button data-toggle="modal" data-target="#delete-item-{{$bannedusers->id}}" class='edit-modal btn btn-danger'>
Unban
</button>
</td>
</tr>
<div>
		<div class="modal fade" id="delete-item-{{$bannedusers->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
     <center>
      <h4 class="modal-title"id="myModalLabel">Are you sure you want to delete this item?</h4>
       </div>
    <div class="modal-body">
    <div class="form-group">
    <center>
    <a class="btn btn-danger" href="{{route('unban',['id'=>$bannedusers->id])}}">Yes</a>
    <button class="btn btn-success" data-dismiss="modal" aria-label="Close">No</button>
    </div>
    </div>
    </div>
      </div>
      </div>
      </div>
@endforeach
</tbody>	
		</table>
    {{$banneduser->links()}}
</div>
</div>		
</div>
</div>



    



@endsection