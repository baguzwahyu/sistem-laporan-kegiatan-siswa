<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaKelompok extends Model
{
    protected $table = 'anggota_kelompok';

    protected $fillable = ['id','id_siswa','id_kelompok'];

    
    
    public function siswa()
    {
    return $this->belongsTo('App\Siswa');
    }

    public function kelompok()
    {
    return $this->belongsTo('App\Kelompok');
    }

}
