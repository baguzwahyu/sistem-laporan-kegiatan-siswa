<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = ['id_guru','nama','mapel'];


    public function siswa()
    {
        return $this->hasMany('App\Siswa');
    }
    
}
