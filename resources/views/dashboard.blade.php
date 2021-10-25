<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('images/logo.png')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Font Google --}}

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    {{-- Font Section --}}


<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/tuercas.css">

    <title>BRAIN</title>

<style>
   body{
       background-color: rgb(47, 47, 47);
       text-align: center;
       }


.circle{
    z-index: -3;
    display: inline-block;
    height: 130px;
    width: 130px;
    border-radius: 50%;
    border-left: 4px solid white;
    /* border-top: 10px solid white; */
    /* background-color: black; */
    animation: rotation infinite 0.8s linear;
}

@keyframes rotation {
    0%{ transform: rotate(0deg);
    }
    100%{ transform: rotate(360deg);
    }
}
</style>

</head>
<x-tuercasComponent/>
<body>

     <x-navbar/>   {{-- NAVAR --}}

<br><br><br><br> <br><br><br><br><br><br><br><br>

<div class="circle">   {{-- Loading --}}
</div>

<br><br>
<h4 style="color: white">Loading...</h4>

<br>

<br><br><br><br> <br><br><br><br><br><br><br><br>

<div class="container"><h1>A Donde quieres llegar? mas lejos?</h1>
    <h3>Pues primero tendras que aprender un poco</h3>
    <p>Arriba a la derecha tienes un boton que te dirije a ciertos lugares
        podras chusmear sin <a href="/wikiCompromiso">compromiso</a>, puedes dejar tus comentarios si es que quieres, todo aporta,
        Espero que disfrutes de un buen viaje y puedas encontrar tu <a href="/dashboard"> <b>camino</b></a> .
    </p>
</div>
<div class="container">
    <h1>Esta bien hecho</h1>
    <p>Aqui podre escribir lo que se me antoje, porque es mi <a href="/wikiEspacio"> <b>Espacio</b> </a></p>
</div>
<br><br><br>

<div class="container">
  <a href="/"><img src="/images/brainWelt.png" alt=""></a> <br> <br>
 <a href="/wikipediaCerebro"></a> <h4 style="color: cornsilk" >CEREBRO</h4>
</div>

<div class="container">
    <h1>Otro Container mas para mi <a href="/WikiDasboard"></a><b>Dasboard?</b></h1>
</div>


     {{-- <footer style="background-color:rgb(0, 0, 0);
     position:fixed;
      z-index:-1;
      bottom:0px;
      width:100%;
      height:200px;
      border-top: solid 1px rgb(0, 0, 0)">dasda</footer> --}}

    {{-- <x-app-layout>
        <x-slot name="header">
             <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Pepito') }}
            </h2>
        </x-slot>
    </x-app-layout> --}}


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
</html>

