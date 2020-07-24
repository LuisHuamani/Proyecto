<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="{{ asset('css/carrusel.css') }}">
</head>
@extends('menu')
<body>
    <h1 class="texto">Los productos mas vendidos:</h1>
    <div class="main">
        <div class="slides">
            <div>
                <h1 class="timagen">La tarjeta grafica de escritorio mas potente</h1>
                <img src="./img/grafica.png" alt="">
            </div>
           
            <img src="./img/monitor.png" alt="">
            <img src="./img/placa.png" alt="">
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="{{ asset('js/jquery.slides.js') }}"></script>
    <script>
        $(function(){
        $(".slides").slidesjs({
        play: {
        active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 2000,
        // [number] Time spent on each slide in milliseconds.
        auto: true,
        // [boolean] Start playing the slideshow on load.
        swap: true,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
    </script>
</body>
</html>