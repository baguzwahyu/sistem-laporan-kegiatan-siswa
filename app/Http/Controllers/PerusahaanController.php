<?php

namespace App\Http\Controllers;

use App\Perusahaan;
use App\Pembimbing;
use Validator;
use DB;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    
    public function index()
    {
        $perusahaan = Perusahaan::with('pembimbing')->get();

        return view('perusahaan.index', compact('perusahaan') );
    }

    
    public function create()
    {
        $pembimbings = pembimbing::all();

        return view('perusahaan.create',compact('pembimbings'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'pembimbing_id' => 'required',
            'nama'  => 'required'
        ]);

        $perusahaan = new Perusahaan([
            'pembimbing_id'=>$request->get('pembimbing_id'),
            'nama'=>$request->get('nama')
        ]);

        $perusahaan->save();
        return redirect('/perusahaan');
    }

    
    public function show(Perusahaan $perusahaan)
    {
        //
    }

    
    public function edit($id)
    {
        $perusahaan = Perusahaan::findOrfail($id);
        return view('perusahaan.edit',compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'pembimbing_id' => 'required',
            'nama'  => 'required'
        ]);

        $perusahaan = new Perusahaan([
            'pembimbing_id'=>$request->get('pembimbing_id'),
            'nama'=>$request->get('nama')
        ]);

        $perusahaan = Perusahaan::findOrfail($id);
        $perusahaan->update($request->all());
        $perusahaan->save();
        return redirect()->route('perusahaan.index');
    }

    
    public function destroy($perusahaan)
    {
        $perusahaan = Perusahaan::findOrFail($perusahaan);
        $perusahaan->delete();

        return redirect('/perusahaan/');
    }
}
