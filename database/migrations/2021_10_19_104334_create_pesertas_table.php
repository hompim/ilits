<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('user_id');
            $table->string('asal_sekolah');
            $table->string('asal_daerah');
            //$table->unsignedBigInteger('forda_id');
            $table->string('no_wa');
            $table->string('bukti_bayar')->default(null)->nullable();
            $table->enum('status', ['pending', 'pending_pembayaran', 'aktif', 'ditolak', 'tolak_pembayaran', 'salah_forda'])->default('pending');
            $table->string('kartu_pelajar')->default(null)->nullable();
            $table->enum('pilihan_tryout', ['saintek', 'soshum'])->default('saintek');
            // $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('forda_id')->references('id')->on('forda')->onDelete('cascade')->onUpdate('cascade');
            $table->string('username_tryout')->nullable();
            $table->string('password_tryout')->nullable();
            $table->string('token_tryout')->nullable();
            $table->enum('status_absen', ['hadir', 'tidak_hadir', 'belum_absen'])->default('belum_absen');
            $table->text('keterangan_absen')->nullable();
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
