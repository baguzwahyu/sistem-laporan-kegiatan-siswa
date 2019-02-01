<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = ['id_guru','nama','mapel','email','password'];

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
