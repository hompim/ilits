<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFordaDaerahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forda_daerah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('forda_id');
            $table->foreign('forda_id')->references('id')->on('forda');
            $table->unsignedBigInteger('kota_kab_id');
            $table->foreign('kota_kab_id')->references('id')->on('kota_kab');
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
        Schema::dropIfExists('forda_daerah');
    }
}
