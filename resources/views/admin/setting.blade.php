@extends('admin/index')
@section('content')

<br>
<br>
<br>
<br>
<br>

<div class="content">

@include('admin.notices')
<div class="holder">
			<div>
				<div class="row">

			<br>
				

			<div class="col-md-3">
				<h2>Logo:</h2>
				</div>
				<div class="col-md-7">
				<form action="{{route('logoChange')}}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<br>
				<input type="file" name="logo" class="form-control"/>
				<br>
				<button class="btn btn-primary" type="submit">Change</button>
				</form>
				</div>
	</div>



</div>


@endsection