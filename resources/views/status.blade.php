@include('layouts.css')
@include('layouts.nav')

@foreach ($siswa as $i)
@if ($i->status == null)
<div class="container" style="display: flex; justify-content: center; margin-top: 6%">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Status Pendaftaran</div>
        <div class="card-body">
        <h5 class="card-title"><b>ID : </b>{{$i->id_siswa}}</h5>
        <p class="card-text"><b>Jurusan : </b>{{ $i->jurusan}}</p>
        <p class="card-text"><b>Nama :</b>{{ $i->nama}}</p>
        <p class="card-text">Anda <b> Belum diverifikasi</b>,Silahkan Tunggu, proses Verifikasi, jika ada Pertanyaan silahkan Hubungi <b> 085290506533</b></p>
        </div>
    </div>
</div>

@else
<div class="container" style="display: flex; justify-content: center; margin-top: 6%">
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Status Pendaftaran</div>
        <div class="card-body">
        <h5 class="card-title"><b>ID : </b>{{$i->id_siswa}}</h5>
        <p class="card-text"><b>Jurusan : </b>{{ $i->jurusan}}</p>
        <p class="card-text"><b>Nama :</b>{{ $i->nama}}</p>
        <p class="card-text">Anda Telah diverifikasi, dan <b> Diterima </b> Sebagai Siswa SMK AL HUSAIN KELING</p>
        </div>
    </div>
</div>

@endif
@endforeach


@include('layouts.js')