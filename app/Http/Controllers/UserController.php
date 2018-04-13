<?php

namespace App\Http\Controllers;
use App\User;
use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
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
    public function gotoSettings()
    {
       $user=User::where('id',Auth::user()->id)->get();
       return view('users.setting',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request)
    {
        $inputs=$request->all();
        $validator=Validator::make($inputs,[
            'firstname'=>'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'mobile_number'=>'required|regex:/^(\+63)[0-9]{10}$/',
            'sex'=>'required|string|max:6'
        ]);
        $validator->validate();
            if ($validator->passes()) {
                $user=User::where('id',Auth::user()->id);
                $user->update([
                    'firstname'=> $request->get('firstname'),
                    'lastname'=>$request->get('lastname'),
                    'mobile_number'=>$request->get('mobile_number'),
                    'sex'=>$request->get('sex')
                    ]);
                return redirect()->back()->with('flashSuccess','Your user information has been successfully updated');
            }
    }
    
    public function viewfeedbackPage(Request $request)
    {
        $join=DB::table('users')->join('tbl_feedback','users.id','=','tbl_feedback.user_id')->select('users.*','tbl_feedback.*')->get();
        return view('users/feedback',compact('join'));
    }
    public function writefeedbackPage()
    {
        return view('users/write_feedback');
    }
    public function sendFeedback(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($input,[
            'feedback' => 'required|max:255|regex:/(^[A-Za-z0-9 ]+$)+/'
        ]);
        $validator->validate();
        if ($validator->passes()) {
            $feedback=new Feedback;
            $feedback->user_id=Auth::user()->id;
            $feedback->feedback=$request->get('feedback');
            $feedback->save();
            return redirect()->route('dashboard')->with('flashSuccess','Your feedback has been successfully delivered');
        }else{
            return back()->with('flashError',$validator->errors);
        }
    }
}
