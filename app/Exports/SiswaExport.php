<?php

namespace App\Exports;

use App\siswa_baru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return siswa_baru::select('id_siswa','jurusan','nama','jenis_kelamin','asal_sekolah','nomor_hp','tanggal_lahir','tempat_lahir','rt','rw','dukuh','alamat_desa','kecamatan','kabupaten','provinsi','nama_ayah','pekerjaan_ayah','pendidikan_ayah','nama_ibu','pendidikan_ibu','pekerjaan_ibu','status')->get();
    }


    public function headings(): array
    {
        return [
            'Id Siswa',
            'Jurusan',
            'Nama Calon Siswa Baru',
            'Jenis Kelamin',
            'Asal Sekolah',
            'Nomor Hp',
            'Tanggal Lahir',
            'Tempat Lahir',
            'RT',
            'RW',
            'Dukuh',
            'Desa',
            'Kecamatan',
            'Kabupaten',
            'Provinsi',
            'Nama Ayah',
            'Pekerjaan Ayah',
            'Pendidikan Ayah',
            'Nama Ibu',
            'Pekerjaan Ibu',
            'Pendidikan Ibu',
            'Status'


        ];
    }
}
