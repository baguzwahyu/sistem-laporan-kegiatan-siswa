<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaKelompok extends Model
{
    protected $table = 'anggota_kelompok';

    protected $fillable = ['id','id_siswa','id_kelompok'];

    
    
    public function siswa()
    {
    return $this->hasOne('App\Siswa', 'id', 'id_siswa');
    }

    public function kelompok()
    {
    return $this->belongsTo('App\Kelompok');
    }

}
