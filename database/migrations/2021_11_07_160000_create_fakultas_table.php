<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sesi_id');
            $table->foreign('sesi_id')->references('id')->on('sesi_fnds')->default(1);
            $table->string('nama');
            $table->string('foto');
            $table->text('deskripsi');
            $table->string('singkatan');
            $table->string('link_zoom');
            $table->text('link_map');
            $table->string('foto_header');
            $table->string('slug');
            $table->string('link_video')->nullable();
            $table->date('updated_at')->nullable();
            $table->date('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fakultas');
    }
}
