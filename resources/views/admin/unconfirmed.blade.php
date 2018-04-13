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

					</tr>
				</thead>
	
		
<tbody>
@foreach ($unconfirmeduser as $unconfirmedusers)
<tr>
<td><center>{{$unconfirmedusers->id}}</td>
<td><center>{{$unconfirmedusers->email}}</td>
<td><center>{{$unconfirmedusers->firstname}}</td>
<td><center>{{$unconfirmedusers->lastname}}</td>
<td><center>{{$unconfirmedusers->mobile_number}}</td>
<td><center>{{$unconfirmedusers->sex}}</td>
</tr>

@endforeach
</tbody>	
		</table>
    {{$unconfirmeduser->links()}}
</div>
</div>		
</div>
</div>



    



@endsection