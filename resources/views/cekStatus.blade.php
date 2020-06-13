@include('layouts.css')
@include('layouts.nav')
<style>

</style>
<div class="container" style="height: 56%">
    <div class="card text-center" style="margin-left:10%; margin-right: 10%">
        <div class="card-header">
          Cek Status Calon Peserta Didik Baru
        </div>
        <div class="card-body" >
          
            <form class="form" method="GET" action="{{ route('status')}}" style="display: flex; justify-content: center">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="ID" aria-label="Search" name="id_siswa" required style="width: 50%;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
      </div>

</div>

@include('layouts.js')