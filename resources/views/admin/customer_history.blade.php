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
<div class="col-md-10">
<div class="col-md-6">
<form action="{{route('searchCustomer')}}" method="GET">
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
						<td><b><center>ROOM</b></td>
                        <td><b><center>RESERVATION COUNT</b></td>
                        <td><b><center>TIME IN</b></td>
					</tr>
				</thead>
	
		
<tbody>
@foreach ($customer as $customers)
<tr>
<td><center>{{$customers->id}}</td>
<td><center>{{$customers->room}}</td>
<td><center>{{$customers->reservation_count}}</td>
<td><center>{{$customers->time_in}}</td>
</tr>
@endforeach
</tbody>	
		</table>

</div>
</div>		
</div>
</div>



    



@endsection