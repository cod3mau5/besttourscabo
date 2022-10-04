@extends('pages.layouts.master')
@section('header_scripts')
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@900&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5.2.2/dist/photoswipe.css">
    <style>
        :root{
            --main_blue:#023047;
            --main_orange:#ffb703;
            --secondary_orange:#ff7e00;
        }
                /* helpers */
                .hidden{
            display: none!important;
        }
        .input-error{
            border-color: #9e1317!important;
        }
        .input-success{
            border-color: #016936!important;
        }
        .disabled{
            color: #7F7F7F!important;
            font-weight: 100!important;
        }
        .p-1 {
            padding: 1rem !important;
        }
        .p-2 {
            padding: 2rem !important;
        }
        .mt-4 {
            margin-top: 4rem !important;
        }
        .mt-3 {
            margin-top: 3rem !important;
        }
        .mt-2 {
            margin-top: 2rem !important;
        }
        .mt-1 {
            margin-top: 1rem !important;
        }
        .ml-2 {
            margin-left: 2rem !important;
        }
        .mb-0 {
            margin-bottom: 0 !important;
        }
        .m-auto {
            margin: auto !important;
        }
        .h-100 {
            height: 100% !important;
        }
        .d-flex {
            display: flex !important;
        }
        .polarized {
            background-color: rgba(0, 0, 0, 0.65);
        }
        .h-fit {
            height: fit-content;
        }
        .w-100 {
            width: 100%;
        }
        .date-input {
            cursor: pointer;
        }
        .float-right{
            float: right!important;
        }
        main{
            background: rgb(246,246,246);
            background: radial-gradient(circle, rgba(246,246,246,1) 32%, rgba(246,246,246,0.6839110644257703) 63%, rgba(219,219,219,0.40940126050420167) 81%, rgba(68,68,68,0.4234068627450981) 100%);
            padding-top: 100px;
            padding-bottom: 80px;
            min-height: 100%;
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
            background-size: cover;
        }

        .grid-gallery > a > div{
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
            .grid-gallery > a{
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

            .grid-gallery > a:nth-child(1){
                grid-row-start: 1;
                grid-row-end: 3;
            }
            .grid-gallery > a:nth-child(2){
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
            position: relative;
            bottom: 1.3em;
        }
        #price small{
            position: relative;
            bottom: -1.7rem;
            color: #6c757d;
            font-size: 97%;
            line-height: 0;
        }
        #price .ui.orange.label{
            font-size: 21px;
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
        #features_price .up.divider{
                display:none;
        }
        #features_price h5{
            margin-top:0;
            text-align: left;
        }
        #location p{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #location p small {
            display: contents;
        }
        #location p i{
            margin:0 1rem;
            font-size: 3.4rem;
        }

        .filler{
            height: 100%;
            width: 100%;
        }

        form select.dropdown{
            background-color: whitesmoke;
        }
        #location:hover{
            cursor: pointer;
        }

        .image.content{
            height: 80vh;
            padding-top: 75px!important;
        }
        /*====================================
            GOOGLE MAP
        ====================================*/
        #map {
            height: 100%;
            width: 100%;
        }


        .ui.dropdown{
            margin: 0;
            max-width: 100%;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            outline: 0;
            -webkit-tap-highlight-color: rgba(255,255,255,0);
            text-align: left;
            line-height: 1.21428571em;
            font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
            padding: 0.67857143em 1em;
            background: #fff;
            border: 1px solid rgba(34,36,38,.15);
            color: rgba(0,0,0,.87);
            border-radius: 0.28571429rem;
            -webkit-transition: border-color .1s ease,-webkit-box-shadow .1s ease;
            transition: border-color .1s ease,-webkit-box-shadow .1s ease;
            transition: box-shadow .1s ease,border-color .1s ease;
            transition: box-shadow .1s ease,border-color .1s ease,-webkit-box-shadow .1s ease;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        @media only screen and (min-width:1200px) {}
        @media only screen and (min-width:1100px) {
            .image.content{
                height: 80vh;
                padding-top:115px!important;
            }
        }
        @media only screen and (max-width:920px) {}
        @media only screen and (max-width:840px) {}
        @media only screen and (max-width:767px) {
            footer {
                display:none;
            }
            #features_price > .column{
                padding-top: 0!important;
                padding-bottom: 0!important;
            }

            main > .ui.container{
                margin-left:0px!important;
                margin-right:0px!important;
            }

            .button-container{
                position: fixed!important;
                bottom: 7px;
                z-index: 11;
                width: calc(100% - 14px);
                height: 41.3px!important;
                margin: 0 auto!important;
            }
            #price p:nth-child(2){
                position: relative;
                bottom:20px;
                margin-top:0;
            }
        }
        @media only screen and (max-width:480px) {
            #features_price h5{
                margin-top:1rem;
                text-align: center;
            }
            #features_price .down.divider{
                display:none;
            }

            #features_price .up.divider{
                display:block;
            }

        }
        @media only screen and (max-width: 767px){
            .ui.modal .content>.description{
                padding-top: 75px!important;
            }
        }
        @media only screen and (max-width:320px) {}

    </style>
@endsection
@section('content')

    <main id="traditional_arch_tour">
        <div class="ui container">

            <h2 class="tour-title" v-show="step==1">TRADITIONAL ARCH TOUR</h2>

            <div class="swiper mySwiper" v-show="step==1">
                <div class="grid-gallery swiper-wrapper pswp-gallery" id="my-gallery">

                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_1.webp')}}"
                      data-pswp-width="950"
                      data-pswp-height="683"
                      target="_blank">
                        <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.webp')"></div>
                    </a>

                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_2.jpg')}}"
                      data-pswp-width="669"
                      data-pswp-height="446"
                      target="_blank">
                        <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')"></div>
                    </a>

                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_3.jpg')}}"
                        data-pswp-width="669"
                        data-pswp-height="446"
                      target="_blank">
                        <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')"></div>
                    </a>

                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_4.jpg')}}"
                        data-pswp-width="669"
                        data-pswp-height="446"
                      target="_blank">
                        <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')"></div>
                    </a>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="father_sticky">

                <ol class="steps">
                    <li :class="step==1 ? 'current' : ''" @click="step=1">Details</li>
                    <li :class="step==2 ? 'current' : ''" @click="step=2">Date</li>
                    <li :class="step==3 ? 'current' : ''" @click="step=3">Payment</li>
                </ol>

                <div class="ui stackable grid" id="features_price" v-show="step==1">

                        <div class="six wide column" id="features">
                            <div class="ui up divider"></div>
                            <h5>Features</h5>
                            <div class="ui down divider"></div>
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
                                        <i class="fas fa-head-side-mask"></i> <br> sanitization & safety
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="four wide column" id="duration">
                            <div class="ui up divider"></div>
                            <h5>Duration</h5>
                            <div class="ui down divider"></div>

                            <div class="column">
                                <i class="fas fa-clock"></i></i><br>
                                <p>2 Hours</p>
                            </div>

                        </div>

                        <div class="six wide column" id="price">
                            <div class="ui up divider"></div>
                            <h5>Price</h5>
                            <div class="ui down divider"></div>

                            <div class="row">
                                <div class="column">
                                    <div class="ui tag labels">
                                        <a class="ui orange label" style="line-height: .5;">
                                            $21.89 usd<br>
                                            <span style="font-size: 11px;">(per person)</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="description" v-show="step==1">
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
                            During this tour we visit the famous rock formation of Cabo San Lucas "El Arco", along with other attractive points in that area such as: the sea lion colony, Pelican Rock, Neptune's Finger, Love Beach and of Divorce and its surroundings. You will have the opportunity to observe some marine species that inhabit this little piece of the sea.<br><br>
                            Once the tour ends, you will have the option, if you wish, to stay as long as you like at Playa del Amor, where you can walk, swim or sunbathe. You can return in any of the boats that come back to the marina every hour, the last one being at 5 or 6pm depending on the season.
                        </p>
                        </div>
                        <div class="title">
                        <i class="dropdown icon"></i>
                        What kinds of dogs are there?
                        </div>
                        <div class="content">
                        <p class="transition hidden">
                            There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.
                        </p>
                        </div>
                        <div class="title">
                        <i class="dropdown icon"></i>
                        How do you acquire a dog?
                        </div>
                        <div class="content">
                        <p class="transition hidden">
                            Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.
                        </p>
                        <p class="transition hidden">
                            A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.
                        </p>
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
                            During this tour we visit the famous rock formation of Cabo San Lucas "El Arco", along with other attractive points in that area such as: the sea lion colony, Pelican Rock, Neptune's Finger, Love Beach and of Divorce and its surroundings. You will have the opportunity to observe some marine species that inhabit this little piece of the sea.<br><br>
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
                <div class="ui segment" id="location" v-show="step==1"  @click="openModal()">
                    <div class="ui top attached label text centered">TOUR LOCATION</div>
                    <p>
                        <i class="fa-solid fa-map-location-dot"></i>
                        see the location of the tour on the map <br>
                        <small>Cabo San Lucas Baja California Sur, México</small>
                    </p>
                </div>

                <form method="post" action="">
                    <div class="ui grid" v-show="step==2">
                        <div class="eight wide column">
                            <div class="field">
                                <label>Date</label>
                                <div class="ui calendar" id="date_calendar">
                                    <div class="ui input left icon w-100">
                                      <i class="calendar icon"></i>
                                      <input type="text" placeholder="Date">
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="eight wide column">
                            <div class="field">
                                <label>Time</label>
                                <div class="ui calendar" id="time_calendar">
                                    <div class="ui input left icon w-100">
                                      <i class="time icon"></i>
                                      <input type="text" placeholder="Time">
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="eight wide column">
                            <div class="field">
                                <label>Adults</label>
                                <select class="ui fluid dropdown">
                                    <option v-for="(item, index) in adults" :value="item">
                                        @{{ item }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="eight wide column">
                            <div class="field">
                                <label>Kids</label>
                                <select class="ui fluid dropdown">
                                    <option v-for="(item, index) in adults" :value="item">
                                        @{{ item }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>


                <div class="ui modal">
                    <i class="close icon"></i>
                    <div class="header">
                        Tour location
                    </div>
                    <div class="image content" id="map-container">
                        <div class="description">
                            <div id="map"></div>
                        {{-- A description can appear on the right --}}
                        </div>
                    </div>
                    <div class="actions">
                        <div class="ui button" @click="closeMap">OK</div>
                    </div>
                </div>

                <button class="ui right labeled icon button-container button" @click="nextStep" type="button">
                    <i class="right arrow icon"></i>
                    Next Step
                </button>


            </div>
        </div>
    </main>
@endsection

@section('footer_scripts')

    <script>
        function initMap() {
            var uluru = {lat: 22.879869, lng: -109.906256};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                title: 'Best Tours'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl3QdpavEMHbNxiU9AqmO577Hir0EZ_Ho&callback=initMap"
    async defer></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper;

        function mobil() {
            $('.grid-gallery').html(`
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.webp')">
                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_1.webp')}}"
                      data-pswp-width="950"
                      data-pswp-height="683"
                      target="_blank"
                      style="min-width:100%;min-height:100%">
                        <div class="filler"></div>
                        <div class="shadow-image"></div>
                    </a>
                </div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')">
                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_2.jpg')}}"
                      data-pswp-width="669"
                      data-pswp-height="446"
                      target="_blank"
                      style="min-width:100%;min-height:100%">
                        <div class="filler"></div>
                        <div class="shadow-image"></div>
                    </a>
                </div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')">
                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_3.jpg')}}"
                        data-pswp-width="669"
                        data-pswp-height="446"
                      target="_blank"
                      style="min-width:100%;min-height:100%">
                        <div class="filler"></div>
                        <div class="shadow-image"></div>
                    </a>
                </div>
                <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')">
                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_4.jpg')}}"
                        data-pswp-width="669"
                        data-pswp-height="446"
                      target="_blank"
                      style="min-width:100%;min-height:100%">
                        <div class="filler"></div>
                        <div class="shadow-image"></div>
                    </a>
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

                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_1.webp')}}"
                      data-pswp-width="950"
                      data-pswp-height="683"
                      target="_blank">
                        <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.webp')"></div>
                    </a>

                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_2.jpg')}}"
                      data-pswp-width="669"
                      data-pswp-height="446"
                      target="_blank">
                        <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')"></div>
                    </a>

                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_3.jpg')}}"
                        data-pswp-width="669"
                        data-pswp-height="446"
                      target="_blank">
                        <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')"></div>
                    </a>

                    <a href="{{url('assets/img/tours/traditional_arch_tour/img_4.jpg')}}"
                        data-pswp-width="669"
                        data-pswp-height="446"
                      target="_blank">
                        <div class="swiper-slide" style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')"></div>
                    </a>

            `);
        }

        var bounds = [
            {min:0,max:920,func:mobil},
            {min:921,max:4400,func:desktop},
        ];

        let resizeFn = function () {
            var lastBoundry; // cache the last boundry used
            return function () {
                var width = window.innerWidth;
                var boundry, min, max;
                for (var i = 0; i < bounds.length; i++) {
                    boundry = bounds[i];
                    min = boundry.min || Number.MIN_VALUE;
                    max = boundry.max || Number.MAX_VALUE;
                    if (width > min && width < max
                        && lastBoundry !== boundry) {
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

    {{-- PhotoSwipeLightbox --}}
    <script type="module">
        import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe/dist/photoswipe-lightbox.esm.js';
        const lightbox = new PhotoSwipeLightbox({
            gallery: '#my-gallery',
            children: 'a',

            // Adjust thumbnail selector,
            // (for opening/closing zoom transition)
            thumbSelector: 'a',
            pswpModule: () => import('https://unpkg.com/photoswipe')
        });
        lightbox.addFilter('domItemData', (itemData, element, linkEl) => {
            if (linkEl) {
                console.log(linkEl.dataset.pswpWidth);
                const sizeAttr = linkEl.dataset.pswpWidth;

                itemData.src = linkEl.href;
                itemData.w = Number(sizeAttr.split('x')[0]);
                itemData.h = Number(sizeAttr.split('x')[1]);
                itemData.msrc = linkEl.dataset.thumbSrc;
                itemData.thumbCropped = true;
            }

            return itemData;
        });

        lightbox.init();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>

    {{-- VueJs 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                page: 'loading',
                step:1,
                adults:30,
                kids:30,
                routes:{
                    // {{-- home:'{{ route("inicio","1") }}', --}}
                    // {{-- gallery:'{{ route("gallery","1") }}', --}}
                    // {{-- contact_us:'{{ route("contact-us","1") }}', --}}
                    // {{-- book_now:'{{ route("book-now","1") }}', --}}
                },
                // {{-- text: @json($language) --}}
            },
            beforeMount(){
                this.page='loading';
            },
            mounted() {
                this.page='loaded';
                $('#date_calendar').calendar({type: 'date'});
                $('#time_calendar').calendar({type: 'time'});
            },
            methods:{
                nextStep: function(e){
                    e.preventDefault();
                    this.page='loading';
                    this.step !== 3 ? this.step=this.step+1 : this.step=this.step;
                    $('#inline_calendar').calendar();
                    this.page='loaded';
                },
                openModal: function(){
                    $('.ui.modal').modal({centered: false}).modal('show');
                    return false;
                },
                closeMap(){
                    $('.ui.modal').modal('hide');
                }
            }
        })
    </script>

@endsection
