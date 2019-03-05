<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use app\User;
use Validator;
use DB;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::User();
        return view('dashboard.profile.user', compact('user'));
    }

    public function edit(User $user)
    {
        $user = Auth::User();
        return view('dashboard.profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = Request::input('name');
        $user->email = Request::input('email');
        $user->save();
        
                return redirect('dashboard.user.edit'.Auth::user()->id)->with('flash', 'User has been updated!!'); 
                
            

     }

        public function store(Request $request)
        {
                    
            $this->Validate($request,[
                'name'          =>'required',
                'alamat'         =>'required',
                'group_id'       =>'required',
                'photo' =>'required',
                'email'         =>'required|email|unique:siswa',
                'password'      =>'required|min:6|confirmed'
            ]);
    
            $user = User::create([
                'name' =>       $request->nama,
                'email' =>      $request->email,
                'password'=>   bcrypt($request->password),
                'group_id'=> $request->group_id,
                'photo' =>'img/user.png',
                'alamat' => $request->alamat,
            ]);
            $user->save();
            return redirect('admin/user')->with('succes','User has been slain');
        }
}
