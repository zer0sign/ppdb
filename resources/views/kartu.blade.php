

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran</title>
    <style>
    .kartu{
        margin: auto;
        border: solid 1px black;
        padding: 5%;
       
    }
    </style>
</head>

<body>
    <div class="kartu" style="padding-top: 1% !important;">
        <div class="head" style="margin-top: -5%; display:flex;align-items: center">
            <img id="nav" src="{{public_path('/img/assets/logo.png')}}" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
            <b><h5 style="text-align: center;">FORMULIR PENDAFTARAN SISWA BARU SMK AL HUSAIN KELING</h5></b>
        </div>
        <br>
        <br>
        <hr>
        <div class="datasiswa" style="display:flex; align-direction:flex-end">
        <div class="left">
        @foreach ($dataSiswa as $siswa)
        <h3>Data Siswa</h3>
        <p><b>ID             : </b>{{ $siswa->id_siswa}}</p>
        <p><b>Jurusan        : </b>{{ $siswa->jurusan}}</p>
        <p><b>Nama           : </b>{{ $siswa->nama}}</p>
        <p><b>Jenis Kelamin  : </b>{{ $siswa->jenis_kelamin}}</p>
        <p><b>Agama          : </b>{{ $siswa->agama}}</p>
        <p><b>Asal Sekolah   : </b>{{ $siswa->asal_sekolah}}</p>
        <p><b>Nomor HP       : </b>{{ $siswa->nomor_hp}}</p>
        <p><b>Tempat Lahir   : </b>{{ $siswa->tempat_lahir}}</p>
        <p><b>Tanggal Lahir  : </b>{{ $siswa->tempat_lahir}}</p>
        <p><b>Alamat       : </b>RT {{ $siswa->rt}},RW {{ $siswa->rw}},Dukuh{{ $siswa->dukuh}},Desa{{ $siswa->alamat_desa}},Kecamatan {{ $siswa->kecamatan}},Kabupaten{{ $siswa->kabupaten}},Prov. {{ $siswa->provinsi}}</p>
        <p><b>Nama Ayah  : </b>{{ $siswa->nama_ayah}}</p>
        <p><b>Pendidikan Ayah  : </b>{{ $siswa->pendidikan_ayah}}</p>
        <p><b>Pekerjaan Ayah  : </b>{{ $siswa->pekerjaan_ayah}}</p>
        <p><b>Nama Ibu  : </b>{{ $siswa->nama_ibu}}</p>
        <p><b>Pendidikan Ibu  : </b>{{ $siswa->pendidikan_ibu}}</p>
        <p><b>Pekerjaan Ibu  : </b>{{ $siswa->pekerjaan_ibu}}</p>
        
    </div>
        <div class="right" style="margin-left:80% !important;">
            <img src="{{ public_path("img/foto_siswa/".$siswa->foto_siswa) }}" alt="" style="max-height: 150px;">
            @endforeach
        </div>
    </div>
        
            <div class="left" style="border:solid 1px black;font-size:0.8em; padding-left:2%; padding-top:-1%; margin-top:-15%">
            <p>
            <b>Panduan</b><br>
                1. Setelah selasai download, silahkan Cetak Kartu & simpan sebagai bukti pendaftaran 
                <br>
                2. Bawa Kartu ini ke SMK AL Husain Keling, dilengkapi dengan berkas administrasi untuk Daftar Ulang
                <br>
                3. Informasi lebih lanjut dapat menghubungi layanan 085290506533
            </p>
        </div>
</div>
</body>
</html>