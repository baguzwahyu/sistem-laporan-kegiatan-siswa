<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    
    protected $fillable = ['id','nama','alamat','telephone','email','logo'];

    
    public function pembimbing()
    {
        return $this->hasMany('App\Pembimbing');
    }
}
