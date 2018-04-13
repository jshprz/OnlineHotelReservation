@extends('master/index')
@section('content')
<style>
    body{
        background:gray;
    }
    .btn{
        margin-top:-250px;
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
                <h3>Availability Message</h3>
                <br>
                <br>
                @if($message=="The room you are requested is available")
                 <div class="alert alert-success" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error</span>
                {{$message}}
                </div>
                </div>
               @endif
               @if($message=="The room you are requested is not available")
               <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error</span>
                {{$message}}
                </div>
                </div>
                @endif
           <a href="{{route('book',Session::put('reserve','yes'))}}" class="form-control btn btn-primary">Would you like to reserve a room ?</a>
           <br>
           <br>
           <a href="{{url('/')}}" class="form-control btn btn-success">Go back ?</a>
        </div><!-- /card-container -->
    </div>

@endsection