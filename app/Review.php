<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = [
        'kriteria',
        'bobot',
        'keterangan',
    ];

    public function pkm() {
        return $this->hasMany('App\pkm');
    }
}
