<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelompoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompoks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kelompok');
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
        Schema::dropIfExists('kelompoks');
    }
}
