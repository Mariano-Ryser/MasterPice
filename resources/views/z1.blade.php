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

        background: linear-gradient(#085467,#AFA7BB, #F4C0B3 );
        background-size: 200% 200%;
       height: 100vh;
       display: flex;
       justify-content: center;
       align-items: center;
       animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
	0% {
		background-position: 0% 0%;
	}
	50% {
		background-position: 200% 50%;
	}
	100% {
		background-position: 0% 0%;
	}
}

    .smile{
        /* height: 100px;
        width: 100px; */
        /* border-right: solid blue 9px; */
        border-top: solid blue 10px;
        font-size: 120px;
        transform: rotateZ(90deg);
    }




</style>

</head>
<body>
     {{-- <x-navbar/> --}}
<br><br><br><br><br>
 <h1></h1>
<a href="/cv">
    <div class="smile">
    =D
</div>
</a>




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

