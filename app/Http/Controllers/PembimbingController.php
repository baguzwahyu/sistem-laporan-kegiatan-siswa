<?php

namespace App\Http\Controllers;

use App\Pembimbing;
use Validator;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    
    public function index()
    {
        $pembimbing = Pembimbing::all();

        return view('pembimbing.index', compact('pembimbing'));
    }

    public function create()
    {
        return view('pembimbing.create');
    }

    public function store(Request $request)
    {
        $this->Validate($request,[
            'nama'          =>'required|',
            'telephone'     =>'required|',
            'bagian'        =>'required'
        ]);
        
        $pembimbing = new Pembimbing([
            'nama'          =>$request->get('nama'),
            'telephone'     =>$request->get('telephone'),
            'bagian'        =>$request->get('bagian')
        ]);

        $pembimbing->save();
        return redirect('admin/pembimbing');
    }

    public function show(Pembimbing $pembimbing)
    {
        //
    }

    public function edit( $id)
    {
        $pembimbing = pembimbing::findOrfail($id);
        return view('pembimbing.edit',compact('pembimbing'));
    }

    public function update(Request $request,$id)
    {
        $pembimbing=pembimbing::findOrfail($id);

        $pembimbing->update($request->all());

        return redirect('admin/pembimbing');
    }

    public function destroy(Pembimbing $pembimbing)
    {
        $pembimbing->delete();

        return redirect('admin/pembimbing');
    }
}
