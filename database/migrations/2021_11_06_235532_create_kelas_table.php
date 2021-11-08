<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sesi_id');
            $table->integer('nomor_kelas');
            $table->integer('kuota');
            $table->string('link_wa');
            $table->string('link_zoom');
            $table->date('updated_at')->nullable();
            $table->date('created_at')->nullable();
            $table->foreign('sesi_id')->references('id')->on('sesi_odls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
