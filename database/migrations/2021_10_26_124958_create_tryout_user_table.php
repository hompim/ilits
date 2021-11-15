<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTryoutUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tryout_user', function (Blueprint $table) {
            $table->id();
            $table->string('bukti_bayar')->default(null)->nullable();
            $table->enum('status_bayar', ['pending', 'pending_pembayaran', 'aktif', 'ditolak', 'tolak_pembayaran', 'salah_forda'])->default('pending');
            $table->enum('pilihan_tryout', ['saintek', 'soshum']);
            $table->string('username_tryout')->nullable();
            $table->string('password_tryout')->nullable();
            $table->enum('status_absen', ['hadir', 'tidak_hadir', 'belum_absen'])->default('belum_absen');
            $table->text('keterangan_absen')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tryout_user');
    }
}
