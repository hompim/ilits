<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOprecStaffResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oprec_staff_results', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nrp');
            $table->string('departemen');
            $table->string('divisi_subdivisi');
            $table->string('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oprec_staff_results');
    }
}
