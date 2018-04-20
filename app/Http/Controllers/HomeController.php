<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;
use App\Feedback;
use App\siteSettings;
use App\Images;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function homePage()
    {
        $background=siteSettings::where('option','GuestBackground')->get();
        $logo=siteSettings::where('option','Logo')->get();
        $sitename=siteSettings::where('option','Sitename')->get();
        return view('master.landingpage',compact('background','logo','sitename'));
    }
    public function getContactus()
    {
        $email=siteSettings::where('option','email')->get();
        $mobile=siteSettings::where('option','mobile')->get();
        $telephone=siteSettings::where('option','telephone')->get();
        return view('master/contactus',compact('email','mobile','telephone'));
    }
    public function getAboutus()
    {   
        $about=siteSettings::where('option','aboutus')->get();
        return view('master/aboutus',compact('about'));
    }
    public function viewfeedbackPage()
    {
        $join=DB::table('users')->join('tbl_feedback','users.id','=','tbl_feedback.user_id')->select('users.*','tbl_feedback.*')->paginate(5);
        return view('feedback/index',compact('join'));
    }
    public function viewallfeedbackPage()
    {
        $join=DB::table('users')->join('tbl_feedback','users.id','=','tbl_feedback.user_id')->select('users.*','tbl_feedback.*')->get();
        return view('feedback/morefeedback',compact('join'));
    }
    public function amenitiesPage()
    {
        $image=Images::all();
        return view('amenities/index',compact('image'));
    }
    
}
