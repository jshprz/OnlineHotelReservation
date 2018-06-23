<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Room;
use App\Reserved;
use App\Images;
use App\Feedback;
use Lava;
use App\siteSettings;
use Khill\Lavacharts\Lavacharts;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $user=User::count();
        $unconfirmed=User::where('confirmed',false)->count();
        $feedback=Feedback::count();
        $approve=Reserved::where('approve',true)->count();
        $denied=Reserved::where('approve',false)->count();
        $room=Room::count();

        $lava=new Lavacharts;
        $datatable=$lava->DataTable();
        $datatable->addStringColumn('Table');
        $datatable->addNumberColumn('Value');

        $datatable->addRows([
            ['Users',$user],
            ['Rooms',$room],
            ['Unconfirmed Users',$unconfirmed],
            ['Feedbacks',$feedback],
            ['Approved Reservations',$approve],
            ['Denied Request',$denied]
            ]);
  $lava->PieChart('Donuts', $datatable, [
    'title'  => 'QUICK VIEW',
    'width' => 1200,
    'height' => 400,
    'is3D'   => true,
    'slices' => [
        ['offset' => 0.2],
        ['offset' => 0.25],
        ['offset' => 0.3]
    ]
]);

        return view('admin.admin',compact('user','room','unconfirmed','feedback','approve','denied','lava'));
    }
    public function usersPage()
    {
        $user=User::where('banned',false)->paginate(15);
        return view('admin.users',compact('user'));
    }
    public function roomsPage()
    {
        $room=Room::paginate(10);
        return view('admin.rooms',compact('room'));
    }
    public function imagePage()
    {
        $image=Images::paginate(10);
        return view('admin.images',compact('image'));
    }
    public function customerPage()
    {
        $customer=Reserved::where('approve',true)->paginate(15);
        return view('admin.customer_history',compact('customer'));

    }
    public function settingPage()
    {
        return view('admin.setting');
    }
    public function bannedUserPage()
    {
        $banneduser=User::where('banned',true)->paginate(15);
        return view('admin.banned',compact('banneduser'));
    }
    public function unconfirmedUser()
    {
        $unconfirmeduser=User::where('confirmed',false)->paginate(15);
        return view('admin.unconfirmed',compact('unconfirmeduser'));
    }
    

    /**
     * Performing action methods
    */
    protected function validator_user(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'mobile_number'=>'required|regex:/^(\+63)[0-9]{10}$/',
        ]);
    }
    protected function validator_room(array $data)
    {
        return Validator::make($data, [
            'room_number' => 'required|integer',
            'room_type'=>'required|string|min:3|max:50',
            'status'=>'required|string',
            'price'=>'required|integer'
        ]);
    }
    public function banUser(Request $request)
    {
        $user=User::where('id',$request->get('id'));
        $user->update(['banned'=>true]);
        return redirect()->back()->with('flashSuccess','1 user has been successfully banned');
    }
    public function unbanUser(Request $request)
    {
        $user=User::where('id',$request->get('id'));
        $user->update(['banned'=>false]);
        return redirect()->back()->with('flashSuccess','1 user has been successfully unbanned');
    }
    public function editUser(Request $request)
    {
        $inputs=$request->all();
        $validator=$this->validator_user($inputs);
        $validator->validate();
        if($validator->passes()){
        $user=User::where('id',$request->get('id'));
        $user->update([
            'firstname'=>$request->get('firstname'),
            'lastname'=>$request->get('lastname'),
            'mobile_number'=>$request->get('mobile_number')
            ]);
            return back()->with('flashSuccess','1 user successfully updated');
        }
        return back()->with('flashError','error');  
    }
    public function editRoom(Request $request)
    {
        $inputs=$request->all();
        $validator=$this->validator_room($inputs);
        $validator->validate();
        if($validator->passes()){
        $user=Room::where('id',$request->get('id'));
        $user->update([
            'room_number'=>$request->get('room_number'),
            'room_type'=>$request->get('room_type'),
            'status'=>$request->get('status'),
            'price'=>$request->get('price')
            ]);
            return back()->with('flashSuccess','1 room successfully updated');
        }
        return back()->with('flashError','error');  
    }
    public function searchUser(Request $request)
    {
        $searcheduser=DB::table('users')->where('id','like',$request->get('search').'%')->orWhere('email','like',$request->get('search').'%')->orWhere('firstname','like',$request->get('search').'%')->orWhere('lastname','like',$request->get('search').'%')->orWhere('mobile_number','like',$request->get('search').'%')->orWhere('sex','like',$request->get('search').'%')->paginate(15);
        return view('admin.searched',compact('searcheduser'));

    }
    public function searchRoom(Request $request)
    {
        $searchedroom=DB::table('tbl_room')->where('id','like',$request->get('search').'%')->orWhere('room_number','like',$request->get('search').'%')->orWhere('room_type','like',$request->get('search').'%')->orWhere('status','like',$request->get('search').'%')->orWhere('price','like',$request->get('search').'%')->paginate(15);
        return view('admin.searched_room',compact('searchedroom'));

    }
    public function addRoom(Request $request)
    {
        $inputs=$request->all();
        $validator=$this->validator_room($inputs);
        $validator->validate();
        if($validator->passes())
        {
            $room=new Room;
            $room->room_number=$request->get('room_number');
            $room->room_type=$request->get('room_type');
            $room->status=$request->get('status');
            $room->price=$request->get('price');
            $room->save();
            return back()->with('flashSuccess','1 room successfully added');
        }
        return back()->with('flashError','There is something wrong');
    }
    public function searchCustomer(Request $request)
    {
        $searchedcustomer=DB::table('tbl_reserved')->where('id','like',$request->get('search').'%')->orWhere('room','like',$request->get('search').'%')->orWhere('reservation_count','like',$request->get('search').'%')->orWhere('time_in','like',$request->get('search').'%')->paginate(15);
        return view('admin.searched_customer',compact('searchedcustomer'));

    }
    public function imageUpload(Request $request)
    {
        $inputs=$request->all();
        $validator=Validator::make($inputs,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $validator->validate();
        if ($validator->passes()) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);
                Image::make($image->getRealPath())->resize(1200, 561)->save($path);
                $photo=new Images;
                $photo->name = $filename;
                $photo->save();
                return back()->with('flashSuccess','1 image has been successfully uploaded');
        }else{
             return back()->with('flashError','There is something wrong');
    
            }
}
    public function backgroundChange(Request $request)
    {
        $inputs=$request->all();
        $validator=Validator::make($inputs,[
            'background' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $validator->validate();
        if ($validator->passes()) {
            $image = $request->file('background');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);
                Image::make($image->getRealPath())->resize(846, 480)->save($path);
                $background=siteSettings::where('option','GuestBackground');
                $background->update([
                    'option' => 'GuestBackground',
                    'value' => $filename
                ]);
                return back()->with('flashSuccess','Landing page background has been successfully changed');
        }else{
             return back()->with('flashError','There is something wrong');
    
            }
    }
    public function logoChange(Request $request)
    {
        $inputs=$request->all();
        $validator=Validator::make($inputs,[
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $validator->validate();
        if ($validator->passes()) {
            $image = $request->file('logo');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);
                Image::make($image->getRealPath())->resize(226, 223)->save($path);
                $logo=siteSettings::where('option','Logo');
                $logo->update([
                    'option' => 'Logo',
                    'value' => $filename
                ]);
                return back()->with('flashSuccess','Logo has been successfully changed');
        }else{
             return back()->with('flashError','There is something wrong');
    
            }
    }
    public function postSitename(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($input,[
            'sitename' => 'required|string|max:20'
        ]);
        $validator->validate();
        if($validator->passes())
        {
            $settings=siteSettings::where('option','Sitename')->update(['value' => $request->get('sitename')]);
            return back()->with('flashSuccess','The name of the website has been changed');
        }else{
            return back();
        }
    }
    public function postEmail(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($input,[
            'email' => 'required|email'
        ]);
        $validator->validate();
        if($validator->passes())
        {
            $settings=siteSettings::where('option','email')->update(['value' => $request->get('email')]);
            return back()->with('flashSuccess','The email of the website has been changed');
        }else{
            return back();
        }
    }
    public function postMobile(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($input,[
            'mobile' => 'required|regex:/^(\+63)[0-9]{10}$/'
        ]);
        $validator->validate();
        if($validator->passes())
        {
            $settings=siteSettings::where('option','mobile')->update(['value' => $request->get('mobile')]);
            return back()->with('flashSuccess','The mobile number of the website has been changed');
        }else{
            return back();
        }
    }
    public function postTelephone(Request $request)
    {
        $settings=siteSettings::where('option','telephone')->update(['value' => $request->get('telephone')]);
            return back()->with('flashSuccess','The telephone number of the website has been changed');
    }
    public function postAboutus(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($input,[
            'aboutus' => 'required|min:50|max:255'
        ]);
        $validator->validate();
        if($validator->passes())
        {
            $settings=siteSettings::where('option','aboutus')->update(['value' => $request->get('aboutus')]);
            return back()->with('flashSuccess','The about us of the website has been changed');
        }else{
            return back();
        }
    }
}