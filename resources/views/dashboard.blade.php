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
       /* height: 100vw;
       width: 100vw; */
       display: flex;
       justify-content: center;
       /* align-items: center; */
       padding-top: 200px;
       /* background-color: rgb(0, 0, 0); */
        background-image: url(/images/space.jpg);
       /* opacity: 90%; */
       background-repeat: repeat;
       background-size: cover;
       text-align: center;
       /* overflow: hidden; */
       /* animation: espacio 20s infinite alternate ease-in-out; */
       }

       @keyframes espacio {
           0%{
               background-position-x: 0px;
           }
           100%{
               background-position-x: -1100px;
           }
       }

         /* div {
           border: dashed rgba(255, 255, 255, 0.815) 4px;
          } */

       .flecha {
           z-index: 3;
           opacity: 0%;
           position: absolute;
           /* float: right; */
           right: 30px;
           top: 100px;
           background-image: url(/images/flecha1.png);
           background-size: cover;
           background-repeat: no-repeat;
           height: 140px;
           width: 90px;
           /* border: solid white 2px; */
           /* transform: rotateZ(35deg); */
           animation: move 0.2s alternate 10 ease;
           animation-delay: 5s;
       }

       @keyframes move {
           0%{opacity: 100%;
            transform:translate(0px,0px);
           }

           100% {opacity: 100%;
            transform:translate(0px,-20px);
           }
       }

       .luna{

           z-index: -2;
           cursor: pointer;
           position: absolute;
           top:400px;
           right: 100px;
           height: 240px;
           width: 240px;
           border-radius: 50%;
           box-shadow: inset black -100px -100px  100px;
           background-image: url(/images/luna.jpg);
           background-size: cover;
           transform:translate(-20px,-20px);
           animation: luna 7s ease-out 1;
           transition: 2s;

       }
        .luna:hover{

           height: 300px;
           width: 300px;
           box-shadow: inset black -10px -10px  100px;

       }

        @keyframes luna {
           from{
               box-shadow: inset black 0px 0px  100px;
              transform:translate(0px,0px);
              height: 300px;
              width: 300px;


          }
           to{
               box-shadow: inset black -100px -100px  100px;
            transform:translate(-20px,-20px);
            height: 240px;
           width: 240px;
           }
       }

       /* @keyframes luna {
           from{
               box-shadow: inset black -200px -500px  100px;
               transform:translate(550px,550px);
               height: 300px;
               width: 300px;
               filter: blur(0px);
            }
           to{
            box-shadow: inset black 340px 340px  90px;
            transform:translate(-2550px,-2250px);
            height: 1080px;
            width: 1080px;
            filter: blur(1px);}
        } */

       @media only screen and (max-width: 700px) {
  .luna{   opacity: 40%;
           top:150px;
           left: 50px;
           height: 100px;
           width: 100px;
           opacity: 100%;
           box-shadow: inset black 0px 0px  100px;
       }
}
       #marte{
           z-index: -2;
           cursor: pointer;
           position: absolute;
           top:250px;
           left: 200px;
           height: 100px;
           width: 100px;
           border-radius: 50%;
           background-image: url(/images/marte1.jpg);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -30px -30px  50px;
           transform:translate(0px,-30px);
           animation: marte 5s ease-out 1;
           transition: 7s;
       }
       #marte:hover{
           cursor: pointer;
           height: 130px;
           width: 130px;
           box-shadow: inset black -0px -0px  60px;
       }

       @keyframes marte {
           from{box-shadow: inset black 50px 50px  50px;
            transform:translate(0px,0px);}
           to{box-shadow: inset black -30px -30px  50px;
            transform:translate(0px,-30px);}
       }


       .tierra{
           z-index: -2;
           cursor: pointer;
           position: absolute;
           top:400px;
           left: 100px;
           box-shadow: inset black -200px -200px  100px;
           height: 400px;
           width: 400px;
           border-radius: 50%;
           background-image: url(/images/earth2.jpg);
           background-position: center;
           background-size: cover;
           transform:translate(10px,20px) scale(1.0);
           animation: tierra 5s ease-out 1;
           transition: 3s;
           filter: blur(1px);
       }

       .tierra:hover{
        filter: blur(0px);
        box-shadow: inset black -50px -50px  90px;
       }

       @keyframes tierra {
           from{box-shadow: inset black -50px -50px  100px;
            transform:translate(0px,0px);
            filter: blur(0px);
        }

           to{box-shadow: inset black -200px -200px  100px;
            transform:translate(10px,20px) scale(1.0);
            filter: blur(1px);
        }
       }

         @media only screen and (max-width: 700px) {
  .tierra{
           top:670px;
           left: 50px;
           height: 100px;
           width: 100px;
           opacity: 100%;
           box-shadow: inset black 0px 0px 100px;
       }
}

       /* -------- ICONOS -------- */
       .container-fluid{
            /* height: 100vh;
            width: 100vh; */
           /* padding-top: 100px; */
           /* background-color: #ffffff10;
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter:blur(16px); */
        display: none;
        animation: cucu 2s ease-in-out 1;
        animation-delay: 4s;
       }


       .html{
           display: inline-block;
           cursor: pointer;
           position: relative;
           /* border: black solid 5px; */
            /* top:280px;
           left: 500px; */
           height: 170px;
           width: 170px;
           border-radius: 50%;
           background-image: url(/images/html.jpg);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px, rgb(0, 0, 0) 20px 20px 110px 10px;
           transform:translate(0px,-30px);
           animation: html 5s ease-out 1;
           transition: 0.7s;
           filter: blur(0.9px);
       }
       .html:hover {
           cursor: pointer;
           transform: scale(1.0) translate(0px,-25px);
           box-shadow: inset black -0px -0px  60px;
           filter: blur(0px);

       }
          @keyframes html {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 0%;}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 100%;}
       }


       .css{display: inline-block;
           cursor: pointer;
           position: relative;
           /* border: black solid 5px; */
            /* top:280px;
           left: 500px; */
           height: 170px;
           width: 170px;
           border-radius: 50%;
           background-image: url(/images/cssLogo.png);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px, rgb(0, 0, 0) 20px 20px 110px 10px;
           transform:translate(0px,-30px);
           animation: css 5s ease-out 1;
           transition: 0.7s;
           filter: blur(0.9px);
       }
       .css:hover {
           cursor: pointer;
           transform: scale(1.0) translate(0px,-25px);
           box-shadow: inset black -0px -0px  60px;
           filter: blur(0px);

       }
       @keyframes css {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 0%;}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 100%;}
       }

       .youtube{display: inline-block;
           cursor: pointer;
           position: relative;
           /* border: black solid 5px; */
           /* top:480px;
           left: 700px; */
           height: 170px;
           width: 170px;
           border-radius: 50%;
           background-image: url(/images/Youtube2.png);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
           transform:translate(0px,-30px);
           animation: youtube 3s ease-out 1;
           transition: 0.7s;
           filter: blur(0.9px);
       }
       .youtube:hover {
           cursor: pointer;
           transform: scale(1.0) translate(0px,-25px);
           box-shadow: inset black -0px -0px  60px;
           filter: blur(0px);
           filter: blur(0px);

       }

       /* @keyframes youtube {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            transform:translate(0px,0px);}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            transform:translate(0px,-30px);}
       } */

       @keyframes youtube {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 0%;}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 100%;}
       }

       .js{display: inline-block;
           cursor: pointer;
           position: relative;
           /* border: black solid 5px; */
           /* top:280px;
           left: 900px; */
           height: 170px;
           width: 170px;
           border-radius: 50%;
           background-image: url(/images/javaScript2.jpg);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
           transform:translate(0px,-30px);
           animation: js 4s ease-out 1;
           transition: 0.7s;
           filter: blur(0.9px)
       }
       .js:hover {
           cursor: pointer;
           transform: scale(1.0) translate(0px,-25px);
           box-shadow: inset black -0px -0px  60px;
           filter: blur(0px);

       }

       /* @keyframes js {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            transform:translate(0px,0px);}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            transform:translate(0px,-30px);}
       } */
       @keyframes js {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 0%;}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 100%;}
       }

       .google{display: inline-block;
           cursor: pointer;
           position: relative;
           /* border: black solid 5px; */
           /* top:280px;
           left: 1300px; */
           height: 170px;
           width: 170px;
           border-radius: 50%;
           background-image: url(/images/googleLogo1.png);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
           transform:translate(0px,-30px);
           animation: google 4s ease-out 1;
           transition: 0.7s;
           filter: blur(0.9px)
       }
       .google:hover {
           cursor: pointer;
           box-shadow: inset black -0px -0px  60px;
           transform: scale(1.0) translate(0px,-25px);
           filter: blur(0px);
       }
       @keyframes google {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 0%;}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            opacity: 100%;}
       }
       .github{
           display: inline-block;
           cursor: pointer;
           position: relative;
           /* top:480px;
           left: 1100px; */
           height: 170px;
           width: 170px;
           border-radius: 50%;
           background-image: url(/images/github.png);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
           transform:translate(0px,-30px);
           animation: github 2s ease-out 1;
           transition: 0.7s;
           filter: blur(0.9px)
       }
       .github:hover{
           cursor: pointer;
           transform: scale(1.0) translate(0px,-25px);
           box-shadow: inset black -0px -0px  60px;
           filter: blur(0px);
       }

       @keyframes github {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            transform:translate(0px,0px);
            opacity: 0%;}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            transform:translate(0px,-30px);
            opacity: 100%;}
       }

       .ableton{
           display: inline-block;
           cursor: pointer;
           position: relative;
           /* top:480px;
           left: 1100px; */
           height: 170px;
           width: 170px;
           border-radius: 50%;
           background-image: url(/images/ableton.jpg);
           background-position: center;
           background-size: cover;
           box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
           transform:translate(0px,-30px);
           animation: ableton 2s ease-out 1;
           transition: 0.7s;
           filter: blur(0.9px)
       }
       .ableton:hover{
           cursor: pointer;
           transform: scale(1.0) translate(0px,-25px);
           box-shadow: inset black -0px -0px  60px;
           filter: blur(0px);
       }

       @keyframes ableton {
           from{box-shadow: inset black 50px 50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            transform:translate(0px,0px);
            opacity: 0%;}
           to{box-shadow: inset black -50px -50px  50px,rgb(0, 0, 0) 30px 30px 120px 20px;
            transform:translate(0px,-30px);
            opacity: 100%;}
       }

.punto{
    cursor: pointer;
    position: absolute;
    z-index: 3;
    top: 500px;
    height: 30px;
    width: 150px;
    border-radius: 50%;
    background-color: rgb(0, 0, 0);
    box-shadow: 0px 0px 66px rgb(255, 255, 255);
    transition: 4s;
    animation: navee 5s infinite alternate ease-in-out;
}
@keyframes navee {
    0%{ box-shadow: 0px 0px 66px rgb(255, 255, 255);
        transform: translateX(0px)
    }
    25%{box-shadow: -15px -15px 106px rgb(255, 255, 255);

}
    50%{box-shadow: 25px 29px 36px rgb(255, 255, 255);

    }
    75%{box-shadow: 15px 15px 56px rgb(255, 255, 255);

}
    100%{ box-shadow: -30px -30px 606px rgb(255, 255, 255);
        transform: translateX(100px)
    }
}
        /* Aqui hacer animacion de entrada. tapando al sol */
 /* .punto:hover{
    transform: translateX(60px);
    box-shadow: -60px 0px 30px rgb(255, 235, 119);
} */

#SO{
position: absolute;
z-index: 7;
left: 5px;
cursor: pointer;
height: 30px;
width: 30px;
border-radius: 30px;
 border: solid rgb(39, 39, 39) 1px;
transition: 0.4s;
}
#SO:hover{
    box-shadow: white 0px 0px 30px;
}

.OSMR{
    display: flex;
    flex-direction: column;
    background-color: red;
    position: absolute;
    height: 75px;
    width: 75px;
}

</style>

</head>
   {{-- <x-tuercasComponent/>  --}}
<body>

    <x-navbar/>

<div onclick="SO()" id="SO"></div>

  <div class="container-fluid" id="mega" style="z-index: 1">
    <div class="flecha"></div>
    <acronym title="HTML"><a href="/html" target="_blank"><div id='html' class="html"></div></a></acronym>
    <acronym title="Css"><a href="/csss" target="_blank"><div id='css'class="css"></div></a></acronym>
    <acronym title="JavaScript"><a href="/jss" target="_blank"><div id='js'class="js"></div></a></acronym>
    <acronym title="Youtube"><a href="https://www.youtube.com" target="_blank"><div id='youtube'class="youtube"></div></a></acronym>
    <acronym title="Google"><a href="/https://www.google.com/" target="_blank"><div id='google' class="google"></div></a></acronym>
    <acronym title="GitHub"><a href="https://github.com/Mariano-Ryser" target="_blank"><div id='github' class="github"></div></a></acronym>
    <acronym title="Ableton"><a href="https://www.ableton.com/de/" target="_blank"><div id='ableton' class="ableton"></div></a></acronym>

  </div>

<acronym title="Luna"><div class="luna"></div></acronym>
<acronym title="Lebenslauf"><a href="/cv"><div class="tierra"></div></a></acronym>
<acronym title="Marte"><a href=""><div id="marte"></div></a></acronym>
<acronym title="Jupiter"><div class="jupiter"></div></acronym>

<div class="punto" id="pno" onclick="cBlock()"></div>
<script>
function SO(){
      var SO = document.getElementById('SO');
      SO.style.display ='none';
      var html = document.getElementById('html');
      var css = document.getElementById('css');
      var js = document.getElementById('js');
      var youtube = document.getElementById('youtube');
      var google = document.getElementById('google');
      var github = document.getElementById('github');
      var ableton = document.getElementById('ableton');

      html.classList.toggle("OSMR");
      html.style.top = '150px';
      html.style.transition = '0.2s';
      html.style.boxShadow = "inset black 0px 0px 30px,white 0px 0px 0px ";
      css.classList.toggle("OSMR");
      css.style.top = '250px';
      css.style.transition = '0.2s';
      css.style.boxShadow = "inset black 0px 0px 30px,rgb(0, 0, 0) 0px 0px 0px 20px";
      js.classList.toggle("OSMR");
      js.style.top = '350px';
      js.style.transition = '0.2s';
      js.style.boxShadow = "inset black 0px 0px 30px,rgb(0, 0, 0) 0px 0px 0px 20px";
      youtube.classList.toggle("OSMR");
      youtube.style.top = '450px';
      youtube.style.transition = '0.2s';
      youtube.style.boxShadow = "inset black 0px 0px 30px,rgb(0, 0, 0) 0px 0px 0px 20px";
      github.classList.toggle("OSMR");
      github.style.top = '550px';
      github.style.transition = '0.2s';
      github.style.boxShadow = "inset black 0px 0px 30px,rgb(0, 0, 0) 0px 0px 0px 20px";
      google.classList.toggle("OSMR");
      google.style.top = '650px';
      google.style.transition = '0.2s';
      google.style.boxShadow = "inset black 0px 0px 30px,rgb(0, 0, 0) 0px 0px 0px 20px";
      ableton.classList.toggle("OSMR");
      ableton.style.top = '750px';
      ableton.style.transition = '0.2s';
      ableton.style.boxShadow = "inset black 0px 0px 30px,rgb(0, 0, 0) 0px 0px 0px 20px";
}

    function cBlock(){

        var cb = document.getElementById("mega");
        var puntoNegro = document.getElementById("pno");
        var Marte = document.getElementById("marte")
        cb.style.display = "block";


        puntoNegro.style.transform = "translateY(0px)translateX(-500px)";
        puntoNegro.style.transition= "2s";
        //puntoNegro.style.opacity = "0%";
        puntoNegro.style.height = "0px";
        puntoNegro.style.width = "279px";
    }


//Object.assign():
Object.assign(ele.style,custum_style);
</script>




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

