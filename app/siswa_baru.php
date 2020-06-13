<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa_baru extends Model
{
    protected $table = "siswa_baru";
    protected $primaryKey = "id_siswa";
    protected $fillable = [
            'jurusan',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'agama',
            'alamat_desa',
            'dukuh',
            'rt',
            'rw',
            'kecamatan',
            'kabupaten',
            'provinsi',
            'nomor_hp',
            'asal_sekolah',
            'nama_ayah',
            'pekerjaan_ayah',
            'pendidikan_ayah',
            'nama_ibu',
            'pekerjaan_ibu',
            'pendidikan_ibu',
            'foto_siswa'
    ];
}
