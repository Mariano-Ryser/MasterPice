<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js.js"></script>
    <link rel="stylesheet" href="Style.css">

        <!-- icon -->
    <link rel="icon" href="{{ asset('images/logo.png')}}">

       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

       {{-- Font Google --}}

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
       {{-- Font Section --}}

   <link rel="stylesheet" href="/css/tuercas.css">
     <link rel="stylesheet" href="/css/app.css">
    <title>text</title>

    <style>
         body{
       background-color: rgb(14, 19, 20);
       text-align: center;
       }

    .contenedor{
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .caja{
        position: relative;
        /* background-color: rgb(9, 39, 8); */
        height: 200px;
        width: 200px;
        transform-style: preserve-3d;
        transform-origin: 100px 100px 0px;
        animation: girar 15s infinite alternate;
    }
    .cara {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        height: 190px;
        width: 190px;
        border: black solid 5px;
        font-size: 60px;
        /* backface-visibility: hidden; */

          }

    .cara1{
        /* box-shadow: 0px 0px 60px rgb(255, 255, 255); */
        background-color: rgb(149, 12, 12);
        transform: translateZ(120px); /* 90 */

    }
    .cara2{
        /* box-shadow: 0px 0px 60px rgb(255, 255, 255); */
        background-color: rgb(23, 99, 149);
        transform: rotateZ(90deg) translateZ(-130px) /* -100 */


    }
    .cara3{
        /* box-shadow: 0px 0px 60px rgb(255, 255, 255); */
        background-color: rgb(151, 149, 22);
        transform: rotateY(90deg) rotateX(90deg) translateZ(130px); /* 100 */

    }
    .cara4{
        /* box-shadow: 0px 0px 60px rgb(255, 255, 255); */
        background-color: rgb(100, 45, 100);
        transform:  rotateY(-90deg) rotateX(180deg) translateZ(130px); /* 100 */

    }
    .cara5{
        /* box-shadow:  0px 0px 60px rgb(255, 255, 255); */
        background-color: rgb(32, 102, 42);
        transform: rotateY(-90deg) rotateZ(90deg) translateZ(130px); /* 100 */
    }
    .cara6{
        /* box-shadow:  0px 0px 60px rgb(255, 255, 255); */
        background-color: rgb(124, 124, 124);
        transform: rotateX(-90deg) translateZ(130px) /* 100 */

    }

    @keyframes girar{
        0% {
            transform: rotateX(190deg) rotateY(90deg) rotateZ(90deg);
        }
        50% {
            transform: translateX(200px)  rotateX(400deg) rotateY(460deg) rotateZ(360deg);
        }
        100% {
            transform: translateX(250px) rotateX(460deg) rotateY(260deg) rotateZ(540deg);
        }
    }
    </style>
</head>

<body>
    <x-tuercasComponent/>
  <x-navbar/>
  <br><br><br><br><br><br>

<div class="contenedor">
    <div class="caja">
        <div class="cara cara1">1</div>
        <div class="cara cara2">2</div>
        <div class="cara cara3">3</div>
        <div class="cara cara4">4</div>
        <div class="cara cara5">5</div>
        <div class="cara cara6">6</div>
    </div>
</div>







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



