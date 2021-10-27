<style>
    .tuerca1{
    position: absolute;
    height: 200px;
    z-index: 0;
    opacity: 40%;
    top:40px;
    left: -100px;
    animation-name: rotation1;
        animation-duration: 10s;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
}
@keyframes rotation1 {
            0% {
             transform:rotate(0deg);
                }
             100% {
             transform:rotate(360deg);
                }
            }

.tuerca2{
    position: absolute;
    height: 300px;
    z-index: -1;
    opacity: 14%;
    top:370px;
    animation-name: rotation2;
        animation-duration: 38s;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
}
@keyframes rotation2 {
            0% {
             transform:rotate(0deg);
                }
             100% {
             transform:rotate(-360deg);
                }
            }

.tuerca3{
    position: absolute;
    height: 400px;
    z-index: -1;
    opacity: 25%;
    top:770px;
    left: 100px;
    animation-name: rotation3;
        animation-duration: 40s;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
}

@keyframes rotation3 {
            0% {
             transform:rotate(0deg);
                }
             100% {
             transform:rotate(360deg);
                }
            }
.tuerca4{
    position: absolute;
    height: 500px;
    z-index: -1;
    opacity: 34%;
    top:1070px;
    right: 120px;
    animation-name: rotation4;
        animation-duration: 65s;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
}
@keyframes rotation4 {
            0% {
             transform:rotate(0deg);
                }
             100% {
             transform:rotate(-360deg);
                }
            }

.tuerca5{
    position: absolute;
    height: 315px;
    z-index: -1;
    opacity: 14%;
    top:1483.5px;
    right: 401px;
    animation-name: rotation5;
        animation-duration: 50s;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
}

@keyframes rotation5 {
            0% {
             transform:rotate(0deg);
                }
             100% {
             transform:rotate(360deg);
                }
            }

</style>



<img class="tuerca1" src="{{ asset('images/Tuerca.png')}}">
<img class="tuerca2" src="{{ asset('images/Tuerca.png')}}">
<img class="tuerca3" src="{{ asset('images/Tuerca.png')}}">
<img class="tuerca4" src="{{ asset('images/Tuerca.png')}}">
<img class="tuerca5" src="{{ asset('images/Tuerca.png')}}">
