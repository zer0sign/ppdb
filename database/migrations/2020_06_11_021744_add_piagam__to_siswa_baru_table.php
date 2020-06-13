<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPiagamToSiswaBaruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa_baru', function (Blueprint $table) {
            Schema::table('siswa_baru', function (Blueprint $table) {
                $table->char('piagam')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa_baru', function (Blueprint $table) {
            //
        });
    }
}
