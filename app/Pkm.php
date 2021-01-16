<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkm extends Model
{
    protected $table = 'pkms';
    protected $fillable = ['jenis_pkm'];

    public function review(){
        return $this->hasMany('App\Review');
    }
}
