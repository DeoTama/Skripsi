<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['nama', 'nim', 'email', 'telpon', 'jurusan', 'prodi', 'angkatan', 'anggota', 'skimpkm', 'judulpkm','proposal','status', 'mahasiswa_id'];
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function mahasiswa(){
        return $this->belongsTo('App\User', 'mahasiswa_id');
    }

}
