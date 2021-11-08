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

    <title>BRAIN</title>

    <style>
    body{
        background-color: black;
    display: flex;
    text-align: center;
    justify-content: center;
    align-content: center;
    align-items: center;
     color: rgb(0, 0, 0);
    /* background: rgb(255, 255, 255);  */
     padding-top: 30px;

}

a:-webkit-any-link {
    color: rgb(204, 204, 204);
    cursor: pointer;
    text-decoration: underline;

}

      .loginBox{
            background-color: rgb(141, 124, 25);
            padding-top: 120px;
            height: 710px;
            width: 670px;
             border: solid rgb(61, 61, 61) 1px;
            border-radius: 0px;
            box-shadow: rgb(58, 58, 58) 0px 0px 42px;
            transition: 0.3s;
        }

        .loginLogo{
            z-index: 0;
            position: absolute;
            top: 60px;
            height: 145px;
            animation-name: rotation;
	        animation-duration: 35s;
	        animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            opacity: 50%;
        }
        @keyframes rotation {
                0% {
                 transform:rotate(0deg);
                    }
                 100% {
                 transform:rotate(360deg);
                    }
                }
    </style>
</head>

<body>

    <div class="loginBox" >
        <x-guest-layout>
            <x-auth-card>

            <div class="boxLogo">
               <img class="loginLogo" src="{{ asset('images/Tuerca.png')}}">
           </div>

                <x-slot name="logo">
                     {{-- <a href="/">
                        <x-application-logo class="w-1 h-20 fill-current text-gray-500" />
                    </a> --}}

                </x-slot>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label  for="email" :value="__('Email')" /><br>

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label  for="password" :value="__('Password')" /><br>

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password"
                                        />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-2">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-md text-gray-600" style="font-size: 20px;">{{ __('Remember me') }}</span>
                        </label>
                    </div>
      <br>
                    <x-button >
                        {{ __('Login') }}
                    </x-button>
                    <br>
                    <br>


                    <div class="links flex items-center justify-end mt-1">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            <br>

                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">Register</a>
                        @endif
                        <br>
                    </div>
                </form>
            </x-auth-card>
        </x-guest-layout>
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
