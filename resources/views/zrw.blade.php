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
    background-color: rgb(60, 131, 74);
}
.container{
    border-radius: 13px;
    border:solid black 2px;
    margin-top: 150px;
    background: linear-gradient(90deg, rgb(36, 30, 30), rgb(139, 139, 194));
    height: 310px;
    overflow: hidden;
    box-shadow: black 0px 0px 50px, inset 0px 0px 50px;
}


.container div{
    border-radius: 4px;
    margin: 10px;
    height: 50px;
    width: 50px;
    border: solid black 1px;
    display: inline-block;
    transition: 0.2s;
}

.container div:hover{
    box-shadow: rgb(0, 0, 0) 0px 0px 10px;
    border-radius: 20px;
    background-color: blue;
    transform: rotateZ(45deg);
}


</style>
<script>
function un(){
    // var block = document.getElementById("box");
    var elements = document.getElementsByClassName('boxx')[0];

    // block.style.border="red 1px solid";
    elements.style.border="red 5px solid";
}
</script>

</head>
<body>
    <x-tuercasComponent/>
    <x-navbar/>
 <div class="container">
  <div class='boxx' id="box" onclick="un()"></div>
  <div class='boxx' id="box"></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
 </div>


 <div class="container"
 style="display: flex;
 justify-content: center;
 align-items: center;">
     <div class="10">
         <div class="9">
             <div class="8">
                 <div class="7">
                     <div class="6">
                         <div class="5">
                             <div class="4">
                                 <div class="3">
                                     <div class="2">
                                         <div class="1">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
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

