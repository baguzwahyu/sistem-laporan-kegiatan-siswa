<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table =  'siswa';

    protected $fillable = ['id','nama','jurusan','kelas','guru_id','pembimbing_id','email', 'password','photo','alamat'];

    protected $hidden = [
              'email', 'password'
];

public function pembimbing()
{
    return $this->belongsTo('App\Pembimbing');
}

public function guru()
{
    return $this->belongsTo('App\Guru');
}
    
    
}
