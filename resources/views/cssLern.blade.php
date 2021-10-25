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
.boxAni {
    position: relative;
    opacity: 0%;
    background-color: rgb(179, 184, 179);
    height: 200px;
    width: 200px;
    /* border: 2px solid black; */
    display: inline-block;
    animation: rotation 3s linear alternate;
    box-shadow: white 0px 0px 50px;
    top: -580px;

}


@keyframes rotation {
    0%{ transform: rotate(0deg);
        /* top: 0px; */
        opacity: 0%;
    }
    50%{ transform: rotate(-200deg);
         top: -580px;
         background-color: blue;
         border-radius: 50%;
         opacity: 100%;
         box-shadow: white 0px 0px 40px;
         border: solid rgb(251, 251, 251) 10px;
    }

    75%{ transform: rotate(285deg);
         top: -580px;
         height: 400px;
          width: 400px;
          box-shadow: white 0px 0px 90px;
         background-color: rgb(0, 0, 0);
         border: solid rgb(251, 251, 251) 40px;
         border-radius: 0%;
         opacity: 60%;
    }

    100%{ transform: rotate(585deg);
         top: -500px;
         height: 0px;
          width: 0px;
          box-shadow: white 0px 0px 140px;
         background-color: rgb(16, 52, 170);
         border: solid rgb(251, 251, 251) 0px;
         border-radius: 50%;
         opacity: 0%;
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
        <p>Cascading Style Sheets (gestufte Gestaltungsbögen; kurz: CSS) ist eine Stylesheet-Sprache
          für elektronische Dokumente und zusammen mit HTML und <a href="/jss"><b>JavaScript</b></a>
          eine der Kernsprachen
          des World Wide Webs. Sie ist ein sogenannter living standard ‚lebendiger Standard‘ und wird
          vom World Wide Web Consortium beständig weiterentwickelt. Mit CSS werden Gestaltungsanweisungen
          erstellt, die vor allem zusammen mit den Auszeichnungssprachen HTML und XML (zum Beispiel bei SVG) eingesetzt werden.
        </p>

        <img style="height:250px " src="images/csss.png" alt=""> <br>


<br><br> <hr style="color: white; border:white 5px solid
">
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

    <textarea name="" id="" cols="30" rows="10">.box1{
        animation-name: nameExample;
        }


        @keyframes nameExample {
            from{ }
            to{ }
        }
        </textarea>

    <h1>animation-duration</h1>
    <p>Legt die Dauer der Animation für einen kompletten Durchgang fest.</p>

    <textarea name="" id="" cols="30" rows="10">.box1{
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





    <br><br><br>

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

