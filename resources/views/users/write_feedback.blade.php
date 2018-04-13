@extends('master/index')
@section('sidebar')

@section('content')
<style>
    body{
        background:gray;
    }
    
    h3{
     font-family: Segoe UI Light;
    }
    .card-header{
        position:relative;
        top:-160px;
    }
</style>
    <div class="container">
        <div class="card-availability card-container">
            <div class="card-header">
                <h3>Write a feedback</h3>
                <br>
             <div class="row">
            <div class="col-md-12">
            <form action="{{route('sendfeedback')}}" method="POST">
            {{ csrf_field() }}
            <br>
            <textarea class="form-control" name="feedback" required></textarea>
            @if ($errors->has('feedback'))
                <span class="text-danger">
                <p>{{ $errors->first('feedback') }}</p>
                </span>
                @endif
            <br>
             <button class="form-control btn btn-success" type="submit">Send</button>
             <br>
             <br>
             <a class="form-control btn btn-primary" href="{{url('/')}}">Home Page</a>
             </form>
        </div><!-- /card-container -->
    </div>
    </div>
    </div>
    </div>
@endsection