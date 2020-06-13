@include('layouts.css')
@include('layouts.customwizard')

<style>

label{
   text-align: right;
}

@media only screen and (min-width: 700px) {
  .container {
    padding-left: 20%;
  }
}
</style>
{{-- nav --}}
@include('layouts.nav')
<!-- CSS -->
<link href="https://unpkg.com/smartwizard@5.0.0/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

<div class="container">
<form action="{{ route('simpan') }}" method="POST" enctype="multipart/form-data">
      @csrf
   <div class="card"  style="max-width: 40rem;">
      <div class="card-header  text-center">
         <img id="nav" src="{{URL::asset('/img/assets/logo.png')}}" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
         <br>
         Formulir Pendaftaran Siswa Baru
      </div>

<div id="smartwizard">
   <ul class="nav">
      <li>
         <a class="nav-link" href="#step-1">
            Data Siswa
         </a>
      </li>
      <li>
         <a class="nav-link" href="#step-2">
            Data Alamat Siswa
         </a>
      </li>
      <li>
         <a class="nav-link" href="#step-3">
            Data Orang Tua Siswa
         </a>
      </li>
   </ul>
   <div class="tab-content">
      <div id="step-1" class="tab-pane" role="tabpanel">
         <div class="form-group">
            <label for="nama_siswa">Kompetensi Keahlian</label>
            <select class="form-control" name="jurusan" required>
               <option>OTK Perkantoran</option>
               <option>Multimedia</option>
            </select>
            </div>

            <div class="form-group">
               <label for="nama_siswa">Nama</label>
               <input type="text" class="form-control" id="nama_siswa" name="nama" required placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
               <label for="nama_siswa">Tempat Lahir</label>
               <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Tempat Lahir">
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
               <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required placeholder="Nama Sekolah Asal">
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
                  <input type="number" class="form-control" id="noHP" name="nomor_hp" required placeholder="Nomor Hp/Whatsapp Siswa">
            </div>


            <div class="form-group">
               <label for="foto_siswa">Foto</label>
               <input type="file" class="form-control-file" id="foto_siswa" enctype="multipart/form-data" name="foto_siswa" required>
               <small id="hint" class="form-text text-muted">Ukuran Maksimal 2MB,Format PNG/JPG,Foto dengan Pose Formal,Ukuran 3x4</small>
            </div>




      </div>
      <div id="step-2" class="tab-pane" role="tabpanel">
         <div class="form-group">
            <label for="rt">RT</label>
            <input type="number" class="form-control" id="rt" name="rt" required placeholder="Di isi angka">
         </div>

   <div class="form-group">
      <label for="rt">RW</label>
      <input type="number" class="form-control" id="rw" name="rw" required placeholder="Di isi angka">
</div>


<div class="form-group">
 <label for="nama_siswa">Dukuh</label>
 <input type="text" class="form-control" id="dukuh" name="dukuh" required placeholder="Dukuh Tempat Tinggal Siswa">
</div>


<div class="form-group">
   <label for="nama_siswa">Desa</label>
   <input type="text" class="form-control" id="alamat_desa" name="alamat_desa" required placeholder="Desa Tempat Tinggal Siswa">
</div>


<div class="form-group">
   <label for="kecamatan">Kecamatan</label>
   <input type="text" class="form-control" id="kecamatan" name="kecamatan" required placeholder="Kecamatan Tempat Tinggal Siswa">
</div>

<div class="form-group">
 <label for="kabupaten">Kabupaten</label>
 <input type="text" class="form-control" id="kabupaten" name="kabupaten" required placeholder="Kabupaten Tempat Tinggal Siswa">
</div>

<div class="form-group">
 <label for="provinsi">Provinsi</label>
 <input type="text" class="form-control" id="provinsi" name="provinsi" required placeholder="Provinsi Tempat Tinggal Siswa">
</div>


       </div>
       <div id="step-3" class="tab-pane" role="tabpanel">
          
      


         <div class="form-group">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required placeholder="Nama Lengkap Ayah">
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
              <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required placeholder="Nama Lengkap Ibu">
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
            <div class="btdaftar" style="text-align: center">
              <button type="submit" class="btn btn-success" >Daftar Sekarang</button>
              <small id="hint" class="form-text text-muted">Pastikan Form sudah terisi semua, agar bisa mendaftar</small>
            </div>
            </form>
       </div>
    </div>
</div>
</div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
 
 // SmartWizard initialize
 $('#smartwizard').smartWizard({
    
    transitionEffect : 'slide',
    transitionSpeed : '400'
 });

});
</script>
<style>
   .bo{
       color: lightslategray;
       margin-top: 8% !important
   }
   @media screen and (max-width: 500px){
.bo{
   color: lightslategray;
       margin-top: 20% !important
}
   }
</style>
   
   <nav class="nav justify-content-center" style="display: flex; align-items: center !importat">
       <div class="bo" style="text-align:center;">
       <p>PANITIA PENERIMAAN PESERTA DIDIK BARU</p>
       <p>copyright by skalsain</p>
   </div>
   </nav>
</body>
</html>











<!-- JavaScript -->
<script src="https://unpkg.com/smartwizard@5.0.0/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>