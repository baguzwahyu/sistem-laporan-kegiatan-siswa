<?php

namespace App\Http\Controllers;

use App\Kelompok;
use App\Guru;
use App\Pembimbing;
use Validator;
use DB;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    
    public function index()
    {
        $kelompok = kelompok::with('guru')->get();
        $kelompok = kelompok::with('pembimbing')->get();

        return view('kelompok.index',compact('kelompok') );
    }

    public function view_kelompok($id)
    {
        // $kelompok = Kelompok::find($id);
        // $kelompok = kelompok::with('guru')->get();
        // $kelompok = kelompok::with('pembimbing')->get();

        // return view('kelompok.view',compact('kelompok') );

        $kelompok = Kelompok::find($id);


        return view('kelompok.view')->with('kelompok', $kelompok)
                                 ->with('pembimbing', Pembimbing::all())
                                 ->with('guru', Guru::all());
    }

   
    public function create()
    {
        $gurus = guru::all();
        $pembimbings = pembimbing::all();
        return view('kelompok.create', compact('gurus','pembimbings'));
    }

    public function create_kelompok()
    {
        $gurus = guru::all();
        $pembimbings = pembimbing::all();
        return view('kelompok.create', compact('gurus','pembimbings'));
    }

    
    public function store(Request $request)
    {
        $this->Validate($request,[
            'nama_kelompok'     =>'required',
            'guru_id'           =>'required',
            'pembimbing_id'     =>'required',
        ]);
        $kelompok = new Kelompok([
            'nama_kelompok'     =>$request->get('nama_kelompok'),
            'guru_id'     =>$request->get('guru_id'),
            'pembimbing_id'     =>$request->get('pembimbing_id'),
        ]);

        $kelompok->save();
        return redirect('admin/kelompok');
    }

    
    public function show($id)
    {
        // $kelompok = kelompok::with('guru')->get();
        // $kelompok = kelompok::with('pembimbing')->get();
        // $kelompok = kelompok::findOrFail($id);
        // return view('kelompok.view',compact('kelompok'));
    }

    
    public function edit($id)
    {
        $kelompok = Kelompok::find($id);


        return view('kelompok.edit')->with('kelompok', $kelompok)
                                 ->with('pembimbing', Pembimbing::all())
                                 ->with('guru', Guru::all());
    }

    
    public function update(Request $request,$id)
    {
        $kelompok=Kelompok::findOrfail($id);

        $kelompok->update($request->all());

        return redirect('admin/kelompok');
    }

    public function view_update(Request $request,$id)
    {
        $kelompok=Kelompok::findOrfail($id);

        $kelompok->update($request->all());

        return redirect('view_kelompok');
    }

    
    public function destroy(Kelompok $kelompok)
    {
        $kelompok->delete();
        return redirect('admin/kelompok');
    }

    public function AnggotaKelompok()
    {
        $kelompok = DB::table('kelompoks')
            ->join('', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
    }
}
