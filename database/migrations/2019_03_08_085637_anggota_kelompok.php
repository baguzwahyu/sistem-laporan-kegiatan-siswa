<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnggotaKelompok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_kelompok', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_kelompok')->unsigned();
            $table->integer('id_siswa')->unsigned();
            
            $table->foreign('id_kelompok')
            ->references('id')->on('kelompoks')
            ->onDelete('cascade');

    
      $table->foreign('id_siswa')
            ->references('id')->on('siswa')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_kelompok');
    }
}
