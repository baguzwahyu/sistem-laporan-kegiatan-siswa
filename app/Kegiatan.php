<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = ['id','bidang_pekerjaan','uraian_pekerjaan','status','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
