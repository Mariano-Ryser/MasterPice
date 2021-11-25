<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('images/logo.png')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One&display=swap" rel="stylesheet">

    <title>BRAIN</title>

<style>
   body{
       background-color: black;
       }

              .pr{background: fixed;
                    background-image: url(/images/fondo2.jpeg);
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: 0px -250px;
                    height: 800px;
                }
               .tu{
                 height: 400px;
                 animation: cierra 2s infinite alternate;
               }
               @keyframes cierra {
                   0%{
                    height: 400px;
                   }
                   100%{
                    height: 00px;
                   }
               }

                .se{background: fixed;
                    background-image: url(/images/fondo3.jpeg);
                    background-repeat: no-repeat;
                    background-size: cover;
                    height: 550px;
                }
                .me{background: fixed;
                    background-image: url(/images/fondo5.jpeg);
                    background-repeat: no-repeat;
                    background-size: cover;
                    height: 550px;
                }
          #foto{
              position: absolute;
              float:right;
              /* right: 0px; */
              /* border-bottom-right-radius: 196px 192px; */
              height: 322px;
              width:322px;
              border-radius: 50%;
              background-image: url(/images/MR2.jpg);
              background-size: cover;
              background-repeat: no-repeat;
            }
                #WD{
                    position: relative;
                    display: inline-block;
                }
                h1{
                font-size: 110px;
                font-family: 'Bowlby One', cursive;
            }
            #web{color: rgb(252, 239, 59);
                text-shadow:  black 0px 0px 20px;}

            #de{
                text-shadow:  black 0px 0px 20px;
                color: rgb(105, 221, 51);
            }
            #veloper{position: absolute;
                text-shadow:  black 0px 0px 10px;
                left: 300px;
                transform: rotateZ(41deg);
                color: rgb(255, 255, 255);
                  margin-bottom: 0px;

                }

                @media (min-width: 1400px){
.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1720px;
}}

</style>

</head>
   <x-tuercasComponent/>
<body>
{{-- <x-navbar/> --}}


<div class="container-fluid pr">

</div>

<div class="container-fluid tu">
    <x-tuercasComponent/>
</div>

<div class="container-fluid se">

</div>

<div class="container-fluid tu">

</div>

<div class="container-fluid me">

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
