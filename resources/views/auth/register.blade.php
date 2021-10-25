
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="icon" href="{{ asset('images/logo.png')}}">

    {{-- Font Google --}}

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

    <title>BRAIN</title>

    <style>
        body{display: flex;
     text-align: center;
     justify-content: center;
     align-content: center;
     /* color: rgb(0, 0, 0);
     background: rgb(255, 255, 255); */
      padding-top: 30px;
 }

 a:-webkit-any-link {
    color: rgb(0, 0, 0);
    cursor: pointer;
    text-decoration: underline;
    font-size: 12px;
}

         .loginBox{
            background-color: rgb(27, 108, 189);
             padding-top: 94px;
             height: 410px;
             width: 370px;
             /* border: solid rgb(85, 85, 85) 1px; */
             border-radius: 5px;
              box-shadow: rgb(58, 58, 58) 0px 0px 42px;
             transition: 0.3s;
         }
         /* .loginBox:hover{
             border: solid rgb(51, 51, 51) 1px;
             box-shadow: inset rgb(58, 58, 58) 0px 0px 32px;
         } */
         .loginLogo{
             z-index: 0;
             position: absolute;
             top: 60px;
             height: 145px;
             animation-name: rotation;
             animation-duration: 5s;
             animation-iteration-count: infinite;
             -webkit-animation-timing-function: linear;
             opacity: 30%;
         }
         @keyframes rotation {
   0% {
      transform:rotate(0deg);

   }

   100% {
      transform:rotate(360deg);

   }
 }

 /* .boxLogo{
     position: relative;
     top: 120px;
     left: 42%;
 } */



     </style>
</head>
<body>
<div class="loginBox" >
    <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
            </a>
        </x-slot>
        <div class="boxLogo">
            <img class="loginLogo" src="{{ asset('images/Tuerca.png')}}">
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" /> <br>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Spitzname -->
            <div class="mt-4">
                <x-label for="spitzname" :value="__('Spitzname')" /> <br>

                <x-input id="spitzname" class="block mt-1 w-full" type="text" name="spitzname" :value="old('spitzname')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" /><br>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" /><br>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button><div class="d-none d-sm-block">

                </div>

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }} <br>
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout></div>



</body>
</html>

