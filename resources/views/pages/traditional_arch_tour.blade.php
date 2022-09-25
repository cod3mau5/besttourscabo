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
            background: rgb(246,246,246);
            background: radial-gradient(circle, rgba(246,246,246,1) 32%, rgba(246,246,246,0.6839110644257703) 63%, rgba(219,219,219,0.40940126050420167) 81%, rgba(68,68,68,0.4234068627450981) 100%);
            padding-top: 100px;
            padding-bottom: 100px;
        }
        #traditional_arch_tour .ui.container .father_sticky{
            padding: 0 7px;
        }
        .tour-title {
            text-align: center!important;
            font-family: 'Work Sans', sans-serif;
            background: radial-gradient(circle, var(--main_orange) 10%, var(--secondary_orange) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
            font-size: 42px;
        }
        .tour-title:before{
            bottom: 2px;
            color: #023047;
            content: attr(title);
            left: 9px;
            position: absolute;
            text-shadow: none;
            transform-origin: bottom left;
            transform: skew(20deg) scale(1, 0.95);
            z-index: -1;
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
        #features_price{
            background: #fff;
            padding: 1rem;
            margin: 3rem .3rem;
            border-radius: 0.28571429rem;
            box-shadow: 1px 1px 48px -6px rgba(0,0,0,0.37);
            -webkit-box-shadow: 1px 1px 48px -6px rgba(0,0,0,0.37);
            -moz-box-shadow: 1px 1px 48px -6px rgba(0,0,0,0.37);
        }
        #features_price > .column{
            padding-left: .5rem;
            padding-right: .5rem;
        }
        #features{
            padding-right: 1.3rem;
        }
        #features i{
            font-size: 1.25rem;
            margin-top:.5rem
        }
        #features .row .column{
            padding-right: .77rem;
            padding-left: .77rem;
            text-align: center;
        }

        #duration .column{
            text-align: center
        }
        #duration .column i{
            font-size: 1.5rem;
        }
        #price .column{
            text-align: center;
        }
        #price .card-price{
            text-align: center;
        }
        #price p:nth-child(2){
            position: unset;
            margin-top:10px;
        }
        #price small{
            position: relative;
            bottom: -1.7rem;
            color: #6c757d;
            font-size: 97%;
            line-height: 0;
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
            margin: 0 auto;
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

        .description .title{
            text-align: center;
            padding-left: 10px!important;
            padding-right: 10px!important;
        }
        .description #what_to_know{
            padding-bottom: 1rem;
        }
        .button-container {
            float: right;
            background-color: var(--secondary_orange)!important;
            color: white !important;
            margin-top:30px!important;
        }

        footer {
            padding: 3.5rem 0!important;
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
                position: fixed!important;
                bottom: 7px;
                z-index: 11;
                width: 96%;
                height: 41.3px!important;
                margin: 0 auto!important;
            }
            #price p:nth-child(2){
                position: relative;
                bottom:20px;
                margin-top:0;
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
            <div class="father_sticky">

                <ol class="steps">
                    <li class="current">Details</li>
                    <li class="">Selection</li>
                    <li class="">Date</li>
                </ol>

                <div class="ui stackable grid" id="features_price">

                        <div class="six wide column" id="features">
                            <h5>Features</h5>
                            <div class="ui divider"></div>
                            <div class="ui two column grid">
                                <div class="row">
                                    <div class="column">
                                        <i class="fa-solid fa-fish-fins"></i> <br> food & drinks
                                    </div>
                                    <div class="column">
                                        <i class="fas fa-ticket"></i> <br> electronic voucher
                                    </div>
                                    <div class="column">
                                        <i class="fa-solid fa-bullhorn"></i> <br> guide
                                    </div>
                                    <div class="column">
                                        <i class="fas fa-head-side-mask"></i> <br> sanisitation & safety
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="four wide column" id="duration">
                            <h5>Duration</h5>
                            <div class="ui divider"></div>

                            <div class="column">
                                <i class="fas fa-clock"></i></i><br>
                                <p>2 Hours</p>
                            </div>

                        </div>

                        <div class="six wide column" id="price">
                            <h5>Price</h5>
                            <div class="ui divider"></div>

                                <div class="row">
                                    <div class="column">
                                        <p class="card-price">
                                            <b>$1,250 usd</b>
                                        </p>
                                        <p><small>(per person)</small></p>
                                    </div>
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
                    <h3 class="title">About this tour</h1>

                    <div class="ui styled fluid accordion" id="about_tour">
                        <div class="title">
                        <i class="dropdown icon"></i>
                        Tour description
                        </div>
                        <div class="content">
                        <p class="transition hidden">
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

                    <h3 class="title">What to know before buying</h3>
                    <div class="ui styled fluid accordion" id="what_to_know">
                        <div class="title">
                        <i class="dropdown icon"></i>
                        Tour description
                        </div>
                        <div class="content">
                        <p class="transition hidden">
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



                    <button class="ui right labeled icon button-container button">
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
