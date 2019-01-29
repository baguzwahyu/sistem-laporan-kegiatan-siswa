<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';

    protected $fillable = ['id','bidang_pekerjaan','uraian_pekerjaan'];
}
