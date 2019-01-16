<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    protected $table =  'pembimbing';

    protected $fillable = ['id','nama','telephone','bagian'];
    
    public function siswa()
    {
        return $this->hasMany('App\Siswa');
    }

    public function perusahaan()
    {
        return $this->hasMany('App\Perusahaan');
    }
}

