<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('peserta_id');
            $table->unsignedBiginteger('sesi_fakultas');
            $table->boolean('is_its_fair')->default(false);
            $table->foreign('sesi_fakultas')->references('id')->on('fakultas')->nullable();
            $table->foreign('peserta_id')->references('id')->on('peserta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_events');
    }
}
