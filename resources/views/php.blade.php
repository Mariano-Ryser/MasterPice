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

    <title>PHP</title>


<style>
body{background-color: rgb(78, 31, 122)}

</style>
</head>

<body>
    <x-tuercasComponent/>
  <x-navbar/>


  <br><br><br><br><br>
  <h1>PHP TU MEJOR AMIGO</h1>
  <p> Imortante ! Buscar la opcion para achicar la imagen responsiva</p>
  <img class="imgPhp" src="/images/phpp.png" alt="" style="height: 350px">
<div style= "color:white; font-size:30px;" class="container">

  <h1>Zeichenketten verbinden in php (String concatenation)</h1>
  <textarea style="background-color: black; color: rgb(207, 250, 207)" name="" id="" cols="28" rows="3">
    $name = 'Peter';
    $str = 'Ich heisse ' . $name . '.' ;
    </textarea>
    <br>
  <?php
 $name = 'Peter';
 $str = 'Ich heisse ' . $name . '.';

  echo $str . '<br>';

    // WHILE -------------------------------------------------------
    echo '<h1>php while-Schleife</h1>' . PHP_EOL;

    $num = 1;
    $sum = 0;

    while ($num <= 100) {
        $sum += $num; // is the same as $sum = $sum + $num;
        $num++; // is the same as $num = $num + 1;
    }

    $sumCalculated = (100 + 1) * 100 / 2; // result is 5050

    echo "The sum of the number 1 to 100 is " . $sum . '<br>';
    echo '(' . $sumCalculated . ')<br>';

    // DO WHILE ---------------------------------------------------
    echo '<h1>php do-while-Schleife</h1>' . PHP_EOL;

    $num = 1;
    $sum = 0;

    do {
        $sum += $num; // is the same as $sum = $sum + $num;
        $num++; // is the same as $num = $num + 1;
    } while ($num <= 100);

    echo $sum . '<br>';

    // DO WHILE ---------------------------------------------------
    echo '<h1>php for-loops</h1>' . PHP_EOL;

    // $num = 1;
    $sum = 0;

    for ($num = 1; $num <= 100; $num++) {
        $sum += $num; // is the same as $sum = $sum + $num;
        // not necessary in the for-loop: $num++;
    }

    echo $sum . '<br>';




  $title = "<h1>Arrays</h1>";

echo $title;
$array = array("foo", "bar", "hello", "world");
echo '<pre>';
var_dump($array);
echo '</pre>';



echo "<br>";

echo ($array)[0]."<br>";
echo ($array)[1]."<br>";
echo ($array)[2]."<br>";
echo ($array)[3]."<br>"."<br>"."<br>";

$title1 = '<h1>Esto es foreach</h1>'."<br>"."<br>" ;
$title2 = '<h1>Esto es foreach mit switch</h1>'."<br>"."<br>" ;
echo $title1;


$person = [
    'Name' => 'Mariano',
    'Alter' => '29',
    'Wohnort' => 'Höng',
    'blalala' => ''
];



foreach ($person as $key => $value) {
    if($key == 'Name') {
        echo 'Er heisst ' . $value;
    } elseif ($key == 'Alter') {
        echo 'Er ist ' . $value . ' Jahre alt';
    } elseif ($key == 'Wohnort') {
        echo 'Er lebt in ' . $value;
    }
    echo '<br>';
}

echo $title2;

foreach ($person as $key => $value) {
    switch ($key) {
        case 'Name':
            echo 'Er heisst ' . $value;
        break;
        case 'Alter':
            echo 'Er ist ' . $value . ' Jahre alt';
            break;
        case 'Wohnort':
            echo 'Er lebt in ' . $value;
            ;
        break;

        default:
            echo 'existiert keine switch regel';
        break;
    }
    echo '<br>';
}

echo '<br>'; echo '<br>'; echo '<br>';

echo "a is 2 and b is 3<br>";
            $a = 2;
            $b = 3;
            echo "<br>a + b = ???<br>";
            echo "$a + $b = ???<br>";
            echo "$a + $b = " . ($a + $b) . "<br>";

            echo "<br>a - b = ???<br>";
            echo "$a - $b = ???<br>";
            echo "$a - $b = " . ($a - $b) . "<br>";

            echo "<br>a x b = ???<br>";
            echo "$a * $b = ???<br>";
            echo "$a * $b = " . ($a * $b) . "<br>";

            echo "<br>a ÷ b = ???<br>";
            echo "$a / $b = ???<br>";
            echo "$a / $b = " . ($a / $b) . "<br>";

            echo "<br>Powers and finding remainders (Rest) after divisions (ignoring the result of the division)<br>";
            echo "<br>a ^ b = ??? (^ = 'to the power of' / 'hoch')<br>";
            echo "$a ** $b = ???<br>";
            echo "$a ** $b = " . ($a ** $b) . "<br>";

            echo "<br>a / b = ... -> remainder/Rest???<br>";
            echo "$a % $b = ???<br>";
            echo "$a % $b = " . ($a % $b) . "<br>";

            echo "<br>Attention when mixing full stops ('.') into defintions of multiple variables in an attempt to concatenate (just like i did earlier):<br>";
            echo "c = 5 and d = 7 and e = 11<br>";

            $c = 5 . $d = 7 . $e = 11;
            echo "c + d + e<br>";
            echo "$c + $d + $e<br>";


            echo '<br>'; echo '<br>'; echo '<br>';

            $benutzer = "Mariano";
$bv = date("D-M-Y");

function greet ($name , $day)
{

    return "Hello $name" . " Wie geths dir?" . "<br>" . "Heute ist $day";

    echo '<br>'; echo '<br>'; echo '<br>'; //esto no aparecera porque esta despues del RETURN
    echo 'hjjfgjfghfghfgh';  //esto no aparecera porque esta despues del RETURN
}

$text = greet($benutzer,$bv);

//  echo '<br>';echo '<br>';echo '<br>';

echo $text;


echo '<br>'; echo '<br>'; echo '<br>';



  ?>

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

