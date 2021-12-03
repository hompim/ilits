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
            $table->boolean('is_fnd')->default(false);
            $table->boolean('is_its_fair')->default(false);
            $table->boolean('is_odl')->default(false);
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
