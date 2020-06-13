@include('layouts.css');


<div class="container">
<a href="{{route('download_excel')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Download</a>
<table class="table bordered-table">
    <thead>
    <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Asal Sekolah</th>
        <th scope="col">Tempat lahir</th>
        <th scope="col">Tanggal lahir</th>
        <th scope="col">Nomor Hp</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nama Ayah</th>
        <th scope="col">pekerjaan Ayah</th>
        <th scope="col">pendidikan Ayah</th>
        <th scope="col">Nama Ibu</th>
        <th scope="col">pekerjaan Ibu</th>
        <th scope="col">pendidikan Ibu</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($siswa_baru as $index=>$siswa)
        <tr>
        <th scope="row">{{$index}}</th>
            <td>{{$siswa->jurusan}}</td>
            <td>{{$siswa->nama}}</td>
            <td>{{$siswa->jenis_kelamin}}</td>
            <td>{{$siswa->asal_sekolah}}</td>
            <td>{{$siswa->tempat_lahir}}</td>
            <td>{{$siswa->tanggal_lahir}}</td>
            <td>{{$siswa->nomor_hp}}</td>
            <td>RT {{$siswa->rt}},RW {{$siswa->rw}},Dukuh {{$siswa->dukuh}},Desa {{$siswa->alamat_desa}},Kecamatan {{$siswa->kecamatan}},Kabupaten {{$siswa->kabupaten}}, Provinsi {{$siswa->provinsi}}</td>
            <td>{{$siswa->nama_ayah}}</td>
            <td>{{$siswa->pekerjaan_ayah}}</td>
            <td>{{$siswa->pendidikan_ayah}}</td>
            <td>{{$siswa->nama_ibu}}</td>
            <td>{{$siswa->pekerjaan_ibu}}</td>
            <td>{{$siswa->pendidikan_ibu}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>