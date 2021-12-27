<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailTryoutFromTryoutForda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tryout_forda', function (Blueprint $table) {
            $table->string('tanggal_welcome');
            $table->string('sesi_welcome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tryout_forda', function (Blueprint $table) {
            //
        });
    }
}
