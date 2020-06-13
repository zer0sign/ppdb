@include('layouts.css')
@include('layouts.nav')
<style>
.card-body{
}
</style>
<div class="container">
<div class="card">
    <div class="card-header">
        <div class="logoname" style="display:flex">
            <div class="logo">
            <img id="nav" src="{{URL::asset('/img/assets/logo.png')}}" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
            </div>
            <div class="name" style="margin-left: 1%; margin-top: 0.3%">
            Pendaftaran
            <br>
            <b> SMK AL HUSAIN KELING</b>
            </div>
        </div>
    </div>
    <div class="card-body">
        <b><h5 style="text-align:center;">Kartu Pendaftaran Siswa Baru SMK Al HUSAIN Keling</h5></b>
        <br>
        @foreach ($dataSiswa as $siswa)
        <p><b>ID Pendaftaran            : </b>{{ $siswa->id_siswa}}</p>
        <p><b>Jurusan        : </b>{{ $siswa->jurusan}}</p>
        <p><b>Nama           : </b>{{ $siswa->nama}}</p>
        <p><b>Jenis Kelamin  : </b>{{ $siswa->jenis_kelamin}}</p>
        <p><b>Agama          : </b>{{ $siswa->agama}}</p>
        <p><b>Asal Sekolah   : </b>{{ $siswa->asal_sekolah}}</p>
        <p><b>Nomor HP       : </b>{{ $siswa->nomor_hp}}</p>
        
        <div class="container1" style="display:flex; flex-wrap:wrap; justify-content:space-between; align-items:center;">
            <div class="bag1" style="font-size:0.8em">
                <p>
                <b>Panduan</b><br>
1. Setelah selasai download, silahkan Cetak Kartu & simpan sebagai bukti pendaftaran 
<br>
2. Bawa Kartu ini ke SMK AL Husain Keling, dilengkapi dengan berkas administrasi untuk Daftar Ulang
<br>
3. Informasi lebih lanjut dapat menghubungi layanan 085290506533
                </p>
            </div>
            <div class="clear">

            </div>
            <div class="bag2">
                <img width="150px" src="{{ url('/img/foto_siswa/' . $siswa->foto_siswa) }}">
            </div>
        </div>

    
    @endforeach
</div>
</div>



{{-- <button class="btn btn-success"><a href="{{ route('index')}}">kembali</a></button> --}}
{{-- <button class="btn btn-success"><a href="{{ route('cetakPdf')}}">Cetak</a></button> --}}
<br>
<div class="download" style="text-align:center">
<a href="{{ route('cetakPdf')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Download Formulir</a>
</div>
</div>

@include('layouts.js')
