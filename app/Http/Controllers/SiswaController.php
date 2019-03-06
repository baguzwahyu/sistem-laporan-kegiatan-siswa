<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use App\Guru;
use App\Pembimbing;
use Validator;
use DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    
    public function index()
    {
        $siswa = Siswa::all();

        return view('siswa.index', compact('siswa'));
    }
       

    
    public function create()
    {
        return view('siswa.create');
    }

    
    public function store(Request $request)
    {
                
        $this->Validate($request,[
            'nama'          =>'required',
            'jurusan'       =>'required',
            'kelas'         =>'required',
            'email'         =>'required|email|unique:siswa',
            'password'      =>'required|min:6|confirmed'
        ]);
        $siswa = new Siswa([
            'nama'          =>$request->get('nama'),
            'jurusan'       =>$request->get('jurusan'),
            'kelas'         =>$request->get('kelas'),
            'email'         =>$request->get('email'),
            'password'      =>bcrypt($request->password),
            'photo' =>'img/user.png',
            'alamat' => $request->alamat
        ]);
       
        $user = User::create([
            'name' =>       $request->nama,
            'email' =>      $request->email,
            'password'=>   bcrypt($request->password),
            'group_id'=> 5,
            'photo' =>'img/user.png',
            'alamat' => $request->alamat,
        ]);
        $user->save();


        $siswa->save();
        return redirect('admin/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

   
    public function edit($id)
    {
        $siswa = siswa::findOrfail($id);
        
        return view('siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $siswa=siswa::findOrfail($id);

        $siswa->update($request->all());

        return redirect('admin/siswa');
    }

    
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect('admin/siswa');
    }
}
