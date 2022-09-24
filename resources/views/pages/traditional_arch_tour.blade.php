@extends('pages.layouts.master')
@section('header_scripts')
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@900&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <style>
        :root{
            --main_blue:#023047;
          --main_orange:#ffb703;
          --secondary_orange:#ff7e00;
        }
        main{
            margin-top: 115px;
        }
        .tour-title {
            text-align: center!important;
            font-family: 'Work Sans', sans-serif;
            background: radial-gradient(circle, var(--main_orange) 10%, var(--secondary_orange) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 0;
            font-size: 42px;
            background-color: var(--main_blue);
        }
        .grid-gallery > div{
            width: 100%;
            height: 250px;
        }

        .grid-gallery > div{
            background-size: cover;
        }

        .shadow-image {
            bottom: 0;
            z-index: 2;
            width: 100%;
            height: 70px;
            position: absolute;
            background-image: linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,.77));
        }
        .swiper-pagination-bullet{
            background:#FFF;
            opacity:1;
        }
        .swiper-pagination-bullet-active{
            background: var(--main_orange)!important;
        }
        .swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction{
            bottom: 1px !important;
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
                padding-top: 1rem;
                margin-bottom:2rem;
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
            z-index: 6;
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
            z-index: 5;
        }

        .current ~ li:after {
        background-color: #555;
        }

        .card-price {
            display: inline-block;
            width: auto;
            height: 38px;
            background-color: #6ab070;
            -webkit-border-radius: 3px 4px 4px 3px;
            -moz-border-radius: 3px 4px 4px 3px;
            border-radius: 3px 4px 4px 3px;
            border-left: 1px solid #6ab070;

            /* This makes room for the triangle */
            margin-left: 19px;
            position: relative;
            color: white;
            font-weight: 300;
            font-size: 22px;
            line-height: 38px;
            padding: 0 10px 0 10px;
        }

        /* Makes the triangle */
        .card-price:before {
            content: "";
            position: absolute;
            display: block;
            left: -19px;
            width: 0;
            height: 0;
            border-top: 19px solid transparent;
            border-bottom: 19px solid transparent;
            border-right: 19px solid #6ab070;
        }

        /* Makes the circle */
        .card-price:after {
            content: "";
            background-color: white;
            border-radius: 50%;
            width: 4px;
            height: 4px;
            display: block;
            position: absolute;
            left: -9px;
            top: 17px;
        }

        .description h1{
            text-align: center;
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

            <h2 class="tour-title">TRADITIONAL ARCH TOUR</h2>

            <div class="swiper mySwiper">
                <div class="grid-gallery swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.webp')">
                        <div class="shadow-image"></div>
                    </div>
                    <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')">
                        <div class="shadow-image"></div>
                    </div>
                    <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')">
                        <div class="shadow-image"></div>
                    </div>
                    <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')">
                        <div class="shadow-image"></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <ol class="steps">
                <li class="current">Details</li>
                <li class="">Selection</li>
                <li class="">Date</li>
            </ol>
            <div class="ui two column grid">
                <div class="row">
                    <div class="column">Amenities</div>
                    <div class="column">
                        Price
                        <p class="card-price">1250 р.</p>
                    </div>
                </div>
            </div>
            <div class="description">
                {{-- <h1>Descripción</h1>
                <p class="tour-description">
                    Uno de los Paseos Más Sencillos y Agradables de Cabo!...<br>
                    Durante este paseo visitamos la famosa formación rocosa de Cabo San Lucas "El Arco", junto con otros puntos atractivos de esa zona como lo son: la colonia de leones marinos, La Roca del Pelícano, El Dedo de Neptuno, La Playa del Amor y del Divorcio y sus alrededores. Tendrá la oportunidad de observar algunas de las especies marinas que habitan este pedacito de mar.<br><br>
                    Una vez que el paseo finaliza, usted tendrá la opción si lo desea, de quedarse el tiempo que guste en la Playa del Amor, donde podrá caminar, nadar o asolearse. Usted podrá regresar en cualquiera de las lanchas que vienen de regreso a la marina cada hora, la última que es a las 5 o 6pm dependiendo la temporada.
                </p> --}}
                <h1>About this tour</h1>
                <p class="tour-description">

                </p>
                <div class="ui styled fluid accordion">
                    <div class="title active">
                      <i class="dropdown icon"></i>
                      Tour description
                    </div>
                    <div class="content active">
                      <p class="transition visible">
                        One of the Easiest and Most Pleasant Tours in Cabo!...<br>
                        During this tour we visit the famous rock formation of Cabo San Lucas "El Arco", along with other attractive points in that area such as: the sea lion colony, Pelican Rock, Neptune's Finger, Love Beach and of Divorce and its surroundings. You will have the opportunity to observe some of the marine species that inhabit this little piece of the sea.<br><br>
                        Once the tour ends, you will have the option, if you wish, to stay as long as you like at Playa del Amor, where you can walk, swim or sunbathe. You can return in any of the boats that come back to the marina every hour, the last one being at 5 or 6pm depending on the season.</p>
                    </div>
                    <div class="title">
                      <i class="dropdown icon"></i>
                      What kinds of dogs are there?
                    </div>
                    <div class="content">
                      <p class="transition hidden">There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
                    </div>
                    <div class="title">
                      <i class="dropdown icon"></i>
                      How do you acquire a dog?
                    </div>
                    <div class="content">
                      <p class="transition hidden">Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
                      <p class="transition hidden">A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
                    </div>
                  </div>
            </div>

            <div class="button-container">
                <button class="ui right labeled icon button">
                    <i class="right arrow icon"></i>
                    Next Step
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
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.webp')">
                    <div class="shadow-image"></div>
                </div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')">
                    <div class="shadow-image"></div>
                </div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')">
                    <div class="shadow-image"></div>
                </div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')">
                    <div class="shadow-image"></div>
                </div>
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
            $('.ui.accordion').accordion();
        });


    </script>
@endsection
