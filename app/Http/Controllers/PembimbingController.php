<?php

namespace App\Http\Controllers;

use App\Pembimbing;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembimbing = Pembimbing::all();

        return view('pembimbing.index', compact('pembimbing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembimbing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembimbing= Pembimbing::create([
            'nama'  => $request->nama
        ]);

        $pembimbing = new Pembimbing([
            'nama'=>$request->get('nama'),
        ]);

        $pembimbing->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function show(Pembimbing $pembimbing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $pembimbing = pembimbing::findOrfail($id);
        return view('pembimbing.edit',compact('pembimbing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $pembimbing=pembimbing::findOrfail($id);

        $pembimbing->update($request->all());

        return redirect()->route('pembimbing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembimbing $pembimbing)
    {
        $pembimbing->delete();

        return redirect('/pembimbing/');
    }
}
