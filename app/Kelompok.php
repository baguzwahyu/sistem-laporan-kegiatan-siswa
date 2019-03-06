<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $table = 'kelompoks';

    protected $fillable = ['id','nama_kelompok','guru_id','pembimbing_id'];



    public function pembimbing()
    {
    return $this->belongsTo('App\Pembimbing');
    }

    public function guru()
    {
    return $this->belongsTo('App\Guru');
    }
    
}
