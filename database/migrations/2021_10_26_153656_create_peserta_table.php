<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->unsignedBigInteger('provinsi_domisili_id');
            $table->unsignedBigInteger('kab_domisili_id');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->unsignedBigInteger('kab_sekolah_id');
            $table->string('no_wa');
            $table->boolean('is_pelajar_aktif');
            $table->string('tau_ilits');
            $table->unsignedBigInteger('forda_id');
            $table->foreign('forda_id')->references('id')->on('forda')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('provinsi_domisili_id')->references('id')->on('provinsi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kab_domisili_id')->references('id')->on('kota_kab')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kab_sekolah_id')->references('id')->on('kota_kab')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('peserta');
    }
}
