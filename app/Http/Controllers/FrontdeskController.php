<?php

namespace App\Http\Controllers;

use App\Reserved;
use App\Pending;
use App\Notification;
use App\History;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $reserved=$join=DB::table('users')->join('tbl_reserved','users.id','=','tbl_reserved.user_id')->where('tbl_reserved.approve','=',1)->select('users.*','tbl_reserved.*')->get();
        return view('frontdesk/index',compact('reserved'));
    }

    protected function disapprove(Request $request)
    {
        $reserve=Reserved::where('id',$request->get('id'));
        $reserve->update(['approve'=>false]);
        return redirect()->back()->with('disapprove','1 customer has been disapproved');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function endDuration(Request $request)
    {
        $reserved=Reserved::where('user_id',$request->get('user_id'))->delete();
        $room=Room::where('room_number',$request->get('room_number'))->update(['status'=>'available']);
        $history=new History;
        $history->user_id=$request->get('user_id');
        $history->room=$request->get('room_number');
        $history->room_type=$request->get('room_type');
        $history->time_in=$request->get('time_in');
        $history->time_out=$request->get('time_out');
        $history->hour=$request->get('hour');
        $history->total_payment=$request->get('total_payment');
        $history->save();
        return back()->with('flashError','1 customer duration has been ended');
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
