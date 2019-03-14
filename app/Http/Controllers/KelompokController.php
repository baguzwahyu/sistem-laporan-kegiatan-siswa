<?php

namespace App\Http\Controllers;

use App\Kelompok;
use App\Siswa;
use App\Guru;
use App\Pembimbing;
use Validator;
use DB;
use App\AnggotaKelompok;
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
        
        $kelompok = Kelompok::find($id);


        return view('kelompok.view')->with('kelompok', $kelompok)
                                 ->with('pembimbing', Pembimbing::all())
                                 ->with('guru', Guru::all())
                                 ->with('siswa', Siswa::all());
    }

   
    public function create()
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

    public function store_anggota(Request $request)
    {
        $this->Validate($request,[
            'id_kelompok'     =>'required',
            'id_siswa'         =>'required',
            
        ]);
        $anggota = new AnggotaKelompok([
            'id_kelompok'     =>$request->get('id_kelompok'),
            'id_siswa'     =>$request->get('id_siswa'),
            
        ]);

        $anggota->save();
        return redirect('admin/kelompok/{kelompok}');   
    }

    
    public function show($id)
    {
//
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
        $kelompok=Kelompok::find($id);

        $kelompok->update($request->all());

        return redirect('admin/kelompok/{kelompok}');
    }

    
    public function destroy(Kelompok $kelompok)
    {
        $kelompok->delete();
        return redirect('admin/kelompok');
    }


    public function create_anggota($id)
    {
        $siswas = siswa::all();
        $kelompok=Kelompok::findOrfail($id);
        return view('kelompok.tambah', compact('siswas','kelompok'));
        }
}
