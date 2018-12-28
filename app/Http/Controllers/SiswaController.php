<?php

namespace App\Http\Controllers;

use App\siswa;
use Validator;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $siswa = siswa::findorfail($id);
       return view('siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$siswa)
    {
        $siswa = siswa::findorfail($siswa);
        $siswa ->update($request->all());
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect('/siswa/');
    }
}
