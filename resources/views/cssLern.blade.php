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

    <title>CSS</title>


<style>
    body{background-color: rgb(12, 12, 119)}
.boxAni {
    position: absolute;
    opacity: 0%;
    background-color: rgb(179, 184, 179);
    height: 200px;
    width: 200px;
    /* border: 2px solid black; */
    display: inline-block;
    animation: rotation 3s linear alternate;
    box-shadow: white 0px 0px 50px;
    top: 220px;
    left: 700px;
}

@keyframes rotation {
    0%{ transform: rotate(0deg);
        opacity: 0%;
    }
    50%{ transform: rotate(-200deg);
         top: 220px;
         background-color: blue;
         border-radius: 50%;
         opacity: 100%;
         box-shadow: white 0px 0px 40px;
         border: solid rgb(251, 251, 251) 10px;
         transform: translateX(-400px)
    }

    75%{ transform: rotate(285deg);
         top: 220px;
         height: 400px;
         width: 400px;
         box-shadow: white 0px 0px 90px;
         background-color: rgb(0, 0, 0);
         border: solid rgb(251, 251, 251) 40px;
         border-radius: 0%;
         opacity: 60%;
    }

    100%{ transform: rotate(585deg);
         top: 220px;
         height: 0px;
          width: 0px;
          box-shadow: white 0px 0px 140px;
         background-color: rgb(16, 52, 170);
         border: solid rgb(251, 251, 251) 0px;
         border-radius: 50%;
         opacity: 0%;
    }
}


.looper {
        height: 300px;
        width: 300px;
        background-color: rgb(177, 176, 175) ;
         display: inline-block;
        animation: perspect 4s infinite linear alternate;
        box-shadow: 0px 0px 40px white;
    }

 @keyframes perspect {
   0% {transform:perspective(300px) rotateY(0deg);
      transform:perspective(300px) rotateX(0deg);
    }

   25% {transform:perspective(300px) rotateY(90deg);
    transform:perspective(300px) rotateX(130deg);
}

   50% {transform:perspective(300px) rotateY(220deg);
    transform:perspective(300px) rotateX(220deg);
}

   75% {transform:perspective(300px) rotateY(270deg);
    }

   100% {transform:perspective(300px) rotateY(360deg);
         transform:perspective(300px) rotateX(60deg);
        }
    }

    .mq{    display: inline-block
            /* box-shadow: rgb(129, 129, 129) 0px 3px 68px ; */
            height: 200px; width: 200px;
            background-color: black;
            animation: test 6s infinite alternate ease-in-out;
            color: rgb(0, 0, 0);
             position: absolute;
        }
        @keyframes test {
            0%{back
                height: 700px;
            width: 0px;
        opacity: 80%;}

        50%{
            background-color: rgb(251, 251, 14);
        }
        60%{
            height: 10px;
        }
        70% {
            background: red;
             height: 300px;
        }
         90%{
        opacity: 100%;
        height: 372px;
        width: 860px;
        border-radius: 50px;
        box-shadow: rgb(0, 4, 255) 0px 40px 120px;
        background-color: rgb(255, 255, 255);
        transform: rotateZ(90deg);
    }
     100%{
        opacity: 100%;
        height: 472px;
        width: 460px;
        border-radius: 90px;
        box-shadow: rgb(12, 145, 185) 0px 40px 120px;
        background-color: rgb(112, 112, 112);
        transform: rotateZ(90deg);
    }
     }
</style>
</head>

<body>

    <x-tuercasComponent/>
  <x-navbar/>

  <br><br><br><br><br><br><br>
<div class="container">
    <h1>Cascading Style Sheets</h1>
        <p> <a href="https://de.wikipedia.org/wiki/Cascading_Style_Sheets">Cascading Style Sheets</a>  (gestufte Gestaltungsbögen; kurz: CSS) ist eine Stylesheet-Sprache
          für elektronische Dokumente und zusammen mit HTML und <a href="/jss"><b>JavaScript</b></a>
          eine der Kernsprachen
          des World Wide Webs. Sie ist ein sogenannter living standard ‚lebendiger Standard‘ und wird
          vom World Wide Web Consortium beständig weiterentwickelt. Mit CSS werden Gestaltungsanweisungen
          erstellt, die vor allem zusammen mit den Auszeichnungssprachen HTML und XML (zum Beispiel bei SVG) eingesetzt werden.
        </p>
        <img style="height:250px " src="images/csss.png" alt=""> <br> <br> <br>

        <hr style="color: white; border:white 5px solid">

        <h4 style="color: white">Para poder darle estilo a nuestra pagina primero tendremos que saber que son los <a href="https://www.w3schools.com/cssref/css_selectors.asp"> <h3> "Selectores"</h3></a>
            En CSS, los selectores son patrones que se utilizan para seleccionar los elementos que desea aplicar estilo. </h4>
          <p>A contunuacion le daremos un ejemplo de los selectores mas basicos</p>

        <textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="30" rows="5">.box1{
            <p class="selectorClass" ></p>
            <p id="selectorID"></p>
            </textarea>

            <h1>En nuestra hoja de Estilo los selectores de class son llamados con 1 punto al principio porejemplo</h1><br>
            <textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="30" rows="10">
    .selectorClase {
                        color:"red";
                        font-size: "25px";
                        }

    #selectorId {
                        color:"red";
                        font-size: "25px";
                        }
                </textarea>

<br><br> <hr style="color: white; border:white 5px solid">
<br>
<h2 style="color: rgb(255, 255, 255)">Anima-Cion!</h2>
<h1 style="color: rgb(107, 107, 107)">Why not?</h1>

<div class="boxAni ">
</div>
<p class="">Sie sind einfach zu nutzen für simple Animationen; man kann sie ohne Javascript-Kenntnisse erstellen.
    Die Animationen laufen performant, sogar unter mäßiger Systemauslastung. Im Gegensatz dazu fallen selbst simple Javascript-Animationen durch schlechte Performance auf. Die Engine kann einzelne Frames überspringen und kennt weitere Techniken, um die Ausführung so sauber wie möglich zu gestalten.
    Da der Browser die Animation kontrolliert, kann er selbstständig die Performance optimieren, zum Beispiel durch das Drosseln der Freqenz von Animationen in aktuell nicht sichtbaren Browser-Tabs.</h4>

    <h3>
    Sie sind einfach zu nutzen für simple Animationen; man kann sie ohne Javascript-Kenntnisse erstellen.
Die Animationen laufen performant, sogar unter mäßiger Systemauslastung. Im Gegensatz dazu fallen selbst simple Javascript-Animationen durch schlechte Performance auf. Die Engine kann einzelne Frames überspringen und kennt weitere Techniken, um die Ausführung so sauber wie möglich zu gestalten.
Da der Browser die Animation kontrolliert, kann er selbstständig die Performance optimieren, zum Beispiel durch das Drosseln der Freqenz von Animationen in aktuell nicht sichtbaren Browser-Tabs.
</h3>

<h4 style="color: rgb(179, 179, 179)">Konfigurieren der Animation
    Um eine CSS-Animation zu erstellen, fügt man dem zu animierenden Element die animation-Eigenschaft oder seine Sub-Eigenschaften
     zu. So lassen sich Timing und Dauer der Animation sowie weitere Details des Animationsablaufes bestimmen.
      Man legt damit nicht die eigentliche Darstellung der Animation fest, die mittels <a style="font-size: 32px" href="https://developer.mozilla.org/de/docs/Web/CSS/@keyframes">@keyframes</a>  definiert wird.
       Siehe Definieren der Animationssequenz mittels Keyframes weiter unten.

    Die Sub-Eigenschaften der animation-Eigenschaft sind:</h4>

    <p>
        animation-name
Spezifiziert den Namen der @keyframes-at-Regel, welche die einzelnen Keyframes beschreibt.
animation-duration
Legt die Dauer der Animation für einen kompletten Durchgang fest.
animation-timing-function
Konfiguriert das Timing der Animation. Konkret werden die Übergänge zwischen den einzelnen Keyframes mittels Beschleunigungskurven festgelegt.
animation-delay
Setzt den Abstand zwischen dem Zeitpunkt, an dem die Animation vollständig geladen ist und dem Start der Animationssequenz.
animation-iteration-count
Konfiguriert wie oft die Animation wiederholt wird; mittels infinite wird die Animation unendlich wiederholt.
animation-direction
Legt fest, ob die Animation nach jedem Durchgang die Abspielrichtung wechselt oder zum Startpunkt zurückspringt und sich wiederholt.
animation-fill-mode
Legt fest, welche Styles vor und nach dem Ausführen der Animation auf das animierte Element angewendet werden.
animation-play-state
Ermöglicht das Pausieren und Wiederaufnehmen einer Animationssequenz.
    </p>

    <h1>animation-name</h1>
    <p>Spezifiziert den Namen der @keyframes-at-Regel, welche die einzelnen Keyframes beschreibt.</p>

    <textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="30" rows="10">.box1{
        animation-name: nameExample;
        }
        @keyframes nameExample {
            from{ }
            to{ }
        }
        </textarea>

    <h1>animation-duration</h1>
    <p>Legt die Dauer der Animation für einen kompletten Durchgang fest.</p>

    <textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="30" rows="10">.box1{
        animation-name: nameExample
        animation-duration: 2s;
        }
        </textarea>

    <h1>animation-timing-function</h1>
    <p>Konfiguriert das Timing der Animation. Konkret werden die Übergänge zwischen den einzelnen Keyframes mittels Beschleunigungskurven festgelegt.</p>

    <h1>animation-delay</h1>
    <p>Setzt den Abstand zwischen dem Zeitpunkt, an dem die Animation vollständig geladen ist und dem Start der Animationssequenz.</p>

    <h1>animation-iteration-count</h1>
    <p>Konfiguriert wie oft die Animation wiederholt wird; mittels infinite wird die Animation unendlich wiederholt.</p>

    <h1>animation-direction</h1>
    <p>Legt fest, ob die Animation nach jedem Durchgang die Abspielrichtung wechselt oder zum Startpunkt zurückspringt und sich wiederholt. </p>

    <h1>animation-fill-mode</h1>
    <p>Legt fest, welche Styles vor und nach dem Ausführen der Animation auf das animierte Element angewendet werden.
    </p>

    <h1>animation-play-state</h1>
    <p>Ermöglicht das Pausieren und Wiederaufnehmen einer Animationssequenz.</p>


   <div class="looper"></div>




    <div class="mq"></div>
    <br><br><br><br><br><br><br><br><br>

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

