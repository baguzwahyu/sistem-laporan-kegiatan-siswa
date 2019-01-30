<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = kegiatan::all();

        return view('dashboard.siswas.kegiatan',compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.siswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'bidang_pekerjaan' => 'required|',
            'uraian_pekerjaan'=> 'required|'
           
        ]);

        $kegiatan = new kegiatan([
            'bidang_pekerjaan' =>$request->get('bidang_pekerjaan'),
            'uraian_pekerjaan' =>$request->get('uraian_pekerjaan'),
           
        ]);
        $kegiatan ->save();
        return redirect('/kegiatan');
    }

    
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    
    public function edit($es)
    {
        $kegiatan = kegiatan::findOrFail($es);

        return view('dashboard.siswas.edit',compact('kegiatan'));
    }

    
     
    public function update(Request $request,$kegiatan)
    {
        $kegiatan=kegiatan::findOrfail($kegiatan);

        $kegiatan->update($request->all());

        return redirect('/kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan = kegiatan::findOrFail($kegiatan);

        $kegiatan->delete();
        
        return redirect('/kegiatan');
    }
}
