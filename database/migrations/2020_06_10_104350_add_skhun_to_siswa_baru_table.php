<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSkhunToSiswaBaruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa_baru', function (Blueprint $table) {
            $table->string('ijazah')->nullable();
            $table->string('skhun')->nullable();
            $table->string('akta')->nullable();
            $table->string('kk')->nullable();
            $table->char('ktp_ortu')->nullable();
            $table->char('kartu_kip')->nullable();
            $table->char('piagam')->nullable();
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
