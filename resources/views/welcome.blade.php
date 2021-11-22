<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/logo.png')}}">
        <title>BRAIN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}">
           <script src="{{ mix('js/app.js') }}"></script> --}}
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>


#brainmap{
    stroke: rgba(1, 83, 7, 0.1) !important;
    fill: rgba(1, 83, 7, 0.1) !important;
}
            .cabeza a{
                font-size: 50px;
                color: rgb(110, 110, 110);
                transition: 0.2s;
            }
            .cabeza a:hover{
                font-size: 50px;
                color: rgb(255, 255, 255);
            }
            .cajon{
                background-color: rgb(2, 2, 2);
            }

            .brainmap{
                height:100%;
                opacity: 100%;
                transition: 0.3s;
                animation-name: colores;
                animation-duration: 55s;
	            animation-iteration-count: infinite;
	            animation-timing-function: linear;
            }

            .brainmap:hover{opacity: 100%;}

            /* #c1{
                fill: rgb(241, 241, 241);
                color:rgb(39, 231, 39);
                animation-name: move;
                animation-duration: 5s;
	            animation-iteration-count: infinite;
	            animation-timing-function: linear;
            }

        @keyframes move {
  0% {
    fill: rgb(166, 225, 243);
  }
  50% {
    fill: rgb(10, 58, 136);
  }
  100% {
    fill: rgb(133, 123, 123);
  }
} */
#c2{
                fill: blue;
                animation-name: move;
                animation-duration:2s;
	            animation-iteration-count: infinite;
	            animation-timing-function: linear;
                -o-animation-direction: alternate;
            }

        @keyframes move {
  0% {
    fill: rgb(10, 125, 163);

  }
  33% {
    fill: rgb(151, 0, 139);
  }
  66% {
    fill: rgb(244, 248, 8);
  }
  100% {
    fill: rgb(255, 255, 255);


  }
}







circle{
    fill: rgb(187, 35, 35);
}

        </style>

    </head>

    <body >

        <div style="border: black solid 2px" class="cajon relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            @if (Route::has('login'))
                <div  class="cabeza hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Dashboard</a> --}}
                    @else
                        {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Log in</a> --}}

                        @if (Route::has('register'))
                        {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif

            {{-- <div style="border: rgb(143, 20, 20) solid 10px" class="container"> --}}


                {{-- <div style="border: rgb(214, 214, 214) solid 3px" class=" pt-8 sm:justify-start sm:pt-0"> --}}
                    {{-- <div class="flecha"></div> --}}
                     {{-- <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                          <g clip-path="url(#clip0)" fill="#EF3B2D">
                     <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg> --}}
                    {{-- <a href="{{ route('login') }}" ><img class="logo " src="{{ asset('images/brainWelt.png')}}"></a> --}}
                    <?xml version="1.0" encoding="UTF-8"?>
                    {{-- <a href="{{ route('login') }}" > --}}
                        <svg class="brainmap" width="700px" height="700px" version="1.1" viewBox="0 0 76.177 69.028" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:xlink="http://www.w3.org/1999/xlink">

                        <g transform="translate(-57.083 -47.772)" fill="none" stroke="#f90" stroke-width=".38888px">
                        <path d="m100.91 114.69 1.6773 0.72052"/>
                        <path d="m103.52 115.46 0.56224-5.3129"/>
                        <path d="m104.08 110.14-7.8052-6.5532"/>
                        <path d="m96.129 103.91 6.8461 11.084"/>
                        <path d="m100.67 113.86 3.4089-3.716"/>
                        <path d="m95.895 103.67 4.1837 10.517"/>
                        <path d="m100.67 113.86 1.1103-9.6408"/>
                        <path d="m100.08 114.19-2.1994-16.966"/>
                        <path d="m96.275 103.59 4.8452-0.0827"/>
                        <path d="m101.72 103.26-6.2673-3.2246"/>
                        <path d="m95.415 100.4 0.44648 2.8277"/>
                        <path d="m102.05 102.7 0.31419-3.3238"/>
                        <path d="m103.37 115.12-1.356-11.361"/>
                        <path d="m103.92 109.58-1.9017-5.8208"/>
                        <path d="m98.623 96.347 3.4561 2.3978"/>
                        <path d="m102.74 98.513 1.8852-1.4883"/>
                        <path d="m92.918 94.329 2.1332 4.8948"/>
                        <path d="m95.696 99.24 1.5048-2.8277"/>
                        <path d="m96.408 103.03 6.9949-11.278"/>
                        <path d="m102.74 98.513 0.8599-6.4492"/>
                        <path d="m103.98 91.948 0.76068 4.5806"/>
                        <path d="m105.29 96.925 7.9375 1.0418"/>
                        <path d="m113.12 97.493-8.7734-5.81"/>
                        <path d="m114.59 97.283 6.665-8.7698"/>
                        <path d="m123.48 87.601 3.9055 0.37418"/>
                        <path d="m128.93 87.133 2.1281-2.4555"/>
                        <path d="m131.73 82.526-0.53788-5.753"/>
                        <path d="m130.52 74.177-2.5725-5.0514"/>
                        <path d="m127.31 67.746-1.5669-3.695"/>
                        <path d="m124.91 63.139-6.2207-5.449"/>
                        <path d="m116.74 56.1-4.5369-2.666"/>
                        <path d="m108.53 51.516-4.4434-2.3386"/>
                        <path d="m102.52 48.92-6.5949 0.53788"/>
                        <path d="m93.661 49.341-6.3844-0.65481"/>
                        <path d="m86.131 48.757-10.898 2.7362"/>
                        <path d="m73.315 52.288-3.999 2.4789"/>
                        <path d="m67.866 55.96-2.8765 3.5313"/>
                        <path d="m64.475 60.801-0.30402 5.4723"/>
                        <path d="m62.721 68.892-2.3854 2.2918"/>
                        <path d="m60.196 73.452 4.2329 4.42"/>
                        <path d="m66.44 80.211 1.5435 2.5959"/>
                        <path d="m68.825 83.181 4.1627-0.18709"/>
                        <path d="m74.11 82.947 5.6594 0.09354"/>
                        <path d="m80.846 83.696 4.0458 5.4723"/>
                        <path d="m86.248 90.407 5.4957 2.7128"/>
                        <path d="m93.053 92.699 0.79513-1.9177"/>
                        <path d="m94.433 90.758 2.5491 3.9289"/>
                        <path d="m103.4 91.749-4.8535 3.3585"/>
                        <path d="m94.714 90.361 8.115 0.70158"/>
                        <path d="m98.128 94.477 2.7829-8.419"/>
                        <path d="m105.4 96.441 15.458-8.3254"/>
                        <path d="m111.53 85.683 2.2451 11.506"/>
                        <path d="m117.19 81.474-3.125 15.809"/>
                        <path d="m105.56 81.474 8.3722 16.791"/>
                        <path d="m104.74 96.529 6.0613-11.219"/>
                        <path d="m104.09 90.852 6.8053-6.1038"/>
                        <path d="m102.81 84.654 7.3666-0.07016"/>
                        <path d="m105.05 81.404-1.2161 9.0036"/>
                        <path d="m101.85 86.034 1.5201 4.42"/>
                        <path d="m103.72 91.296 17.399-3.6015"/>
                        <path d="m112.35 84.771 8.5359 2.4555"/>
                        <path d="m113.45 80.375 7.7174 6.3844"/>
                        <path d="m117.77 81.263 4.303 6.1505"/>
                        <path d="m112.53 79.626 4.8877 1.1459"/>
                        <path d="m105.49 80.842 6.4312-1.029"/>
                        <path d="m104.77 80.889-11.997 2.4088"/>
                        <path d="m91.931 83.696 9.3544 0.95883"/>
                        <path d="m100.23 84.958-14.149 4.6538"/>
                        <path d="m92.048 84.888 1.9878 5.0982"/>
                        <path d="m91.697 84.233 0.88867 8.8867"/>
                        <path d="m86.716 82.69 5.8699 10.43"/>
                        <path d="m86.084 89.612 4.6071-5.0748"/>
                        <path d="m85.827 83.087-0.25725 6.1038"/>
                        <path d="m81.103 82.971 3.6716-1.0758"/>
                        <path d="m87.347 82.035 3.0168 1.1927"/>
                        <path d="m94.597 78.714-2.2451 3.7652"/>
                        <path d="m87.3 81.146 6.8989-2.9233"/>
                        <path d="m94.62 77.989-18.685 0.37418"/>
                        <path d="m94.035 90.516 6.8287-5.4169"/>
                        <path d="m94.035 89.986 5.5425-15.107"/>
                        <path d="m92.235 83.228 16.838-8.7932"/>
                        <path d="m95.649 78.574 4.9578 5.2619"/>
                        <path d="m112.44 80.679-0.88867 2.9233"/>
                        <path d="m122.87 86.362 7.4602-9.7754"/>
                        <path d="m125.93 73.85 2.0814 13.12"/>
                        <path d="m120.32 78.878 10.594 4.5837"/>
                        <path d="m125.54 73.476-3.087 13.143"/>
                        <path d="m120.23 77.849 5.4957-4.9578"/>
                        <path d="m120.09 73.055 11.295 10.29"/>
                        <path d="m126.24 73.219 3.7184 1.7306"/>
                        <path d="m110.69 74.435 8.3254 3.695"/>
                        <path d="m113.31 78.925 5.2385-5.8699"/>
                        <path d="m110.43 75.113 1.7773 3.8119"/>
                        <path d="m105.71 80.188 3.6014-5.2151"/>
                        <path d="m101.21 83.204-1.1225-8.4658"/>
                        <path d="m100.44 74.318 4.3264 6.5715"/>
                        <path d="m104.54 65.337 0.70159 14.663"/>
                        <path d="m101.45 73.733 7.1561 0.23386"/>
                        <path d="m95.86 77.288 3.0636-2.7596"/>
                        <path d="m94.877 76.914-1.1459-8.115"/>
                        <path d="m94.714 68.448 4.2563 4.1861"/>
                        <path d="m94.246 77.101-4.6772-5.3788"/>
                        <path d="m81.898 75.019 12.208 2.7128"/>
                        <path d="m78.25 74.341 2.5959 0.46772"/>
                        <path d="m88.423 71.722-7.694 10.851"/>
                        <path d="m85.312 80.679-4.0224-5.6594"/>
                        <path d="m86.552 80.375 2.4322-9.1673"/>
                        <path d="m86.529 80.889 6.5013-12.862"/>
                        <path d="m89.966 71.114 8.8399 2.1515"/>
                        <path d="m81.29 75.019 6.8521-3.7418"/>
                        <path d="m76.285 77.989 5.0046-2.97"/>
                        <path d="m76.168 79.229 3.6248 3.274"/>
                        <path d="m81.29 75.019-0.70158 7.5537"/>
                        <path d="m119.29 72.369-9.3927 1.5875"/>
                        <path d="m120.19 72.369 5.5366 0.52241"/>
                        <path d="m119.53 78.818-0.23151-5.3909"/>
                        <path d="m119.33 71.277 0.16537-5.0271"/>
                        <path d="m120.25 66.349 5.4705 6.5417"/>
                        <path d="m125.75 64.051-0.0234 8.8399"/>
                        <path d="m127.95 69.126-2.2217 3.7652"/>
                        <path d="m125.02 63.935-4.7956 1.6536"/>
                        <path d="m118.8 66.482-8.3674 6.8792"/>
                        <path d="m118.33 71.509-6.1185-5.5232"/>
                        <path d="m109.11 68.433 9.525-2.6458"/>
                        <path d="m107.78 69.028-6.6807 3.7703"/>
                        <path d="m108.55 69.392 0.89297 3.4727"/>
                        <path d="m109.9 73.956 7.3091-16.206"/>
                        <path d="m117.97 57.883 1.356 6.7799"/>
                        <path d="m125.02 63.935-12.601 1.0253"/>
                        <path d="m116.91 57.751-4.9279 6.2177"/>
                        <path d="m118.17 56.527-13.163 7.3091"/>
                        <path d="m107.95 59.107 0.3638 8.9628"/>
                        <path d="m108.58 68.433 1.7859-2.282"/>
                        <path d="m110.53 54.509 0.46302 9.1943"/>
                        <path d="m116.52 56.891-7.9706 1.3229"/>
                        <path d="m107.62 58.412 2.1167-4.068"/>
                        <path d="m94.886 49.548 14.288 2.6458"/>
                        <path d="m103.42 48.92 4.2664 8.7643"/>
                        <path d="m94.886 49.548 12.766 8.5328"/>
                        <path d="m102.96 49.582-4.0349 6.5484"/>
                        <path d="m103.42 48.92-13.99 8.632"/>
                        <path d="m95.349 50.375 2.5466 5.7216"/>
                        <path d="m94.886 49.548-1.2568 16.173"/>
                        <path d="m99.318 57.287 8.3013 1.1245"/>
                        <path d="m107.65 58.081-2.6458 5.7547"/>
                        <path d="m107.62 58.412-13.163 8.1029"/>
                        <path d="m103.42 64.398-9.7234 2.8112"/>
                        <path d="m108.58 68.433-14.883-1.2237"/>
                        <path d="m105.01 63.836-4.7625 8.7643"/>
                        <path d="m94.82 67.077 15.247-1.7859"/>
                        <path d="m111.09 64.993-6.0854-0.76068"/>
                        <path d="m97.83 57.949-4.7998 10.078"/>
                        <path d="m89.793 58.147 13.791 5.5232"/>
                        <path d="m98.227 56.891 6.1185 7.0115"/>
                        <path d="m98.227 56.891 1.4883 16.206"/>
                        <path d="m98.227 56.891-14.651 8.9297"/>
                        <path d="m88.735 57.949 4.2995 8.6982"/>
                        <path d="m65.947 79.016 7.0406 3.9775"/>
                        <path d="m74.05 69.69-0.59927 13.304"/>
                        <path d="m75.076 79.347-1.6245 3.6468"/>
                        <path d="m76.432 75.18-0.69453 2.3482"/>
                        <path d="m60.127 72.766 14.651 5.6224"/>
                        <path d="m64.955 69.227 8.4958 13.767"/>
                        <path d="m68.196 83.481 5.5562-14.651"/>
                        <path d="m76.365 74.089-9.7565 4.3656"/>
                        <path d="m60.127 72.534 16.239 1.1575"/>
                        <path d="m83.575 65.82-2.2852 9.199"/>
                        <path d="m82.947 66.482-5.1594 6.4823"/>
                        <path d="m76.828 65.093 0.16536 7.5737"/>
                        <path d="m74.778 69.855 1.4883 3.0758"/>
                        <path d="m74.976 68.665 13.166 2.0838"/>
                        <path d="m58.605 72.402 15.147-3.5719-9.6904-0.89297"/>
                        <path d="m73.753 68.466-9.3266-8.5659"/>
                        <path d="m65.418 66.879 5.9862-4.3987"/>
                        <path d="m68.494 55.072-4.4318 12.865"/>
                        <path d="m64.426 59.9 7.9044 1.7198"/>
                        <path d="m64.426 59.9 13.824-6.4161"/>
                        <path d="m68.494 55.072 3.8365 6.5484"/>
                        <path d="m72.33 61.62 5.9201-8.1359"/>
                        <path d="m68.494 55.072 13.328 4.0349"/>
                        <path d="m74.513 52.426 2.3482 11.774"/>
                        <path d="m73.323 62.182 3.638 2.4143"/>
                        <path d="m72.628 61.62 1.3229 6.8461"/>
                        <path d="m83.575 65.82-9.8227 3.0096"/>
                        <path d="m76.961 64.597 6.6146 1.2237"/>
                        <path d="m82.385 60.066 0.7276 4.8286"/>
                        <path d="m74.381 51.599 9.3596 15.081"/>
                        <path d="m76.828 65.093-2.249 2.6789"/>
                        <path d="m77.556 64.101 4.1341-4.3326"/>
                        <path d="m88.437 58.71-4.5641 6.4492"/>
                        <path d="m87.379 55.204-4.4318 11.278"/>
                        <path d="m82.55 59.239 9.6904 7.276"/>
                        <path d="m92.77 67.342-9.1943-1.5214"/>
                        <path d="m88.735 57.949 9.4919-1.0583"/>
                        <path d="m88.073 54.443 10.153 2.4474"/>
                        <path d="m87.259 49.037 10.12 7.4835"/>
                        <path d="m93.965 50.066-5.4723 3.8587"/>
                        <path d="m86.856 55.024-3.8587 3.4611"/>
                        <path d="m82.506 58.158 4.0224-9.0036"/>
                        <path d="m86.849 49.276 0.66973 4.0514"/>
                        <path d="m86.147 48.97-7.1485 3.8796"/>
                        <path d="m75.303 52.054 2.1047 1.0056"/>
                        <path d="m78.764 54.136 2.8063 4.3732"/>
                        <path d="m79.115 53.598 8.723 3.8119"/>
                        <path d="m78.694 53.34 8.1851 0.86528"/>
                        <path d="m84.143 66.729 3.8587 3.2974"/>
                        <path d="m90.048 70.108 1.906-1.789"/>
                        <path d="m89.049 69.607-0.016536-10.633"/>
                        <path d="m105.48 65.232 2.3971 2.9233"/>
                        <path d="m117.83 80.164 1.0992-1.029"/>
                        </g>
                        <g transform="translate(-57.083 -47.772)" fill="#f00">
                        <circle cx="74.3" cy="51.678" r="1.2652"/>
                        <circle cx="78.277" cy="53.35" r="1.0313"/>
                        <circle cx="86.746" cy="48.59" r=".78076"/>
                        <circle cx="87.748" cy="54.369" r="1.2318"/>
                        <circle cx="88.984" cy="57.877" r="1.3487"/>
                        <circle id ="c1"cx="82.252" cy="59.13" r="2.1148"/>
                        <circle cx="77.04" cy="64.576" r=".98122"/>
                        <circle cx="72.681" cy="61.652" r="1.7663"/>
                        <circle cx="68.454" cy="55.154" r="1.1984"/>
                        <circle cx="64.596" cy="60.049" r=".9144"/>
                        <circle cx="64.111" cy="67.816" r="2.0837"/>
                        <circle cx="59.016" cy="72.31" r="1.9334"/>
                        <circle cx="65.514" cy="78.941" r="1.6995"/>
                        <a href="/rw"><circle cx="68.304" cy="83.168" r=".68054"/></a>
                        <circle id ="c1"cx="73.416" cy="82.867" r=".9311"/>
                        <circle cx="75.487" cy="78.524" r="1.4489"/>
                        <circle id ="c1" cx="76.99" cy="73.847" r="1.7663"/>
                        <circle cx="74.034" cy="68.685" r="1.5659"/>
                        <circle cx="83.338" cy="65.962" r="1.2819"/>
                        <circle id ="c1" cx="81.333" cy="74.916" r=".83088"/>
                        <circle cx="80.448" cy="82.984" r=".99792"/>
                        <circle cx="85.376" cy="89.95" r="2.1483" />
                        <circle id ="c1" cx="91.673" cy="83.619" r="1.6661"/>
                        <circle cx="86.194" cy="81.714" r="1.6661"/>
                        <circle cx="93.461" cy="67.198" r="2.0169"/>
                        <circle cx="88.967" cy="70.857" r="1.3988"/>
                        <circle id ="c1"cx="95.048" cy="77.872" r="1.2986"/>
                        <circle cx="101.4" cy="84.688" r="1.6661"/>
                        <circle cx="94.045" cy="90.267" r=".76406"/>
                        <circle id ="c1" cx="92.609" cy="93.574" r="1.1984"/>
                        <circle cx="97.704" cy="95.729" r="1.4823"/>
                        <circle cx="95.365" cy="99.939" r="1.0814"/>
                        <circle cx="96.05" cy="103.6" r=".89769"/>
                        <circle cx="101.91" cy="103.35" r=".94781"/>
                        <circle cx="102.35" cy="98.836" r=".74735"/>
                        <circle cx="104.84" cy="96.748" r=".73065"/>
                        <circle id ="c1"cx="100.29" cy="114.38" r=".69689"/>
                        <a href="/test"><circle cx="103.4" cy="115.83" r=".96856"/></a>
                        <circle cx="104.07" cy="109.94" r=".53153"/>
                        <circle cx="103.67" cy="91.204" r="1.004"/>
                        <circle cx="113.95" cy="98.125" r="1.193"/>
                        <circle id ="c1" cx="122.11" cy="87.483" r="1.63"/>
                        <circle id ="c1" cx="128.29" cy="87.944" r="1.2402"/>
                        <circle id ="c1" cx="131.83" cy="83.786" r="1.4292"/>
                        <circle cx="131.08" cy="75.471" r="1.6655"/>
                        <circle cx="127.73" cy="68.584" r="1.1339"/>
                        <circle cx="125.51" cy="63.552" r=".89769"/>
                        <circle cx="117.8" cy="56.784" r="1.4528"/>
                        <circle cx="110.49" cy="52.52" r="2.3624"/>
                        <circle cx="103.42" cy="48.906" r="1.1339"/>
                        <circle cx="94.919" cy="49.473" r="1.3702"/>
                        <a class= "a" href="{{ route('login') }}" ><circle id ="c2"cx="98.272" cy="57.042" r="2.0155"/></a>
                        <circle cx="104.59" cy="64.192" r="1.4823"/>
                        <circle cx="111.13" cy="65.094" r="1.6828"/>
                        <circle cx="107.88" cy="58.261" r="1.1984"/>
                        <circle cx="99.976" cy="73.579" r="1.6494"/>
                        <circle cx="108.44" cy="68.685" r=".89769"/>
                        <circle cx="109.85" cy="73.997" r="1.4656"/>
                        <circle cx="105.24" cy="80.746" r=".89769"/>
                        <circle cx="111.35" cy="84.621" r="1.2986"/>
                        <circle cx="117.4" cy="80.779" r=".89769"/>
                        <a href="https://www.google.com/" > <circle id ="c1"cx="119.57" cy="78.474" r="1.165"/></a>
                        <circle cx="112.69" cy="79.676" r="1.332"/>
                        <circle cx="119.24" cy="72.36" r="1.4656"/>
                        <circle cx="125.92" cy="73.162" r=".89769"/>
                        <circle id ="c1"cx="119.55" cy="65.595" r="1.2485"/>
                        </g>
                        </svg>



                {{-- </div> --}}



                {{-- <div class="cajon2 mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </body>
</html>
