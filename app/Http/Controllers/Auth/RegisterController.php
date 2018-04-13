<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth;
use Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function index()
    {
        return view('membership.register');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',    
            'mobile_number'=>'required|regex:/^(\+63)[0-9]{10}$/',
            'sex'=>'required|string|max:6'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname'=>$data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'mobile_number'=>$data['mobile_number'],
            'sex'=>$data['sex']
        ]);
    }
    protected function register(Request $request)
    {
        $inputs=$request->all();
        $validator=$this->validator($inputs);
        $validator->validate();
        if ($validator->passes()) {
            $data=$this->create($inputs)->toArray();
            $data['token']=str_random(25);
            $user=User::find($data['id']);
            $user->token=$data['token'];
            $user->save();
            Mail::send('mail.confirmation',$data,function($message)use($data){
      $message->to($data['email']);
      $message->subject('Registration Confirmation');
    });
            return redirect()->route('login')->with('flashSuccess','Confirmation email has been send.Please check your email.');
        }
        return back()->with('flashError',$validator->errors);
    }
    protected function confirmEmail($token)
    {
        $user=User::where('token',$token)->first();
        if (!is_null($user)) {
            $user->token='';
            $user->confirmed=true;
            $user->save();
            return redirect()->route('login')->with('flashSuccess','Your activation is complete you can now login.');
        }
        return redirect()->route('register')->with('flashError','Something went wrong');
    }
}
