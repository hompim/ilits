<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFordasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forda', function (Blueprint $table) {
            $table->id();
            $table->string('daerah');
            $table->string('nama_pj');
            $table->string('id_line_pj');
            $table->string('hp_pj');
            $table->string('link_meet')->nullable();
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
        Schema::dropIfExists('forda');
    }
}
