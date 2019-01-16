<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    
    protected $fillable = ['id','pembimbing_id','nama'];

    
    public function pembimbing()
    {
        return $this->belongsTo('App\Pembimbing');
    }
}
