<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
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

    public function edit($id)
    {
        $user=Auth::User();
        $user = user::find($id);

        
        return view('dashboard.profile.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {
        User::find($id)->update($request->all());
        // $user= Auth::User();
        // $user=user::findOrfail($user);

        // $user->update($request->all());

        
         return redirect('admin/index/user')->with('flash', 'User has been updated!!'); 
                
            

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
                'name' =>       $request->name,
                'email' =>      $request->email,
                'password'=>   bcrypt($request->password),
                'group_id'=> $request->group_id,
                'photo' =>'img/user.png',
                'alamat' => $request->alamat,
            ]);
            $user->save();
            return redirect('admin/user')->with('succes','User has been slain');
        }

        public function photo_upd(Request $request){

        }
}
