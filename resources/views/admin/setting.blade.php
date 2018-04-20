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
				</div>
				<div class="col-md-1">
				<br>
				<button class="btn btn-primary" type="submit">Change</button>
				</form>
				</div>
	</div>
	

	<div class="row">
	<div class="col-md-3">
			<h2>Sitename:</h2>
			</div>
			<div class="col-md-7">
			<form action="{{route('postsitename')}}" method="POST">
			{{ csrf_field() }}
			<br>
			<input class="form-control" name="sitename" placeholder="website name"/>
			 @if ($errors->has('sitename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sitename') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="col-md-1">
				<br>
				<button class="btn btn-primary" type="submit">Change</button>
			</form>
			</div>
			</div>

				<div class="row">
	<div class="col-md-3">
			<h2>Email Address:</h2>
			</div>
			<div class="col-md-7">
			<form action="{{route('postemail')}}" method="POST">
			{{ csrf_field() }}
			<br>
			<input type="email" class="form-control" name="email" placeholder="website email" required/>
			 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="col-md-1">
				<br>
				<button class="btn btn-primary" type="submit">Change</button>
			</form>
			</div>
			</div>

				<div class="row">
	<div class="col-md-3">
			<h2>Mobile #:</h2>
			</div>
			<div class="col-md-7">
			<form action="{{route('postmobile')}}" method="POST">
			{{ csrf_field() }}
			<br>
			<input class="form-control" name="mobile" placeholder="website mobile number" required/>
			 @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="col-md-1">
				<br>
				<button class="btn btn-primary" type="submit">Change</button>
			</form>
			</div>
			</div>

				<div class="row">
	<div class="col-md-3">
			<h2>Telephone #:</h2>
			</div>
			<div class="col-md-7">
			<form action="{{route('posttelephone')}}" method="POST">
			{{ csrf_field() }}
			<br>
			<input class="form-control" name="telephone" placeholder="website telephone number" required/>
			 @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="col-md-1">
				<br>
				<button class="btn btn-primary" type="submit">Change</button>
			</form>
			</div>
			</div>

			<div class="row">
	<div class="col-md-3">
			<h2>About us:</h2>
			</div>
			<div class="col-md-7">
			<form action="{{route('postaboutus')}}" method="POST">
			{{ csrf_field() }}
			<br>
			<input class="form-control" name="aboutus" placeholder="website about us" required/>
			 @if ($errors->has('aboutus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aboutus') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="col-md-1">
				<br>
				<button class="btn btn-primary" type="submit">Change</button>
			</form>
			</div>
			</div>

</div>


@endsection