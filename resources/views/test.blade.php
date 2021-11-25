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
        body {
            opacity: 100%;
              background-color: rgb(0, 0, 0);
            /* background: linear-gradient(
               to bottom right,
               rgb(29, 27, 27) 0%,
               #494419 50%,
               #ffd30e 100%
           );
           /* overflow: hidden; */
             }


  div.espacio3D {
  width: 300px;
  height: 300px;
  margin: 3em auto 0 auto;
   border: 3px dashed rgba(255, 255, 255, 0.5);
  position: relative;
  perspective-origin: center -50%;
  perspective: 900px;
  transform: scale(0.55);

}

div.cubo3D {
  width: 100%;
  height: 100%;
  background-color: rgba(0,255,0,0.5);
  position: absolute;
  transform-style: preserve-3d;
  transform: translateZ(350px);
  animation: gira 15s infinite ease-in-out;

}

div.base {
  position: absolute;
  width: 150px;
  height: 150px;
  background-color: rgba(0,0,0,0.15);
  transform: translateX(75px)
   translateY(75px)
    rotateX(90deg)
     translateZ(-200px);
  box-shadow: 0 0 50px 100px rgba(158, 85, 85, 0.15);
}
aside.cara {
  position: absolute;
  width: 298px;
  height: 298px;
  background-color: rgba(0, 0, 0, 0.25);
  border: 1px solid rgba(255,150,0,0.75);
  color: rgba(255, 255, 255);
  font-size: 3em;
  /* text-align: center; */
  line-height: 298px;
  box-shadow: 0px 0px 50px rgba(255, 255, 255, 0.75);
}

aside.cara1 { /* Frente */
  transform: translateZ(190px);
}

aside.cara2 { /* Atrás */
  transform: rotateY(180deg) translateZ(190px);
}

aside.cara3 { /* Izquierda */
  transform: rotateY(-90deg) translateZ(150px);
}

aside.cara4 { /* derecha */
  transform: rotateY(90deg) translateZ(150px);
}

aside.cara5 { /* abajo */
  transform: rotateX(-90deg) translateZ(150px);
}

aside.cara6 { /* arriba */
  transform: rotateX(90deg) translateZ(150px);
}

@keyframes gira {
  0% {
    transform:
    translateX(-0px) translateZ(-250px)
    rotate(0deg);

  }

   25% {
      transform: translateX(-250px)
      rotateX(178deg)
    }

  50% {
    transform:
      translateZ(250px)
      rotateZ(233deg)
    }


  75% {
      transform: translateX(250px)
      rotateY(321deg)
    }

  100% {
    transform:
      translateZ(-250px)
      rotate(0deg);
    }

}
/* ////////////CARTA //////////////*/
       .container {
           width: 400px;
           height: 200px;
           animation: gira 15s linear infinite;
       }

       .card{
           display: flex;
           text-align: center;
           justify-content: center;
           color: white;
           width: 100%;
           height: 100%;
           border-radius: 20px;
           box-shadow: 0px 0px 90px black;
           background: linear-gradient(
               to bottom right,
               rgb(29, 27, 27) 0%,
               #494419 50%,
               #ffd30e 100%
           );
         transform: translateZ(300px)
       }

     .blockk {
         border: dashed rgb(255, 255, 255) 3px;
         display: inline-block;
         position: relative;
        height: 300px;
        width: 400px;
        border-radius: 20px;
        background-color: #ffffff10;
        backdrop-filter: blur(1px);
       -webkit-backdrop-filter:blur(1px);
       animation: syb 5s infinite alternate linear;
     }

     @keyframes syb {
         0%{ top:10px;
            backdrop-filter: blur(1px);
       -webkit-backdrop-filter:blur(1px);

         }
         50%{
            top: -400px;
            height: 200px;
             /* backdrop-filter: blur(100px);
       -webkit-backdrop-filter:blur(100px); */
         }
         70%{top: -300px;
              backdrop-filter: blur(20px);
       -webkit-backdrop-filter:blur(20px);

         }

         100%{
            top: -400px;
            
            height: 600px;
        width: 660px;
             backdrop-filter: blur(0px);
       -webkit-backdrop-filter:blur(0px);

         }
     }
    </style>
</head>

<body>
       <x-tuercasComponent/>
{{-- <x-navbar/> --}}
  <br><br><br><br><br>

                   {{--//////// CREDIT CARD! /////////////--}}

 <div class="container">
    <div class="card">
    </div>
</div>

<br><br>         {{--//////// CUBE /////////////--}}

 <a href="/"><div class="espacio3D" >
    <div class="cubo3D">

      <aside class="cara cara1">1</aside>
      <aside class="cara cara2">2</aside>
      <aside class="cara cara3">3</aside>
      <aside class="cara cara4">4</aside>
      <aside class="cara cara5">5 </aside>
      <aside class="cara cara6">6 </aside>
    </div>
  </div>
</a>



                {{--//////// CRISTAL! /////////////--}}

      <div class="blockk" >

   </div>

                {{--//////// CUBE /////////////--}}




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



