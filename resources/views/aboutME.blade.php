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

    <title>AboutME</title>

<style>
.carEs{

   background-image: url(images/flagEsp.png);
   background-repeat: no-repeat;
   background-size: contain;
   justify-content: center;
}
.carDe{
   background-image: url(images/flagDe.jpg);
   background-repeat: no-repeat;
   background-size: contain;
   justify-content: center;
}

.carMi{
   background-image: url(images/flagMierda.png);
   background-repeat: no-repeat;
   background-size: contain;
   justify-content: center;
}

</style>

</head>
<x-tuercasComponent/>
<body >
  <x-navbar/>
<br><br><br><br><br><br>
                              {{-- Contenido --}}
                              <div class="container ">
                                <div class="row justify-content-around">

                                   <h1 class="TitulosCartas">PROGRAMMIERUNG</h1>        {{-- TITULO --}}

                                   <div class="carta1 card text-white bg-secondary mb-3" style="max-width: 10rem; max-height: 10rem;">
                                       <a href="/html">
                                       <div class=" card-header"><h2>HTML</h2></div>
                                       <div class=" card-body">
                                           <h5 class=" card-title"></h5>
                                           <p class="card-text"></p>
                                         </div>
                                       </a>
                                   </div>

                                     <div class="card text-white bg-primary mb-3" style="max-width: 10rem; max-height: 10rem;">
                                       <a href="/csss">
                                           <div class="card-header"><h2>CSS</h2></div>
                                           <div class="card-body">
                                             <h5 class="card-title"></h5>
                                             <p class="card-text"></p>
                                           </div>
                                       </a>

                                     </div>

                                     <div class="card text-white bg-warning  mb-3" style="max-width: 10rem; max-height: 10rem;">
                                       <a href="/jss">
                                       <div class="card-header"><H2>JS</H2></div>
                                       <div class="card-body">
                                         <h5 class="card-title"></h5>
                                         <p class="card-text"></p>
                                       </div>
                                     </a>
                                     </div>

                                     <h1 class="TitulosCartas"> INFORMACION</h1>              {{-- TITULO--}}
                                     <div class="card bg-light mb-3" style="max-width: 18rem;">
                                       <div class="card-header"><h1 style="color: black" >DataInfoPC</h1> </div>
                                       <div class="card-body">
                                         <h5 class="card-title">Aqui usted encontrara un sin fin de Informacion inedita.</h5>
                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       </div>
                                     </div>
                                     <div class="card text-white bg-primary mb-3" style="z-index:-1; max-width: 18rem;">
                                       <div class="card-header">Header</div>
                                       <div class="card-body">
                                         <h5 class="card-title">Primary card title</h5>
                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       </div>
                                     </div>
                                     <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                       <div class="card-header">Header</div>
                                       <div class="card-body">
                                         <h5 class="card-title">Secondary card title</h5>
                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       </div>
                                     </div>
                                     <h1 class="TitulosCartas">IDEAS</h1>              {{-- TITULO--}}
                                     <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                       <div class="card-header">Header</div>
                                       <div class="card-body">
                                         <h5 class="card-title">Success card title</h5>
                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       </div>
                                     </div>

                                     <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                       <div class="card-header">Ideas Extrovertidas</div>
                                       <div class="card-body">
                                         <h5 class="card-title">Danger card title</h5>
                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       </div>
                                     </div>

                                   <a href="/mecano"> <div class="card text-white bg-warning mb-3" style=" max-width: 18rem;">
                                       <div class="card-header">Mecanografia</div>
                                       <div class="card-body">
                                         <h5 class="card-title">Prueba Escribir sin pausas.</h5>
                                         <p class="card-text">El contenido de esta Carta no tiene sentido alguno, solo es pura pendejada y ejercicio de flexibilidad sobre el teclado</p>
                                       </div>
                                     </div>
                                    </a>

                                     <h1 class="TitulosCartas">NOTICIAS</h1>              {{-- TITULO--}}
                                     <a href="">
                                         <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                       <div class="card-header">Header</div>
                                       <div class="card-body">
                                         <h5 class="card-title">Info card title</h5>
                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       </div>
                                     </div>
                                    </a>
                                    <a href="">
                                     <div class="card bg-light mb-3" style=" max-width: 18rem;">
                                       <div class="card-header">Header</div>
                                       <div class="card-body">
                                         <h5 class="card-title">Light card title</h5>
                                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       </div>
                                     </div>
                                    </a>                                  {{-- Prueba--}}
                                        <h1 class="TitulosCartas">NewBox</h1>              {{-- TITULO--}}
                                     <div class="card text-white bg-success mb-3" style="width: 10rem; height:10rem">

                                     </div>

                                     <div class="card text-white bg-danger mb-3" style="width: 10rem; height:10rem">

                                       </div>

                                     <div class="card text-white bg-warning mb-3" style="width: 10rem; height:10rem">

                                       </div>
                                       <h1 class="TitulosCartas">SPRACHEN</h1>              {{-- TITULO--}}

                                       <div class="carEs card text-white  mb-3"style="max-width: 10rem; max-height: 10rem;">
                                         <a href="/es">
                                              <div class=""><H2></H2></div>
                                             <div class="card-body">
                                               <h5 class="card-title"></h5>
                                               <p class="card-text">
                                             </p>
                                         </div>
                                         </a>
                                       </div>

                                       <div class="carDe card text-white mb-3" style="max-width: 10rem; max-height: 10rem;">
                                         <a href="/de">
                                          <div class=""><H2></H2></div>
                                         <div class="card-body">
                                           <h5 class="card-title"></h5>
                                           <p class="card-text">
                                           </p>
                                         </div>
                                        </a>
                                       </div>

                                       <div class="carMi card text-white bg-info mb-3" style="max-width: 10rem; max-height: 10rem;">
                                         <a href="en">
                                         <div class=""><h2></h2></div>
                                         <div class="card-body">
                                           <h5 class="card-title"></h5>
                                           <p class="card-text"></p>
                                         </div>
                                         </a>
                                       </div>

                                </div>
                            </div>
                                                            {{-- Contenido 2 --}}

                        









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

