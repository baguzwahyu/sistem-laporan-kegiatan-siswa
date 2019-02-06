<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = ['id','group_code','group_description'];


    public function user()
    {
        return $this->hasMany('App\User');
    }

}
