<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('images/logo.png')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     {{-- font --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

{{-- <link rel="stylesheet" href="/css/app.css"> --}}
<link rel="stylesheet" href="/css/tuercas.css">

    <title>BRAIN</title>

<style>
   body{
       text-align: start;
       display: flex;
       padding-top: 130px;
       background-color: rgb(0, 0, 0);
        /* background-image: url(/images/space5.jpg);  */
       /* opacity: 90%; */
       background-repeat: repeat;
       background-size: cover;

       /* overflow: hidden; */
       }
       /* div{border: dashed rgba(138, 129, 13, 0.815) 4px;
   margin: 5px;} */

   .planet{
       opacity: 30%
   }

          #foto{
            cursor: pointer;
            display: inline-block;
            height: 250px;
            width: 250px;
            border-radius: 50%;
            background-image: url(/images/MR2.jpg);
            /* background-image: url(/images/alien.jpeg); */
            /* background-color: red; */
            box-shadow: white 0px 0px 60px;
            background-size: cover;
            background-position: center;
            animation: aparicion alternate 1s ease-in-out 1;
            }

              @keyframes aparicion{
                  from{opacity:0%}
                  to{opacity:100%}
              }

              .mercurio{
           z-index: -1;
           cursor: pointer;
           position: absolute;
           top:150px;
           left: 200px;
           height: 200px;
           width: 200px;
           border-radius: 50%;
           background-image: url(/images/mercurio2.jpg);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px;
           transition: 1s;
           filter: blur(1px);
           animation: aparicion1 alternate 2s ease-in-out 1;
              }

              @keyframes aparicion1{
                  from{opacity:0%}
                  to{opacity:100%}
              }
       .jupiter{
           z-index: -2;
           cursor: pointer;
           position: absolute;
           top:190px;
           right:200px;
           height: 250px;
           width: 250px;
           border-radius: 50%;
           background-image: url(/images/jupiter.jpg);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px;
           filter: blur(2px);
           animation: aparicion2 alternate 2.7s ease-in-out 1;
              }

              @keyframes aparicion2{
                  from{opacity:0%}
                  to{opacity:100%}
              }
       .planetazo{
           z-index: -2;
           cursor: pointer;
           position: absolute;
           top:550px;
           left: -50px;
           height: 350px;
           width: 350px;
           border-radius: 50%;
           background-image: url(/images/planetazo.jpg);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px;
           filter: blur(0.3px);
           animation: aparicion3 alternate 4s ease-in-out 1;
              }

              @keyframes aparicion3{
                  from{opacity:0%}
                  to{opacity:100%}
              }
</style>

<script>

</script>

</head>
<x-tuercasComponent/>
<body>
<x-navbar/>

<div class="containter style">
    <a href="/dashboard"><div id="foto" ></div></a>
    <p style="color:rgb(255, 255, 255);font-family: 'Balsamiq Sans', cursive; "  >Schon immer wollte ich wissen, wie eine Website programmiert wird und als ich die
        Möglichkeit erhalten bei Opportunity dabei zu sein, habe ich meine Chance ergriffen. Mit
        meinem Tatendrang will ich Ihr Team künftig unterstützen!
        Wenn ich programmiere ist kein Tag wie der Andere – ich entdecke jeden täglich etwas
        Neues und will immer mehr erreichen. Besonders fasziniert bin ich davon, wie viel einige
        Zeilen Code ausmachen können. Als leidenschaftlicher Musiker entdecke ich viel Kreatives
        in der Entwicklung von Websites. Es ist mir ein grosses Anliegen ansprechende Designs und
        passende Lösungen umzusetzen. Mein Ziel ist es, in ein paar Jahren ein Fullstack-Developer
        zu werden. Mich begeistert die Vorstellung einmal eine komplette App programmieren zu
        können, weshalb ich ehrgeizig weiterlerne.
        In die Materie tauche ich mit viel Engagement ein und mein Umfeld gibt mir immer wieder
        das Feedback, dass ich sehr schnell die geeignete Lösung recherchieren kann. Ausserdem
        bin ich ein positiver Mensch und ich wachse an Herausforderungen. Mit mir gewinnen Sie
        eine Person die gerne im Team arbeitet und auch hilfsbereit ist. Meine Muttersprache ist
        Spanisch und auf Deutsch wie auf Englisch kann ich mich unterhalten.
        Bei einem persönlichen Gespräch gebe ich Ihnen mehr über mich bekannt und ich zeige
        Ihnen gerne einige meiner Projekte.</p>
</div>



<div class="container planet">
    <div class="planetazo"></div>
    <div class="mercurio"></div>
    <div class="jupiter"></div>
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
