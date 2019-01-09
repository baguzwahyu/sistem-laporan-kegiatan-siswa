<?php

namespace App\Http\Controllers;

use App\siswa;
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
            'nama'=>'required|',
            'jurusan'=>'required|',
            'kelas'=>'required|',
            'guru_id'=>'required',
            'pembimbing_id'=>'required'
        ]);
        $siswa = new siswa([
            'nama'=>$request->get('nama'),
            'jurusan'=>$request->get('jurusan'),
            'kelas'=>$request->get('kelas'),
            'guru_id'=>$request->get('guru_id'),
            'pembimbing_id'=>$request->get('pembimbing_id'),
        ]);
        $siswa->save();
        return redirect('/siswa');
    }

    
    public function show(siswa $siswa)
    {
        //
    }

   
    public function edit($id)
    {
       $siswa = siswa::findorfail($id);
       
       return view('siswa.edit',compact('siswa'));
    }

    
    public function update(Request $request,$siswa)
    {
        $siswa = siswa::findorfail($siswa);
        $siswa ->update($request->all());
        return redirect()->route('siswa.index');
    }

    
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect('/siswa/');
    }
}
