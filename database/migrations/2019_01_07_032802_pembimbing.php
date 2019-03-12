<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pembimbing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembimbing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('telephone');
            $table->string('bagian');
            $table->integer('perusahaan_id')->unsigned();
            $table->string('alamat');
            $table->string('photo')->default('demo');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();

            $table->foreign('perusahaan_id')
            ->references('id')
            ->on('perusahaan')
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
        Schema::dropIfExists('pembimbing');
    }
}
