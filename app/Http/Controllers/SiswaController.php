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
        $siswa = siswa::with('guru')->get();
        $siswa = siswa::with('pembimbing')->get();

        return view('siswa.index',compact('siswa') );
    }
       

    
    public function create()
    {
        $gurus = guru::all();
        $pembimbings = pembimbing::all();
        return view('siswa.create', compact('gurus','pembimbings'));
    }

    
    public function store(Request $request)
    {
                
        $this->Validate($request,[
            'nama'          =>'required',
            'jurusan'       =>'required',
            'kelas'         =>'required',
            'guru_id'       =>'required',
            'pembimbing_id' =>'required',
            'email'         =>'required|email|unique:siswa',
            'password'      =>'required|min:6|confirmed'
        ]);
        $siswa = new Siswa([
            'nama'          =>$request->get('nama'),
            'jurusan'       =>$request->get('jurusan'),
            'kelas'         =>$request->get('kelas'),
            'guru_id'       =>$request->get('guru_id'),
            'pembimbing_id' =>$request->get('pembimbing_id'),
            'email'         =>$request->get('email'),
            'password'      =>bcrypt($request->password)
        ]);
       
        $user = User::create([
            'name' =>       $request->nama,
            'email' =>      $request->email,
            'password'=>   bcrypt($request->password),
            'group_id'=> 4,
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
        $siswa = siswa::find($id);

        return view('siswa.edit')->with('siswa', $siswa)
                                 ->with('pembimbing', Pembimbing::all())
                                 ->with('guru', Guru::all());
       
        
       
       
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
