<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaBaruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_baru', function (Blueprint $table) {
            $table->bigIncrements('id_siswa');
            $table->string('jurusan');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin');
            $table->string('agama');
            $table->string('alamat_desa');
            $table->string('dukuh');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->char('nomor_hp');
            $table->string('asal_sekolah');
            $table->char('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->char('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('foto_siswa');
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
        Schema::dropIfExists('siswa_baru');
    }
}
