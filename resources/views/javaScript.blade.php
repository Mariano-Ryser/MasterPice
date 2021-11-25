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
    background-color: rgb(107, 107, 7);

}


.imgJs{
    border: solid black 15px;
    animation: giro 5s infinite alternate ease-in;
}

@keyframes giro {
   0% {transform:perspective(300px) rotateY(0deg);
      transform:perspective(300px) rotateX(0deg);
      box-shadow: 0px 0px 50px rgb(246, 246, 126);
    }

   25% {transform:perspective(300px) rotateY(90deg);
    transform:perspective(300px) rotateX(-40deg);
    box-shadow: 0px 0px 50px rgb(250, 250, 209);
}

   75% {transform:perspective(300px) rotateY(270deg);
    }

   100% {transform:perspective(300px) rotateY(60deg);
         transform:perspective(400px) rotateX(460deg);
         box-shadow: 0px 0px 100px rgb(245, 245, 1);
        }
    }
  .titulo{
      transition: 3s;
      opacity: 0%;
      font-size: 45px;
      animation: le 2s infinite alternate ease-in-out;
  }
  @keyframes le {
      0%{
        transform: translateX(0px)
      }
      100%{
        transform: translateX(40px)
      }
  }


</style>
<script>

    function ani() {
        var body = document.getElementById("body");
        body.style.transition = "4s";
        body.style.background = "blue";

  document.getElementById('img').className = 'imgJs';
  img.style.transition = '10s';
  img.style.opacity = '100%';


  var p = document.getElementById('p1');

  p.style.transition = '2s';
  p.style.color = 'white';
  p.style.opacity ='100%';
 }

     // // //  TITULO

 function titulo() {
     var titulo = document.getElementById('title');
     titulo.classList.toggle("titulo")
 }

 function botoncito(){
     var body1 = document.getElementById('body');
     var imagenLogo = document.getElementById('img');
     imagenLogo.style.transition = '10s';
     imagenLogo.style.opacity = '0%';
     body1.style.transition = '3s';
     body1.style.background = 'none';
     var fin = document.getElementById('fin');
     fin.style.color = 'black';
     var fin1 = document.getElementById('fin1');
     fin1.style.color = 'black';
 }

</script>

</head>
<x-tuercasComponent/>
<body id="body">
  <x-navbar/>

  <br><br><br><br><br><br><br>
  <div class="container">
      <h1 id="fin">JAVA SCRIPT ?</h1>
  <div>
<p id="p1" class="" style="font-size: 26px; opacity: 0%;">Das Zusammenspiel von Javascript mit Css ist wirklich hervorragend.</p>
</div>
</div>

 <div> <img id="img" class ="" style="height:220px; "src="/images/jss.png" ></div>

  <div><h1 onclick="ani()" style="font-size:45px ;color: rgb(255, 255, 255); cursor: pointer;">Click me</h1></div>

<div class="container" >
 <h1 id="fin1" >Dom manupulation</h1>
 <p>Wenn ein Anwender mit der Webseite interagiert, ist es oft nötig, je nach erfolgter Eingabe unterschiedliche Inhalte zur Verfügung zu stellen.
    So könnte ein Login flexibel werden: Wenn der Benutzer schon registriert ist, kann er nach dem Einloggen einfach weitermachen, für neue Nutzer werden je nach Stand der Eingabe unterschiedliche Inhalte wie ein Anmeldeformular dynamisch nachgeladen.
    Auch bei einem Bildwechsler benötigt man die Zurück und Weiter-Buttons erst in der Großansicht.</p>
</div>
<div class="container">

    <h3 onclick="titulo()" id="title" class="">A continuacion un ejemplo...</h3>

<p>si querememos asignarle una clase al Titulo de arriba, tenemos que hacer lo siguiente.<br>
    " var title = document.getElementByClassName('title'); "
  </p>

  <p id='pp1' style="display: inline-block">P</p>
  <p id='pp2' style="display: inline-block">a</p>
  <p id='pp3' style="display: inline-block">l</p>
  <p id='pp4' style="display: inline-block">a</p>
  <p id='pp5' style="display: inline-block">b</p>
  <p id='pp6' style="display: inline-block">r</p>
  <p id='pp7' style="display: inline-block">a</p>
<br>
  <button onclick="botoncito()"></button>

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

