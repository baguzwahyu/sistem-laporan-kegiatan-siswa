<?php

namespace App\Http\Controllers;

use App\Pembimbing;
use App\User;
use App\Perusahaan;
use Validator;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    
    public function index()
    {
        $pembimbing = pembimbing::with('perusahaan')->get();

        return view('pembimbing.index', compact('pembimbing'));
    }

    public function create()
    {
        $perusahaans = perusahaan::all();
        return view('pembimbing.create', compact('perusahaans'));
    }

    public function store(Request $request)
    {
        $this->Validate($request,[
            'nama'          =>'required|',
            'telephone'     =>'required|',
            'bagian'        =>'required',
            'email'         =>'required|email|unique:pembimbing',
            'password'      =>'required|min:6|confirmed'
        ]);
        
        $pembimbing = new Pembimbing([
            'nama'          =>$request->get('nama'),
            'telephone'     =>$request->get('telephone'),
            'bagian'        =>$request->get('bagian'),
            'perusahaan_id' =>$request->get('perusahaan_id'),
            'email'         =>$request->get('email'),
            'password'      =>bcrypt($request->password),
            'photo'         =>'img/user.png',
            'alamat'        => $request->alamat,
        ]);

        $user = User::create([
            'name' =>       $request->nama,
            'email' =>      $request->email,
            'password'=>   bcrypt($request->password),
            'group_id'=> 4,
            'photo' =>'img/user.png',
            'alamat' => $request->alamat,
        ]);
        $user->save();

        $pembimbing->save();
        return redirect('admin/pembimbing');
    }

    public function show(Pembimbing $pembimbing)
    {
        //
    }

    public function edit( $id)
    {
        $pembimbing = pembimbing::find($id);

        return view('pembimbing.edit')->with('pembimbing', $pembimbing)
                                 ->with('perusahaan', Perusahaan::all());
    }

    public function update(Request $request,$id)
    {
        $pembimbing = Pembimbing::findOrfail($id);
        $pembimbing->update($request->all());
        $pembimbing->save();
        return redirect('admin/pembimbing');
    }

    public function destroy(Pembimbing $pembimbing)
    {
        $pembimbing = Pembimbing::findOrFail($pembimbing);
        $pembimbing->delete();

        return redirect('admin/pembimbing');
    }
}
