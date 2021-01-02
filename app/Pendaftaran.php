<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['nama', 'nim', 'email', 'telpon', 'jurusan', 'prodi', 'angkatan', 'anggota', 'skimpkm', 'judulpkm'];
}
