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
</style>
<script>

    function ani() {
        var body = document.getElementById("body");
        body.style.transition = "4s";
        body.style.background = "blue";

  document.getElementById('img').className = 'imgJs';
  img.style.transition = '10s';

  var p = document.getElementById('p1');

  p.style.transition = '2s';
  p.style.color = 'white';
  p.style.opacity ='100%';


 }
</script>

</head>
<x-tuercasComponent/>
<body id="body">
  <x-navbar/>

  <br><br><br><br><br><br><br>
  <div class="container">
      <h1>JAVA SCRIPT ?</h1>
  <div>
<p id="p1" class="" style="font-size: 26px; opacity: 0%;">Das Zusammenspiel von Javascript mit Css ist wirklich hervorragend.</p>
</div>
</div>

 <div> <img id="img" class ="" style="height:220px; "src="/images/jss.png" ></div>

  <div><h1 onclick="ani()" style="font-size:45px ;color: rgb(255, 255, 255); cursor: pointer;">Click me</h1></div>


<div class="container">

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

