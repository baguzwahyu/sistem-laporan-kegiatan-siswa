<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use App\User;
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
        $kegiatan = kegiatan::with('user')->get();
        return view('dashboard.siswas.kegiatan',compact('kegiatan'));
    }
    public function index_pembimbing()
    {
        $kegiatan = kegiatan::all();
        return view('dashboard.pembimbing.kegiatan',compact('kegiatan'));
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
            'user_id'          =>$request->get('user_id'),
           
        ]);
        $kegiatan ->save();
        return redirect('admin/kegiatan');
    }

    
    public function show($es)
    {
        $kegiatan = kegiatan::findOrFail($es);

        return view('dashboard.pembimbing.view',compact('kegiatan'));
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

        return redirect('admin/kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($kegiatan)
    {
        $kegiatan = kegiatan::findOrFail($kegiatan);

        $kegiatan->delete();
        
        return redirect('admin/kegiatan');
    }

    public function admin($id)
    {
        $user = kegiatan::find($id);

        $user->status = 1;
        $user->save();

        // session::flash('Success','Berhasil Menyetujui Kegiatan');
        return redirect()->back();
    }

    public function not_admin($id)
    {
        $user = kegiatan::find($id);

        $user->status = 0;
        $user->save();

        // session::flash('succes','Berhasil Menggagalkan Persetujuan');
        return redirect()->back();
    }

    public function update_user(Request $request,$id)
    {
       
        $user=User::findOrfail($id);

        $user->update($request->all());

        return redirect('admin/profile');

        }

        public function store_user(Request $request)
        {
                    
            // $this->Validate($request,[
            //     'name'          =>'required',
            //     'email'         =>'required|email|unique:siswa',
            //     'password'      =>'required|min:6|confirmed'
            // ]);
            // $user = new User([
            //     'name'          =>$request->get('name'),
            //     'email'         =>$request->get('email'),
            //     'password'      =>bcrypt($request->password),
            //     'photo' =>'img/user.png',
            //     'alamat' => $request->alamat
            // ]);

            if(Input::post())
        {
            $email = Input::post('email');
            $password = Input::post('password');
            $photo = Input::post('photo');
            $alamat = Input::post('alamat');
            return "Email: " . $email . " and Password: " . $password . " photo: " . $photo . " alamat: " . $alamat;
        }else{
            return View::make('admin/profile');
        }
           
            // $user->save();
    
            // return redirect('admin/profile');
        }

}


// INSERT INTO `groups` (`id`, `group_code`, `group_description`) VALUES 
// (NULL, 'webmaster', 'super webmaster'),
// (NULL, 'admin', 'super administrator'),
// (NULL, 'guru', 'login for guru'),
// (NULL, 'pembimbig', 'login for pembimbing'),
// (NULL, 'siswa', 'login for siswa');
