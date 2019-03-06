<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = ['id_guru','nama','mapel','email','password','photo','alamat',];

    protected $hidden = [
              'email', 'password'
    ];


    public function kelompok()
    {
        return $this->hasMany('App\Kelompok');
    }

    public function perusahaan()
    {
        return $this->hasMany('App\Perusahaan');
    }

}
