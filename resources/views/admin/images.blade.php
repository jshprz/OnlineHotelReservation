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
<button data-toggle="modal" data-target="#add-image" class='edit-modal btn btn-default'>
Add Image
</button>

<div>
		<div class="modal fade" id="add-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
      <center>
      <h4 class="modal-title"id="myModalLabel">ADD IMAGE</h4>
       </center>
       </div>
       <form action="{{route('addimage')}}" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
    <div class="modal-body">
    <div class="form-group">
    <label for="description">IMAGE:</label>
    <input type="file" name="image" class="form-control" accept="image/*"/>
    </div>     
    <div class="form-group">
   <center> <button type="submit" class="btn btn-success">Upload Image</button>
    </div>
    </div>
    </form>
    </div>
      </div>
      </div>

</div>
<br>
<br>
			<table class='table table-condensed table-bordered'>
				<thead>
					<tr>
						<td><b><center>ID</b></td>
						<td><b><center>NAME</b></td>
						<td><b><center>DATE ADDED</b></td>
					</tr>
				</thead>
	
		
<tbody>
@foreach ($image as $images)
<tr>
<td><center>{{$images->id}}</td>
<td><center>{{$images->name}}</td>
<td><center>{{$images->created_at}}</td>
</tr>

  

@endforeach
</tbody>	
		</table>
    {{$image->links()}}
</div>
</div>		
</div>
</div>



    



@endsection