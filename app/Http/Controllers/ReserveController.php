<?php

namespace App\Http\Controllers;

use App\Reserved;
use App\Room;
use App\User;
use App\Notification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Mail;
class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    protected function checkAvailabilityForm()
    {
        $room=Room::all();
        return view('users/check_availability',compact('room'));
    }
    protected function checkAvailability(Request $request)
    {
        date_default_timezone_set("Asia/Manila");
        $php_time_in=date('Y-m-d H:i',strtotime($request->get('time_in')));
        $php_time_out=date('Y-m-d H:i',strtotime($request->get('time_out')));
        $explodedTimein=explode(' ',$php_time_in);
        $explodedTimeout=explode(' ',$php_time_out);
        $current_datetime=date('Y-m-d H:i');
        $explodedCurrentTime=explode(' ',$current_datetime);
        if($explodedTimein[0] == $explodedTimeout[0]){
            if($explodedTimein[1] >= $explodedCurrentTime[1]){
                    $addOneHourToTimein=strtotime($request->get('time_in'))+3600;
                    $addOneHour=date('H:i',$addOneHourToTimein);
                if($explodedTimeout[1] > $addOneHour){
                    $room=Room::where('status','available')->where('room_type',$request->get('room_type'))->get();
                        return view('users/available_rooms',compact('room','request'));
                }else{
                    return back()->with('flashError','Your datetime out must not be less than datetime in and advance atleast 1 hour than datetime in');
                }
            }
            else{
               return back()->with('flashError','Your datetime in must be greater than current datetime');
            }
        }else{
            if($explodedTimein[1] >= $explodedCurrentTime[1]){
                 if($explodedTimeout[0] >= $explodedCurrentTime[0]){
                    $room=Room::where('status','available')->where('room_type',$request->get('room_type'))->get();
                        return view('users/available_rooms',compact('room','request'));
                 }else{
                     return back()->with('flashError','Your datet must not be less than current date');
                 }
            }
            else{
                return back()->with('flashError','Your datetime in must be greater than current datetime');
            }
        }
    }
    protected function reserve(Request $request)
    {
          $explodedTimein=explode(' ',$request->session()->get('time_in'));
          $explodedTimeout=explode(' ',$request->session()->get('time_out'));
          $finalTimein=$explodedTimein[0].' '.$explodedTimein[1];
          $finalTimeout=$explodedTimeout[0].' '.$explodedTimeout[1];
          
          $room=Room::where('room_number',$request->session()->get('room_number'));
          $room->update(['status'=>'not available']);

          $notification=new Notification;
          $notification->user_id=Auth::user()->id;
          $notification->body = 'Your reservation information';
          $notification->status= 'keep';
          $notification->save();
          
          $pending = new Reserved;
          $pending->user_id=Auth::user()->id;
          $pending->reservation_code=str_random(3)."-".str_random(3)."-".str_random(3);
          $pending->room=$request->session()->get('room_number');
          $pending->room_type=$request->session()->get('room_type');
          $pending->time_in=$finalTimein;
          $pending->time_out=$finalTimeout;
          $pending->hour=$request->session()->get('hours');
          $pending->total_payment=$request->session()->get('total_price');
          $pending->approve=true;
          $pending->save();
          $data=DB::table('users')->join('tbl_reserved',function($join){
            $join->on('users.id','=','tbl_reserved.user_id')->where('users.id','=',Auth::user()->id)->where('tbl_reserved.user_id','=',Auth::user()->id);
          })->get();
         
          Mail::send('mail.reservation-code',['code'=>$data],function($message)use($data){
              foreach($data as $datas){ 
      $message->to($datas->email);
              }
      $message->subject('Reservation Code');
    });
          return redirect()->route('dashboard')->with('flashSuccess','Your reservation has been submitted please check your notification');
    }

    public function index(Request $request)
    {
        $explodedTimein=explode(' ',$request->get('time_in'));
        $explodedTimeout=explode(' ',$request->get('time_out'));
        $finalTimein=$explodedTimein[0].' '.$explodedTimein[1];
        $finalTimeout=$explodedTimeout[0].' '.$explodedTimeout[1];
        $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $finalTimein);
        $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$finalTimeout);
        $diff_in_hours = $to->diffInHours($from);
        $hours=number_format($diff_in_hours);
        $request->session()->put('hours',$diff_in_hours);
        $standard=Room::where('room_type','standard')->get();
        $deluxe=Room::where('room_type','deluxe')->get();
        $premium=Room::where('room_type','premium')->get();
        $family=Room::where('room_type','family and suit')->get();
        $team=Room::where('room_type','team')->get();
        $minimac=Room::where('room_type','minimac')->get();
        if ($request->get('room_type') == 'standard') 
        {
            foreach ($standard as $standards) 
            {
                $price=number_format($standards->price);
                $total_price=$hours * $price;
                $request->session()->put('total_price',$total_price);
                $request->session()->put('time_in',$request->get('time_in'));
                $request->session()->put('time_out',$request->get('time_out'));
                $request->session()->put('room_type',$request->get('room_type'));
                $request->session()->put('room_number',$request->get('room_number'));
                return view('users.reserve',compact('request'));
            }
        }else if($request->get('room_type') == 'deluxe'){
            foreach ($deluxe as $deluxes) 
            {
                $price=number_format($deluxes->price);
                $total_price=$hours * $price;
                $request->session()->put('total_price',$total_price);
                $request->session()->put('time_in',$request->get('time_in'));
                $request->session()->put('time_out',$request->get('time_out'));
                $request->session()->put('room_type',$request->get('room_type'));
                $request->session()->put('room_number',$request->get('room_number'));
                return view('users.reserve',compact('request'));
            }
        }else if($request->get('room_type') == 'premium'){
            foreach ($premium as $premiums) 
            {
                $price=number_format($premiums->price);
                $total_price=$hours * $price;
                $request->session()->put('total_price',$total_price);
                $request->session()->put('time_in',$request->get('time_in'));
                $request->session()->put('time_out',$request->get('time_out'));
                $request->session()->put('room_type',$request->get('room_type'));
                $request->session()->put('room_number',$request->get('room_number'));
                return view('users.reserve',compact('request'));
            }
        }else if($request->get('room_type') == 'family and suit'){
            foreach ($family as $familys) 
            {
                $price=number_format($familys->price);
                $total_price=$hours * $price;
                $request->session()->put('total_price',$total_price);
                $request->session()->put('time_in',$request->get('time_in'));
                $request->session()->put('time_out',$request->get('time_out'));
                $request->session()->put('room_type',$request->get('room_type'));
                $request->session()->put('room_number',$request->get('room_number'));
                return view('users.reserve',compact('request'));
            }
        }else if($request->get('room_type') == 'team'){
            foreach ($team as $teams) 
            {
                $price=number_format($teams->price);
                $total_price=$hours * $price;
                $request->session()->put('total_price',$total_price);
                $request->session()->put('time_in',$request->get('time_in'));
                $request->session()->put('time_out',$request->get('time_out'));
                $request->session()->put('room_type',$request->get('room_type'));
                $request->session()->put('room_number',$request->get('room_number'));
                return view('users.reserve',compact('request'));
            }
        }else{
            foreach ($minimac as $minimacs) 
            {
                $price=number_format($minimacs->price);
                $total_price=$hours * $price;
                $request->session()->put('total_price',$total_price);
                $request->session()->put('time_in',$request->get('time_in'));
                $request->session()->put('time_out',$request->get('time_out'));
                $request->session()->put('room_type',$request->get('room_type'));
                $request->session()->put('room_number',$request->get('room_number'));
                return view('users.reserve',compact('request'));
            }
        }
    }
    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
