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


{{-- <link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/tuercas.css"> --}}

    <title>RWS</title>

<style>
body{
    background: rgb(163, 175, 163);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.ventana{
    background-color: white;
    height: 400px;
width: 500px;
border-radius: 10px;
border: 1px solid black;
box-shadow: gray 0px 0px 40px;
overflow: auto;
  resize: both;
  min-width: 250px;
  min-height: 150px;
  transition: 0.2s;

}
.top{
    cursor: pointer;
    border-radius: 8px 8px 0px 0px;
    background-color: rgb(187, 187, 187);
    width: 100%;
    height: 40px;
    border-bottom: 1px solid black;
    display: flex;
    justify-content: end;

}
.boton{
    font-size: 3px;
    border-radius: 30%;
    width: 30px;
    height: 30px;
    border: none;
    margin: 5px;
    background-color: gray;

}
.boton:hover{
    background-color: rgb(221, 221, 221);
}

.guardado{ 
    z-index: 20;
    background-color: white;
    height: 100%;
    width: 100%;
    border-radius: 10px;
    border: 1px solid black;
   box-shadow: gray 0px 0px 40px;
   overflow: auto;
    resize: both;
    min-width: 250px;
   min-height: 150px;
}
.cerra{
    transition: 1s;
    /* position: absolute; 
    top: 0px;
    left: 0px; */
    opacity: 0%;
    height: 0%;
    width: 0%;
}

.min{
    height: 0px;
    width: 0px;
    position: absolute;
    bottom: 0px;
    left: 0px;
}


</style>
<script>

function closse() {
    var clo = document.getElementById('window');
    clo.classList.toggle("cerra");

  }

  function grosse(){
   var win = document.getElementById('window');
     win.classList.toggle("guardado");
  }

  

  function min() {
    var min = document.getElementById('window');
    min.classList.toggle("min");
  }
</script>

</head>
<body>
    <x-tuercasComponent/>
    <x-navbar/>

<div id= "window" class="ventana">
    <div class="top">
        <button onclick="min()" class="boton">_</button>
        <button onclick="grosse()" class="boton">□</button>
        <button onclick="closse()" class="boton">X</button></div>
</div>



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

