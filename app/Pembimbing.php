<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    protected $table =  'pembimbing';

    protected $fillable = ['id','nama','telephone','bagian','email', 'password','photo','alamat'];
    
    protected $hidden = [
              'email', 'password'
];


    public function siswa()
    {
        return $this->hasMany('App\Siswa');
    }

    public function perusahaan()
    {
        return $this->hasMany('App\Perusahaan');
    }
}

