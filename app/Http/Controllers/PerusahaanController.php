<?php

namespace App\Http\Controllers;
use App\Pembimbing;
use App\Perusahaan;
use Validator;
use DB;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = perusahaan::with('pembimbing')->get();

        return view('perusahaan.index', compact('perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembimbings = pembimbing::all();
        return view('perusahaan.create', compact('pembimbings'));
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
            'pembimbing_id' => 'required',
            'nama'  => 'required'
        ]);

        $perusahaan = new Perusahaan([
            'pembimbing_id'=>$request->get('pembimbing_id'),
            'nama'=>$request->get('nama')
        ]);

        $perusahaan->save();
        return redirect('perusahaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perusahaan = perusahaan::find($id);

        return view('perusahaan.edit')->with('perusahaan', $perusahaan)
                                 ->with('pembimbing', Pembimbing::all());
                                 
       
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($perusahaan)
    {
        $perusahaan = Perusahaan::findOrFail($perusahaan);
        $perusahaan->delete();

        return redirect('/perusahaan/');
    }
}
