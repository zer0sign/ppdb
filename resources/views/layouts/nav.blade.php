<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran | SMK AL HUSAIN KELING</title>
    <link rel="icon" href="{{URL::asset('/img/assets/logo.png')}}">
</head>
<body>
    
<style>
#nav{
    margin-left: -10px;
}
.navbar{
    background-color: white !important;
}

@media screen and (max-width: 500px){
#nav{
    width: 40;
    height: 40;
}

.name{
    font-size: 0.8em;
}
}

</style>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('index')}}">
    <div class="logoname" style="display:flex; margin-left: 5%">
    <div class="logo">
    <img id="nav" src="{{URL::asset('/img/assets/logo.png')}}" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
    </div>
    <div class="name" style="margin-left: 3%; margin-top: -1%">
    Pendaftaran Siswa Baru 2021/2022
    <br>
    <b> SMK AL HUSAIN KELING</b>
    </div>
</div>
    </a>
</nav>

