@include('layouts.css')

{{-- nav --}}
@include('layouts.nav')

<form action="">
  @csrf
  
</form>




<div class="container">
<form action="{{ route('simpan') }}" method="POST" enctype="multipart/form-data">
<div class="accordion" id="accordionExample">
    <div class="card text-white bg-info">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="badge badge-primary">Data Siswa</span>
        </button>
        </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
        
            
                <div class="form-group">
                <label for="nama_siswa">Jurusan</label>
                <select class="form-control" name="jurusan" required>
                    <option>OTK Perkantoran</option>
                    <option>Multimedia</option>
                </select>
                </div>
        
                <div class="form-group">
                <label for="nama_siswa">Nama</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama" required>
                </div>
        
                <div class="form-group">
                    <label for="nama_siswa">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>
        
                <div class="form-group">
                    <label for="nama_siswa">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
        
                <div class="form-group">
                    <label for="nama_siswa">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" required>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                  <label for="asal_sekolah">Asal Sekolah</label>
                  <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
              </div>
        
                    <div class="form-group">
                        <label for="nama_siswa">Agama</label>
                        <select class="form-control" name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>lainnya</option>
                        </select>
                        </div>
                        
                        <div class="form-group">
                          <label for="noHp">Nomor HP</label>
                          <input type="text" class="form-control" id="noHP" name="nomor_hp" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="nama_siswa">Alamat Desa</label>
                        <input type="text" class="form-control" id="alamat_desa" name="alamat_desa" required>
                    </div>

                    <div class="form-group">
                      <label for="nama_siswa">Dukuh</label>
                      <input type="text" class="form-control" id="dukuh" name="dukuh" required>
                  </div>

                        <div class="form-group">
                          <label for="foto_siswa">Foto</label>
                          <input type="file" class="form-control-file" id="foto_siswa" enctype="multipart/form-data" name="foto_siswa" required>
                        </div>


        </div>
      </div>
    </div>
    <div class="card text-white bg-info">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="badge badge-primary">Alamat Siswa</span>
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
         
          <div class="form-group">
            <label for="rt">RT</label>
            <input type="text" class="form-control" id="rt" name="rt" required>
          </div>

    <div class="form-group">
        <label for="rt">RW</label>
        <input type="text" class="form-control" id="rw" name="rw" required>
  </div>


  <div class="form-group">
    <label for="kecamatan">Kecamatan</label>
    <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
</div>

<div class="form-group">
  <label for="kabupaten">Kabupaten</label>
  <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
</div>

<div class="form-group">
  <label for="provinsi">Provinsi</label>
  <input type="text" class="form-control" id="provinsi" name="provinsi" required>
</div>



        </div>
      </div>
    </div>
    <div class="card text-white bg-info">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="badge badge-primary">Data Wali Siswa</span>
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          
          <div class="form-group">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
          </div>

          <div class="form-group">
            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
            <select class="form-control" name="pekerjaan_ayah" required>
                <option>Tidak Bekerja</option>
                <option>Petani</option>
                <option>Wiraswasta</option>
                <option>Pegawai Negeri Sipil</option>
                <option>TNI/POLRI</option>
                <option>Buruh</option>
                <option>Pekerja Lepas</option>
                <option>Lainnya</option>
            </select>
            </div>

          <div class="form-group">
            <label for="pendidikan_ayah">Pendidikan Ayah</label>
            <select class="form-control" name="pendidikan_ayah" required>
                <option>Tidak Sekolah</option>
                <option>Sekolah Dasar</option>
                <option>Sekolah Menengah Pertama atau Sederajat</option>
                <option>Sekolah Menengah Atas atau Sederajat</option>
                <option>Strata I</option>
                <option>Strata II</option>
                <option>Strata III</option>
                <option>Lainnya</option>
            </select>
            </div>



            <div class="form-group">
              <label for="nama_ibu">Nama Ibu</label>
              <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
            </div>
  
            <div class="form-group">
              <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
              <select class="form-control" name="pekerjaan_ibu" required>
                  <option>Ibu Rumah Tangga</option>
                  <option>Petani</option>
                  <option>Wiraswasta</option>
                  <option>Pegawai Negeri Sipil</option>
                  <option>TNI/POLRI</option>
                  <option>Buruh</option>
                  <option>Pekerja Lepas</option>
                  <option>Lainnya</option>
              </select>
              </div>
  
            <div class="form-group">
              <label for="pendidikan_ibu">Pendidikan Ibu</label>
              <select class="form-control" name="pendidikan_ibu" required>
                  <option>Tidak Sekolah</option>
                  <option>Sekolah Dasar</option>
                  <option>Sekolah Menengah Pertama atau Sederajat</option>
                  <option>Sekolah Menengah Atas atau Sederajat</option>
                  <option>Strata I</option>
                  <option>Strata II</option>
                  <option>Strata III</option>
                  <option>Lainnya</option>
              </select>
              </div>

        </div>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

</body>
</html>



























@include('layouts.js')