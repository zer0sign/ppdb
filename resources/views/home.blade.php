@extends('layouts.app')
@section('content')
<style>
.card{
    margin: 1% !important;
}
</style>
<div class="container">
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Selamat Datang {{ Auth::user()->name }}, Ini Adalah Halaman Admin
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<div class="container" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
    <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-header" style="background-color: lightgreen">
            <h5>Siswa Mendaftar</h5>
        </div>
        <div class="card-body">
        <h2 class="card-title"><b>{{$total_daftar}}</b></h2>
        <div class="sub"  style="display: flex; justify-content: space-evenly">
        <div class="otkp">
        <p class="card-text"><h3><b>{{$total_otkp}}</b></h3></p>
        <small class="form-text text-muted">OTKP Perkantoran</small>
        </div>
        <div class="otkp">
            <p class="card-text"><h3><b>{{$total_multimedia}}</b></h3></p>
            <small class="form-text text-muted">Multimedia</small>
            </div>
        </div>
        <br>
    <a href="{{ route('totalDaftar')}}" class="btn btn-primary">Lihat</a>
    <a href="{{ route('download_excel')}}" class="btn btn-success">Cetak excel</a>
        </div>
      </div>



      <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-header" style="background-color: lightskyblue">
            <h5>Siswa Terverifikasi</h5>
        </div>
        <div class="card-body">
        <h2 class="card-title"><b>{{$total_verifikasi}}</b></h2>
        <div class="sub"  style="display: flex; justify-content: space-evenly">
        <div class="otkp">
        <p class="card-text"><h3><b>{{$verifikasi_otkp}}</b></h3></p>
        <small class="form-text text-muted">OTKP Perkantoran</small>
        </div>
        <div class="otkp">
            <p class="card-text"><h3><b>{{$verifikasi_multimedia}}</b></h3></p>
            <small class="form-text text-muted">Multimedia</small>
            </div>
        </div>
        <br>
    <a href="{{ route('totalVerifikasi')}}" class="btn btn-primary">Lihat</a>
        </div>
      </div>

    <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-header" style="background-color: lightgrey">
            <h5>Siswa Belum Terverifikasi</h5>
        </div>
        <div class="card-body">
        <h2 class="card-title"><b>{{$total_belum_verifikasi}}</b></h2>
        <div class="sub"  style="display: flex; justify-content: space-evenly">
        <div class="otkp">
        <p class="card-text"><h3><b>{{$non_verifikasi_otkp}}</b></h3></p>
        <small class="form-text text-muted">OTKP Perkantoran</small>
        </div>
        <div class="otkp">
            <p class="card-text"><h3><b>{{$non_verifikasi_multimedia}}</b></h3></p>
            <small class="form-text text-muted">Multimedia</small>
            </div>
        </div>
        <br>
    <a href="{{ route('belumVerifikasi')}}" class="btn btn-primary">Lihat</a>
        </div>
    </div>



    <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-header" style="background-color: pink">
            <h5>Data Jenis Kelamin Siswa</h5>
        </div>
        <div class="card-body">
        <div class="sub"  style="display: flex; justify-content: space-evenly">
        <div class="otkp">
        <p class="card-text"><h3><b>{{$total_lk}}</b></h3></p>
        <small class="form-text text-muted">Laki-laki</small>
        </div>
        <div class="otkp">
            <p class="card-text"><h3><b>{{$total_pr}}</b></h3></p>
            <small class="form-text text-muted">Perempuan</small>
            </div>
        </div>
        </div>
    </div>



    <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-header" style="background-color: yellow">
            <h5>Siswa Mendaftar OTKP</h5>
        </div>
        <div class="card-body">
        <div class="sub"  style="display: flex; justify-content: space-evenly">
        <div class="otkp">
        <p class="card-text"><h3><b>{{$total_otkp_lk}}</b></h3></p>
        <small class="form-text text-muted">Laki-laki</small>
        </div>
        <div class="otkp">
            <p class="card-text"><h3><b>{{$total_otkp_pr}}</b></h3></p>
            <small class="form-text text-muted">Perempuan</small>
            </div>
        </div>
        </div>
    </div>


    <div class="card text-center mb-3" style="width: 18rem;">
        <div class="card-header" style="background-color: lightcoral">
            <h5>Siswa Mendaftar Multimedia</h5>
        </div>
        <div class="card-body">
        <div class="sub"  style="display: flex; justify-content: space-evenly">
        <div class="otkp">
        <p class="card-text"><h3><b>{{$total_mm_lk}}</b></h3></p>
        <small class="form-text text-muted">Laki-laki</small>
        </div>
        <div class="otkp">
            <p class="card-text"><h3><b>{{$total_mm_pr}}</b></h3></p>
            <small class="form-text text-muted">Perempuan</small>
            </div>
        </div>
        </div>
    </div>


</div>




<br><br><br><br><br><br><br>

@include('layouts.js')
@endsection


