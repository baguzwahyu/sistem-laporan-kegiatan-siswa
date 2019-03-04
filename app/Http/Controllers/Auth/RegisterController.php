<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Group;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            
            
            // 'group_id' => ['required', 'integer'],
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'group_id' => $data['group_id'],
            'alamat' => $data['alamat'],
           
            
        ]);
    }


    public function showRegistrationform(){

        $group = Group::all();
        return view('auth.register', compact('group'));
    }
}
// wkwkwkwwwk