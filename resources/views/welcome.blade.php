@include('layouts.css')
{{-- nav --}}
<!-- Image and text -->
@include('layouts.nav')
<br>
<style>
.jumbotron{
    position: relative;
    overflow: hidden;
    display:flex;
    border-radius: 23px;
    justify-items: flex-end;
    color: white;
    background-color: #76B8F5;
}

.display-4{
    font-size: 2em;
}

#container2{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

#main{
    position: absolute;
    bottom: 0.5%;
    margin-left: 63%
}

#main:hover{
    transform: scale(1.2)
}

.card-text{
    font-size: 0.9em
}

@media screen and (max-width: 500px){
    .jumbotron{
    border-radius: 15px;
    display: flex;
    background-color: #76B8F5;
    
    color: white;
}

    .btn{
        margin-top: 3%;
    }
    .card:hover{
        transform: scale(1.2)
    }

    #main{
        visibility: hidden;
    }

    .display-4{
        font-size: 1.3em;
    }
    .lead{
        font-size: 1.1em;
    }


    h5{
        font-size: 1em
    }

}




</style>
<div class="container">
    <div class="jumbotron">
        <div class="bag1">
            <h3 class="display-4">Sekolah Segudang Prestasi <br>Bantu Kamu Wujudkan Mimpi</h3>
            <p class="lead">satu langkah lebih dekat dengan impianmu<br>dengan mulai belajar, dilembaga pendidikan terbaik.</p>
                <a class="btn btn-primary btn-lg" href="{{ route('cekStatus')}}" role="button">Cek status</a>
                <a class="btn btn-warning btn-lg" href="{{ route('daftar')}}" role="button">Daftar Sekarang</a>
        </div>
        
    <img id="main" src="{{URL::asset('/img/assets/main.png')}}" width="400" max-height="600" class="d-inline-block align-top" alt="" loading="lazy">
    </div>
</div>
<h5 class="text-center" style="color: dimgray"><b>Alasan Bergabung dengan SMK al Husain Keling</b></h5>
<br>
<div class="container" id="container2">
    <div class="card mb-3" style="width: 18rem;">
        <img src="https://smkalhusainkeling.sch.id/wp-content/uploads/2019/02/DSC_0306-e1549093539568.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Banyak Prestasi</h5>
          <p class="card-text" style="text-align: justify">SMK AL HUSAIN Keling adalah Sebuah Sekolah yang memiliki banyak Prestasi, diberbagai jenis Kompetensi.</p>
        </div>
      </div>


      <div class="card mb-3" style="width: 18rem;">
        <img src="https://smkalhusainkeling.sch.id/wp-content/uploads/2019/02/DSC_0534-e1549093708778.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Beragam Extra Kurikuler</h5>
          <p class="card-text" style="text-align: justify">SMK Al Husain Keling Memiliki, Berbagai Jenis ExtraKurikuler Guna Mengembangkan Bakat & Minat Siswa</p>
        </div>
      </div>


      <div class="card mb-3" style="width: 18rem;">
        <img src="https://smkalhusainkeling.sch.id/wp-content/uploads/2019/01/simulasi1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Fasilitas Lengkap</h5>
          <p class="card-text" style="text-align: justify;">SMK Al Husain Keling Memiliki Prasaran dan Sarana Yang Lengkap Guna Menunjang Pembelajaran</p>
        </div>
      </div>
</div>

@include('layouts.js')


<script>
    $(function(){
    
    $(window).bind("resize",function(){
        console.log($(this).width())
        if($(this).width() <500){
        $('.btn').removeClass('btn-lg')
        }
    })
    })

    $(function(){
        $('.card').mouseover(function(){
            $(this).addClass('shadow-lg')
        })

        $('.card').mouseleave(function(){
            $(this).removeClass('shadow-lg')
        })

    })
    $(function(){
        $('#main').fadeIn(20000)
    })
    
    </script>
