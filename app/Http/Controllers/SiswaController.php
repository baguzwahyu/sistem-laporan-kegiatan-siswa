<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Guru;
use App\Pembimbing;
use Validator;
use DB;
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
        $siswa = siswa::with('guru')->get();
        $siswa = siswa::with('pembimbing')->get();
        return view('siswa.index', compact('siswa'));
    }
    // public function index()
    // {
        // $siswa = DB::table('guru')
        // ->join('siswa', 'siswa.guru_id', '=', 'guru.id')
        // ->join('pembimbing', 'siswa.pembimbing_id', '=', 'pembimbing.id')
        // ->select('siswa.*', 'guru.nama as gru','pembimbing.nama as ppp')
        // ->get();
        // return view('siswa.index', compact('siswa'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gurus = guru::all();
        $pembimbings = pembimbing::all();
        return view('siswa.create', compact('gurus','pembimbings'));
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
        return redirect('siswa');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
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
        $siswa = siswa::findorfail($id);
            $siswa ->update($request->all());
            $siswa->save();
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
