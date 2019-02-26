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
        $perusahaan = Perusahaan::all();

        return view('perusahaan.index', compact('perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perusahaan.create');
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
            'nama'      => 'required',
            'alamat'    => 'required',
            'telephone' => 'required',
            'email'     => 'required|email|unique:perusahaan',
        ]);

        $perusahaan = new Perusahaan([
            'nama'      =>$request->get('nama'),
            'alamat'    =>$request->alamat,
            'telephone' =>$request->get('telephone'),
            'email'     =>$request->get('email'),
            'logo'      =>'img/user.png',
        ]);

        $perusahaan->save();
        return redirect('admin/perusahaan');
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
        $perusahaan = perusahaan::findOrfail($id);
        
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
        $perusahaan = perusahaan::findOrfail($id);

        $perusahaan->update($request->all());

        return redirect('admin/perusahaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($perusahaan)
    {
        $perusahaan->delete();

        return redirect('admin/perusahaan');
    }

   

}
