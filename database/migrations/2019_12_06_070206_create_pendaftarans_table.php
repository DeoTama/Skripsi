<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->char('nim' , 8)->unique();
            $table->string('email' , 50)->unique();
            $table->string('telpon' , 20);
            $table->string('jurusan' , 100);
            $table->string('prodi' , 100);
            $table->char('angkatan' , 4);
            $table->string('anggota' , 255);
            $table->string('skimpkm' , 50);
            $table->string('judulpkm' , 255);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
