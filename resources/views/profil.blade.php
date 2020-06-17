@include('layouts.css')
@include('layouts.nav')

<style>
@media screen and (max-width:500px){
  #accordionExample{
    width:100% !important;
    margin-left: 0% !important;
  }
}
</style>

<div class="container">
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Halaman Profil Siswa</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <br>
    
    <div class="accordion" id="accordionExample" style="width: 50%; margin-left: 25%">
        <div class="card">
          <div class="card-header text-center" id="headingOne">
            <img id="nav" src="{{URL::asset('/img/assets/logo.png')}}" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Data Pribadi Siswa
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="text-center">
              <img style="border-radius: 30%" src="{{ asset("img/foto_siswa/$siswa->foto_siswa") }}" width="80px" alt="" srcset="">
            </div>
              <form style="margin-left: 10%; margin-right: 10%">
                <div class="row mt-2">
                  <div class="col">
                    <label for="">Jurusan</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->jurusan}}" disabled>
                  </div>
                </div>
                  
                <div class="row mt-2">
                  <div class="col">
                    <label for="">Nama</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->nama}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Jenis Kelamin</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->jenis_kelamin}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Tempat/Tanggal Lahir</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->tempat_lahir}} - {{$siswa->tanggal_lahir}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Agama</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->agama}}" disabled>
                  </div>
                </div>



                <div class="row mt-2">
                  <div class="col">
                    <label for="">Nomor Hp</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->nomor_hp}}" disabled>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header text-center" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Data Alamat Siswa
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">


              <form style="margin-left: 10%; margin-right: 10%">
                <div class="row mt-2">
                  <div class="col">
                    <label for="">RT</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->rt}}" disabled>
                  </div>
                </div>
                  
                <div class="row mt-2">
                  <div class="col">
                    <label for="">RW</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->rw}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Dukuh</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->dukuh}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Desa</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->alamat_desa}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Kecamatan</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->kecamatan}}" disabled>
                  </div>
                </div>



                <div class="row mt-2">
                  <div class="col">
                    <label for="">Kabupaten</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->kabupaten}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Provinsi</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->provinsi}}" disabled>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header text-center" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Data Orang Tua Siswa
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <form style="margin-left: 10%; margin-right: 10%">
                <div class="row mt-2">
                  <div class="col">
                    <label for="">Nama Ayah</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->nama_ayah}}" disabled>
                  </div>
                </div>
                  
                <div class="row mt-2">
                  <div class="col">
                    <label for="">Pekerjaan Ayah</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->pekerjaan_ayah}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Pendidikan Ayah</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->pendidikan_ayah}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Nama Ibu</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->nama_ibu}}" disabled>
                  </div>
                </div>


                <div class="row mt-2">
                  <div class="col">
                    <label for="">Pekerjaan Ibu</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->pekerjaan_ibu}}" disabled>
                  </div>
                </div>



                <div class="row mt-2">
                  <div class="col">
                    <label for="">Pendidikan Ibu</label>
                  <input type="text" class="form-control" placeholder="{{$siswa->pendidikan_ibu}}" disabled>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
<br><br>
<div class="versifikasi" style="text-align: center">
    @if ($siswa->status == null)
    <div class="card text-center mt-2" style="border:none;">
        <form action="{{ $siswa->id_siswa}}/verifikasi" method="GET">
        @csrf
        <div class="sub">
        <label class="checkbox-inline"><input type="checkbox" name="ijazah" value="ada">Ijazah</label>
        <label class="checkbox-inline"><input type="checkbox" name="skhun" value="ada">SKHUN</label>
        <label class="checkbox-inline"><input type="checkbox" name="akta" value="ada">Akte</label>
        <label class="checkbox-inline"><input type="checkbox" name="kk" value="ada">KK</label>
        </div>
        <div class="sub">
            <label class="checkbox-inline"><input type="checkbox" name="ktp_ort" value="ada">KTP ORTU</label>
            <label class="checkbox-inline"><input type="checkbox" name="kartu_kip" value="ada">Kartu KIP</label>
            <label class="checkbox-inline"><input type="checkbox" name="piagam" value="ada">Piagam</label>
            </div>
            <h2>status belum di veririfikasi</h2>
            <h3>verifikasi Sekarang</h3>
            <button type="submit" class="btn btn-primary btn-lg active" onclick="return confirm('Verifikasi {{$siswa->nama}} Sekarang?');">Verifikasi</button>
        </form>


    {{-- <h2>status belum di veririfikasi</h2>
    <h3>verifikasi Sekarang</h3>
    <a href="{{ $siswa->id_siswa}}/verifikasi" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" onclick="return confirm('Apakah SKHUN,FC IJAZAH, dari {{$siswa->nama}} sudah ada?');">Verifikasi</a> --}}
@else
<form action="{{ $siswa->id_siswa}}/verifikasi" method="GET">
    @csrf
    <div class="sub">
    @if ($siswa->ijazah === 'ada')
    <label class="checkbox-inline"><input type="checkbox" name="ijazah" value="ada" checked>Ijazah</label>
    @else
    <label class="checkbox-inline"><input type="checkbox" name="ijazah" value="ada">Ijazah</label>
    @endif


    @if ($siswa->skhun === 'ada')
    <label class="checkbox-inline"><input type="checkbox" name="skhun" value="ada" checked>SKHUN</label>    
    @else
    <label class="checkbox-inline"><input type="checkbox" name="skhun" value="ada">SKHUN</label>
    @endif


    @if ($siswa->akta ==='ada')
    <label class="checkbox-inline"><input type="checkbox" name="akta" value="ada" checked>AKTA</label>    
    @else
    <label class="checkbox-inline"><input type="checkbox" name="akta" value="ada">AKTA</label>
    @endif

    @if ($siswa->kk ==='ada')
    <label class="checkbox-inline"><input type="checkbox" name="kk" value="ada" checked>KK</label>
    @else
    <label class="checkbox-inline"><input type="checkbox" name="kk" value="ada">KK</label>
    @endif
</div>
    <div class="sub">
        @if ($siswa->ktp_ortu === 'ada')
        <label class="checkbox-inline"><input type="checkbox" name="ktp_ortu" value="ada" checked>KTP ORTU</label>
        @else
        <label class="checkbox-inline"><input type="checkbox" name="ktp_ortu" value="ada">KTP ORTU</label>
        @endif


        @if ($siswa->kartu_kip === 'ada')
        <label class="checkbox-inline"><input type="checkbox" name="kartu_kip" value="ada" checked>Kartu KIP</label>
        @else
        <label class="checkbox-inline"><input type="checkbox" name="kartu_kip" value="ada">Kartu KIP</label>
        @endif

        @if ($siswa->piagam ==='ada')
        <label class="checkbox-inline"><input type="checkbox" name="piagam" value="ada" checked>Piagam</label>    
        @else
        <label class="checkbox-inline"><input type="checkbox" name="piagam" value="ada">Piagam</label>
        @endif    
    </div>
        <h2>Status Sudah di veririfikasi</h2>
        <button type="submit" class="btn btn-secondary btn-lg active" onclick="return confirm('Verifikasi Lagi {{$siswa->nama}} Sekarang?');">Verifikasi Lagi</button>
    </form>

@endif
</div>
</div>


@include('layouts.js')