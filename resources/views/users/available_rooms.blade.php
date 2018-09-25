@extends('master/index')
@section('content')
<style>
    body{
      
        color:white;
    }
</style>
<div class="container">
<br>
<a class="btn btn-primary" href="{{route('dashboard')}}">Go back</a> 
<div class="row">
<div class="col-sm-12">
<h3>AVAILABLE ROOMS<h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->

<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">

@if (!is_null($room))
        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($room as $rooms)
                        <tr>
                            <td field-key='room_number'>{{ $rooms->room_number }}</td>
                            <td field-key='room_type'>{{ $rooms->room_type }}</td>
                            <td field-key='price'>{{ $rooms->price }}</td>
                            <td>
                                    <button class="btn btn-danger">
                                        <a style="color: #ffffff;" href="{{route('book',['time_in' => $request->get('time_in'),'time_out' => $request->get('time_out'),'room_type' => $request->get('room_type'),'room_number' => $rooms->room_number ])}}">
                                        Reserve Room
                                        </a>
                                    </button>
                            </td>
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
        </div>
        @endif
</div>
</div>

</div>
@endsection