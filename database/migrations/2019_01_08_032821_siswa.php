<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jurusan');
            $table->string('kelas');
            $table->integer('guru_id')-> unsigned();
            $table->integer('pembimbing_id')->unsigned();
            $table->timestamps();

            $table->foreign('guru_id')
                  ->references('id')->on('guru')
                  ->onDelete('cascade');
                  
            $table->foreign('pembimbing_id')
                  ->references('id')->on('pembimbing')
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
        Schema::dropIfExists('siswa');
    }
}
