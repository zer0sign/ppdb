@include('layouts.css')
@include('layouts.nav')

<style>
#verifikasi:hover{
  transform: scale(1.2);
  margin-right: 5%;
}

#edit:hover{
  transform: scale(1.2);
  margin-right: 5%;
}

#hapus:hover{
  transform: scale(1.2);
  margin-right: 5%;
}

</style>


<div class="container">
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    Selamat Datang {{ Auth::user()->name }}, Ini Adalah Tabel Siswa Berdasarkan Pencarian Anda
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
  <br>
  <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('cariSiswa')}}" style="margin-left: 70%">
    <input class="form-control mr-lg-2" type="search" placeholder="Nama/ID Calon Siswa" aria-label="Search" name="cari">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
  </form>
  <br>
<div class="row justify-content-center">

    <div class="col-md-12">
          <table class="table table-hover table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nomor</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            @foreach ($results as $index => $siswa)
            <tbody>
              
              <tr>
                <th scope="row">{{$index + 1}}</th>
                <td>{{$siswa->id_siswa}}</td>
                <td style="width: 40%; height: 10%">{{$siswa->nama}}</td>
                <td style="width: 30%">{{$siswa->jurusan}}</td>
                <td>{{$siswa->jenis_kelamin}}</td>
                <td style="width: 30%">{{$siswa->asal_sekolah}}</td>
                
                <td>
                  <div class="container" style="display: flex; justify-content: space-evenly;">
                  <a data-toggle="tooltip" data-placement="top" title="Check Data" style="margin-right: 3%" id="verifikasi" href="/home/{{ $siswa->id_siswa}}"><svg class="bi bi-person-check" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="green" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm6.854.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  </svg></a>
                  <a data-toggle="tooltip" data-placement="top" title="Edit" id="edit" href="/home/edit/{{ $siswa->id_siswa}}" ><svg class="bi bi-pencil-square" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="blue" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                  </svg></a>
                  <form action="/delete/{{ $siswa->id_siswa }}" method="POST" >
                    @method('DELETE')
                    @csrf
                    <button data-toggle="tooltip" data-placement="top" title="Hapus" id="hapus" type="submit" style="border: none; background-color: transparent"  onclick="return confirm('Apakah Anda Yakin Menghapus data dari {{$siswa->nama}}?')"><svg class="bi bi-trash" width="1.4em" height="1.4em" viewBox="0 0 16 16" fill="red" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></button>
                  </form>
                </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
         <div class="container" style="margin-left: 42%">
          
        </div>


    </div>
</div>
</div>



@include('layouts.js')
