<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTryoutFordaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tryout_forda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('forda_id');
            $table->string('nama_rek');
            $table->string('nama_bank');
            $table->string('no_rek');
            $table->unsignedInteger('biaya');
            $table->string('keterangan');
            $table->string('daerah');
            $table->string('nama_pj');
            $table->string('id_line_pj');
            $table->string('hp_pj');
            $table->string('link_meet')->nullable();
            $table->string('kode_presensi')->nullable();
            $table->foreign('forda_id')->references('id')->on('forda');
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
        Schema::dropIfExists('tryout_forda');
    }
}
