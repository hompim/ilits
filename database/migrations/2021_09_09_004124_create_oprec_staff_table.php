<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOprecStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oprec_staff', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nrp');
            $table->string('fakultas');
            $table->string('departemen');
            $table->string('angkatan');
            $table->string('kota_asal');
            $table->text('apa_itu_ilits');
            $table->text('motivasi_ilits');
            $table->string('pilihan_1');
            $table->text('alasan_pilihan_1');
            $table->string('pilihan_2');
            $table->text('alasan_pilihan_2');
            $table->integer('komitmen');
            $table->integer('status_divisi')->default(0);
            $table->boolean('is_staff')->default(false);
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
        Schema::dropIfExists('oprec_staff');
    }
}
