<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkm extends Model
{
    protected $table = 'pkms';
    protected $fillable = ['jenis_pkm'];

    public function pkm(){
        return $this->hasOne('App\Pkm');
    }
}
