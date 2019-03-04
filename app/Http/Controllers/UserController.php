<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use app\User;
use Validator;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::all();
        return view('dashboard.profile.user', compact('user'));
    }

    public function edit(User $user)
    {
        $user = Auth::User();
        return view('dashboard.profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::User();

        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->alamat = $data['alamat'];

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
