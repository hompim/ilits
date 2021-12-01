<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktivitasMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivitas_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departemen_id');
            $table->foreign('departemen_id')->references('id')->on('departemens');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aktivitas_mahasiswas');
    }
}
