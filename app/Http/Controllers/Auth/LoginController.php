<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function index()
    {
        return view('membership.index');
    }
    protected function dologin(Request $request)
    {
         $this->validateLogin($request);
$email=$request->email;
$password=$request->password;
$user=User::where('email',$request->email)->first();
if ($user==false)
{
    return back()->with('exists','The email that you have entered is not exists.');

}
if($user->is_confirmed())
  {
    Auth::attempt(['email'=>$email,'password'=>$password]);
    if (Auth::check()){
    if ($user->permission('admin'))
    {
      return redirect()->route('admin');
    }elseif ($user->permission('frontdesk')) {
        return redirect()->route('frontdesk');
    }
    else{
        if(empty($request->session()->get('feedback')))
        {
            return redirect()->route('dashboard');
        }
        else
        {
            return redirect()->route('feedback');
        }
    }
    }
    else{
      return back()->with('email','Maybe the email or password you entered is incorrect please try again');
    }
}
else {
    return back()->with('confirmed','Please confirm your email.');
}

    }
    protected function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('login');
    }
}
