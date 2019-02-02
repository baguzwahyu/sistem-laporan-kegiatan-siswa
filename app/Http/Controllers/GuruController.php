<?php

namespace App\Http\Controllers;

use App\Guru;
use Validator;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    
    public function index()
    {
        $guru = Guru::all();

        return view('guru.index',compact('guru'));
    }

    
    public function create()
    {
        return view('guru.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'          => 'required|',
            'mapel'         => 'required|',
            'email'         =>'required|email|unique:guru',
            'password'      =>'required|min:6|confirmed'
        ]);

        $guru = new Guru([
            'nama'          =>$request->get('nama'),
            'mapel'         =>$request->get('mapel'),
            'email'         =>$request->get('email'),
            'password'      =>bcrypt($request->password)
        ]);
        $guru ->save();
        return redirect('admin/guru');

        $user = new user([
            'nama' =>$request->get('nama'),
            'mapel' =>$request->get('mapel'),
        ]);
        $user ->save();
        return redirect('admin/user');
    }

    
    public function show(Guru $guru)
    {
        //
    }

    
    public function edit($id)
    {
        $guru = guru::findOrFail($id);

        return view('guru.edit',compact('guru'));
    }

    
    public function update(Request $request,$guru)
    {
        $guru=guru::findOrfail($guru);

        $guru->update($request->all());

        return redirect('admin/guru');

    }

    
    public function destroy($guru)
    {   
        $guru = guru::findOrFail($guru);

        $guru->delete();
        
        return redirect('admin/guru');
    }
}
