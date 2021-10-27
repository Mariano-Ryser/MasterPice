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

    <title>HTML</title>

<style>
body{
    background-color: rgb(109, 7, 7);
}



summary::marker {
    unicode-bidi: isolate;
    font-variant-numeric: tabular-nums;
    text-transform: none;
    text-indent: 0px !important;
    text-align: start !important;
    text-align-last: start !important;
}
.htmlLogo{
    z-index: -3;
    height:400px;
    opacity: 60%;
    position: absolute;
    left: 20px;
    top: 140px;
    }

</style>

</head>
<x-tuercasComponent/>
<body>

  <x-navbar/>
<br><br><br><br><br><br><br>

</div>
<div class="container">
    <h1>Hypertext Markup Language</h1>

    <p>Die Hypertext Markup Language ist eine textbasierte Auszeichnungssprache zur Strukturierung elektronischer Dokumente wie Texte mit Hyperlinks, Bildern und anderen Inhalten. HTML-Dokumente sind die Grundlage des World Wide Web und werden von Webbrowsern dargestellt. Neben den vom Browser angezeigten Inhalten können HTML-Dateien zusätzliche Angaben in Form von Metainformationen enthalten. über die im Text verwendeten Sprachen, den Autor oder den zusammengefassten Inhalt des Textes.
        HTML wird vom World Wide Web Consortium und der Web Hypertext Application Technology Working Group (WHATWG) weiterentwickelt. Die aktuelle Version ist seit dem 14. Dezember 2017 HTML , die bereits von vielen aktuellen Webbrowsern und anderen Layout-Engines unterstützt wird. Auch die Extensible Hypertext Markup Language wird durch HTML5 ersetzt.
        HTML dient als Auszeichnungssprache dazu, einen Text semantisch zu strukturieren, nicht aber zu formatieren. Die visuelle Darstellung ist nicht Teil der HTML-Spezifikationen und wird durch den Webbrowser und Gestaltungsvorlagen wie <a href="/csss"><b>css</b></a>  bestimmt. Ausnahme sind die als veraltet markierten präsentationsbezogenen Elemente.</p>
   </div>

<img class="htmlLogo" src="/images/htmll.png" alt="">

<h1>Struktur</h1>
<textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="70" rows="13">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


</body>
</html>
</textarea>


<hr style="height: 2px; color:white">
<h1>< h >  Title </h1>
<textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="60" rows="6">
    <h1>Welcome!</h1>
    <h2>Welcome!</h2>
    <h3>Welcome!</h3>
    <h4>Welcome!</h4>
    <h5>Welcome!</h5>
    <h6>Welcome!</h6>
</textarea>
<h1>Welcome!</h1>
<h2>Welcome!</h2>
<h3>Welcome!</h3>
<h4>Welcome!</h4>
<h5>Welcome!</h5>
<h6>Welcome!</h6>
<hr style="height: 2px; color:white">

<h1>< p > Paragraph</h1>
<textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="60" rows="2">
    <p>Paragraph</p>
    <a href="">Dies ist ein Link.</a>
</textarea>
<p> Paragraph </p>
<a href="">Dies ist ein Link.</a>

<hr style="height: 2px; color:white">

<h1>Aqui der code tag "< detalist >"</h1>
<textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="60" rows="8">
<label for="myNummers">Gib einen Nummer ein:</label>
<input list="nums" id="myNummers" name="myNummers" />
<datalist id="nums">
  <option value="Option 1">
  <option value="Option 2">
  <option value="Option 3">
</datalist>
</textarea>
<br>

<label for="myBrowser" style="color: white; font-size:25px;">Gib einen Browsernamen ein:</label>
<input list="nums" id="myBrowser" name="myBrowser" />
<datalist id="nums">
  <option value="Option 1">
  <option value="Option 2">
  <option value="Option 3">
  <option value="Option 4">
  <option value="Option 5">
</datalist>

<hr style="height: 2px; color:white">
<div class="container">

<h1>Aqui der code tag "< details >"</h1>
<textarea style="background-color: black; color: rgb(207, 250, 207)" id="textArea2" name="" cols="60" rows="12">
    <details>
        <summary >Some details</summary>
        <p>More info about the details.bla Bla Lorem
            ipsum dolor sit amet consectetur adipisicing
            elit. Nesciunt, placeat provident! Alias sint
            laudantium quis vel consectetur nesciunt at
            quod iusto, tenetur dignissimos corporis
            perspiciatis voluptatum error ut perferendis
            quas.
        </p>
      </details>
</textarea >

<script>

    var area = document.getElementById('textArea2');

  area.addEventListener('focus', function(){
    area.style.transition = '1s';
    area.style.background = "black";
    area.style.color = 'rgb(132, 207, 58)'
    area.innerHTML = 'oppdev2021@oppdev-latitude-3510:~$'
  })
  </script>
<details>
    <summary> <p style="color: white; font-size:25px">Some details</p> </summary>
    <p>More info about the details.bla Bla Lorem
        ipsum dolor sit amet consectetur adipisicing
        elit. Nesciunt, placeat provident! Alias sint
        laudantium quis vel consectetur nesciunt at
        quod iusto, tenetur dignissimos corporis
        perspiciatis voluptatum error ut perferendis
        quas.</p>
  </details>
  <hr style="height: 6px; color:white">
  <p>Diese HR oben ist kurz weil in ein conteiner ist.</p>
<br><br>





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

