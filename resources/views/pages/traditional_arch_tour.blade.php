@extends('pages.layouts.master')
@section('header_scripts')
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <style>
        :root{
            --main_blue:#023047;
          --main_orange:#ffb703;
        }
        main{
            margin-top: 115px;
        }
        .grid-gallery > div{
            width: 100%;
            height: 250px;
        }

        .grid-gallery > div{
            background-size: cover;
        }

        @media(min-width: 920px){
            .grid-gallery > div{
                width: unset;
                height: unset;
            }
            .grid-gallery{
                display: grid;
                grid-template-columns: 3fr 1fr 1fr;
                grid-template-rows: 6fr 3.5fr;
                grid-gap: 7px;
                height: 360px;
                font-size: 30px;
                margin-left: auto;
                margin-right: auto;
            }

            .grid-gallery > div:nth-child(1){
                grid-row-start: 1;
                grid-row-end: 3;
            }
            .grid-gallery > div:nth-child(2){
                grid-column-start: 2;
                grid-column-end: 4
            }
            .tour-title {
                text-align: center;
                padding-top: 1rem!important;
                margin-bottom:2rem!important;
            }

        }
      /*====================================
          STEPS
      ====================================*/
        .steps {
            background-color: white;
            position: relative;
            overflow: hidden;
            counter-reset: wizard;
            width: 100%;
            margin: 10px auto;
        }

        .steps li {
            position: relative;
            float: left;
            width: 33.3%;
            text-align: center;
            color: var(--main_blue);
            font-weight: bolder;
        }

        .current ~ li {
            color: black;
        }

        .steps li:before {
            font-weight: bolder;
            counter-increment: wizard;
            content: counter(wizard);
            display: block;
            color: var(--main_blue);
            background-color: var(--main_orange);
            border: 2px solid var(--main_orange);
            text-align: center;
            width: 2em;
            height: 2em;
            line-height: 2em;
            border-radius: 2em;
            position: relative;
            left: 50%;
            margin-bottom: 1em;
            margin-left: -1em;
            z-index: 100;
        }
        .current ~ li:before {
            background-color: var(--main_blue);
            color: #FFF;
            border-color: var(--main_blue);
        }

        .steps li + li:after {
            content: "";
            display: block;
            width: 100%;
            background-color: var(--main_orange);
            height: 2px;
            position: absolute;
            left: -50%;
            top: 1em;
            z-index: 10;
        }

        .current ~ li:after {
        background-color: #555;
        }

        @media only screen and (min-width:1200px) {}
        @media only screen and (min-width:1100px) {}
        @media only screen and (max-width:920px) {}
        @media only screen and (max-width:840px) {}
        @media only screen and (max-width:720px) {
            main > .ui.container{
                margin-left:0px!important;
                margin-right:0px!important;
            }
            .button-container{
                bottom: 10px;
                padding: 10px;
                position: fixed;
                margin: 0!important;
                width: 100%;
                z-index: 11;
            }

            .button-container button{
                background-color: var(--main_blue)!important;
                color: white !important;;
                width: 100%;
                box-shadow: 3px 3px 29px 11px #FFF!important;
                -webkit-box-shadow: 3px 3px 29px 11px #FFF!important;
                -moz-box-shadow: 3px 3px 29px 11px #FFF!important;
            }
        }
        @media only screen and (max-width:480px) {}
        @media only screen and (max-width:320px) {}

    </style>
@endsection
@section('content')
    <main id="traditional_arch_tour">
        <div class="ui container">


            <div class="swiper mySwiper">
                <div class="grid-gallery swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.webp')"></div>
                    <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')"></div>
                    <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')"></div>
                    <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <ol class="steps">
                <li class="current">Details</li>
                <li class="">Selection</li>
                <li class="">Date</li>
            </ol>

            <h2 class="tour-title">TRADITIONAL ARCH TOUR</h2>


            <div class="description">
                {{-- <h1>Descripción</h1>
                <p class="tour-description">
                    Uno de los Paseos Más Sencillos y Agradables de Cabo!...<br>
                    Durante este paseo visitamos la famosa formación rocosa de Cabo San Lucas "El Arco", junto con otros puntos atractivos de esa zona como lo son: la colonia de leones marinos, La Roca del Pelícano, El Dedo de Neptuno, La Playa del Amor y del Divorcio y sus alrededores. Tendrá la oportunidad de observar algunas de las especies marinas que habitan este pedacito de mar.<br><br>
                    Una vez que el paseo finaliza, usted tendrá la opción si lo desea, de quedarse el tiempo que guste en la Playa del Amor, donde podrá caminar, nadar o asolearse. Usted podrá regresar en cualquiera de las lanchas que vienen de regreso a la marina cada hora, la última que es a las 5 o 6pm dependiendo la temporada.
                </p> --}}
                <h1>Description</h1>
                <p class="tour-description">
                    One of the Easiest and Most Pleasant Tours in Cabo!...<br>
                    During this tour we visit the famous rock formation of Cabo San Lucas "El Arco", along with other attractive points in that area such as: the sea lion colony, Pelican Rock, Neptune's Finger, Love Beach and of Divorce and its surroundings. You will have the opportunity to observe some of the marine species that inhabit this little piece of the sea.<br><br>
                    Once the tour ends, you will have the option, if you wish, to stay as long as you like at Playa del Amor, where you can walk, swim or sunbathe. You can return in any of the boats that come back to the marina every hour, the last one being at 5 or 6pm depending on the season.
                </p>
            </div>

            <div class="button-container">
                <button class="ui right labeled icon button">
                    <i class="right arrow icon"></i>
                    Next
                </button>
            </div>

        </div>
    </main>
@endsection

@section('footer_scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper;

        function mobil() {
            $('.grid-gallery').html(`
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.webp')"></div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')"></div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')"></div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')"></div>
            `);
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
                },
            });

        }

        function desktop() {
            var swiper = new Swiper(".mySwiper");
            swiper.destroy();
            $('.grid-gallery').html(`
                <div style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.webp')"></div>
                <div style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')"></div>
                <div style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')"></div>
                <div style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')"></div>
            `);
        }

        var bounds = [
            {min:0,max:920,func:mobil},
            {min:921,max:4400,func:desktop},
        ];

        var resizeFn = function(){
            var lastBoundry; // cache the last boundry used
            return function(){
                var width = window.innerWidth;
                var boundry, min, max;
                for(var i=0; i<bounds.length; i++){
                    boundry = bounds[i];
                    min = boundry.min || Number.MIN_VALUE;
                    max = boundry.max || Number.MAX_VALUE;
                    if(width > min && width < max
                    && lastBoundry !== boundry){
                        lastBoundry = boundry;
                        return boundry.func.call(boundry);
                    }
                }
            }
        };
        $(window).resize(resizeFn());
        $(document).ready(function(){
            var width = window.innerWidth;
            if(width < 921){
                $(window).trigger('resize');
            }
        });


    </script>
@endsection
