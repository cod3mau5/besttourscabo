@extends('pages.layouts.master')
@section('header_scripts')
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@900&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5.2.2/dist/photoswipe.css">

    {{-- <link href="assets/css/mobiscroll.jquery.min.css" rel="stylesheet" /> --}}

    <!-- send referral link modal -->
    <link rel="stylesheet" href="css/intlTelInput.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- send referral link modal -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.js"></script>

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
        .text-center{
            text-align: center!important;
        }
        .px-0{
            padding-left: 0!important;
            padding-right: 0!important
        }
        .py-0{
            padding-top: 0!important;
            padding-bottom: 0!important;
        }
        .p-1 {
            padding: 1rem !important;
        }
        .p-2 {
            padding: 2rem !important;
        }
        .my-0{
            margin-top: 0!important;
            margin-bottom: 0!important;
        }
        .mx-0{
            margin-left: 0!important;
            margin-right: 0!important;
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
        #traditional_arch_tour .ui.container {
            padding: 1rem 0;
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
            cursor: pointer!important;
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
        #back-button-container{
            float: left;
            background-color: var(--main_blue)!important;
            color: white !important;
            padding-left: 2.7rem!important;
            padding-top: 0.6rem;
            padding-bottom: 0.6rem;
            margin-bottom: 1.5rem;
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


        .ui.dropdown, input{
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
            form .ui.grid{
                padding-left: 0.6rem!important;
                padding-right: 0.6rem!important;
            }
            .ui.grid>.column:not(.row), .ui.grid>.row>.column{
                padding-left: .25rem!important;
                padding-right: .25rem!important;
            }
        }
        @media only screen and (max-width:320px) {}
        .mbsc-calendar-cell.mbsc-flex-1-0-0.mbsc-calendar-day.mbsc-ios.mbsc-ltr.mbsc-hb > div:nth-child(1),
        .mbsc-scroller-wheel-item.mbsc-ios.mbsc-ltr.xxxxmbsc-scroller-wheel-item-2d > div:nth-child(1),
        .mbsc-scroller-wheel-item.mbsc-ios.mbsc-ltr.mbsc-scroller-wheel-item-2d.mbsc-selected > div:nth-child(1),
        .mbsc-calendar-cell.mbsc-flex-1-0-0.mbsc-calendar-day.mbsc-ios.mbsc-ltr > div:nth-child(1),
        .mbsc-calendar-cell.mbsc-flex-1-0-0.mbsc-calendar-day.mbsc-material.mbsc-ltr > div:nth-child(1){
            display: none !important;
        }
        #trial-message{
            display: none !important;
        }

        #paypal-button-container{
            text-align: center;
        }
        #paypal-button{
            margin: 1.3rem;
        }
        .field .iti{
            width: 100%!important;
        }
    </style>

@endsection
@section('content')

    <main id="traditional_arch_tour">
        <div class="ui container">


            <h2 class="tour-title" v-show="step==1">@{{tour.name}}</h2>

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
                    <li :class="step==1 ? 'current' : ''" @click="changeStep(1)">Details</li>
                    <li :class="step==2 ? 'current' : ''" @click="changeStep(2)">Date</li>
                    <li :class="step==3 ? 'current' : ''" @click="changeStep(3)">Payment</li>
                </ol>

                <div class="ui sixteen column grid">
                    <div class="row">
                        <button class="ui left labeled icon button" id="back-button-container" V-show="step!==1" @click="backStep" type="button">
                            <i class="left arrow icon"></i>
                            Back
                        </button>
                    </div>
                </div>

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
                                            $@{{tour.price}} usd<br>
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

                <form method="post" action="" v-show="step==2" id="clientInfo">
                    <div class="ui grid" style="justify-content: center">

                        <div class="eight wide column">
                            <div class="field">
                                <label>Tour date</label><br>
                                <input class="w-100"
                                        id="datepicker"
                                        name="datepicker"
                                        type="none"
                                        inputmode="none"
                                        placeholder="Please select the date..."
                                        v-model="client.date"

                                >
                            </div>
                            {{-- <input id="date_calendar" class="w-100" placeholder="Please select date..." /> --}}
                        </div>
                        <div class="eight wide column">
                            <div class="field">
                                <label>Tour time</label><br>
                                <input class="ui calendar w-100 timepicker"
                                        type="none"
                                        inputmode="none"
                                        id="timepicker"
                                        placeholder="Please select time..."
                                        v-model="client.time"

                                >
                            </div>
                        </div>
                        <div class="eight wide column">
                            <div class="field">
                                <label>Adults</label>
                                <select class="ui fluid dropdown" v-model="client.adults" name="adults">
                                    <option v-for="(item, index) in tour.adults" :value="item">
                                        @{{ item }}
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="eight wide column">
                            <div class="field">
                                <label>Kids</label>
                                <select class="ui fluid dropdown" v-model="client.kids" @change="addKidAge" name="kids">
                                    <option value="0" selected="selected">0</option>
                                    <option v-for="(item, index) in tour.kids" :value="item">
                                        @{{ item }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="ui stackable grid" style="justify-content: center">
                        <div class="three wide column" v-for="(item, index) in kidsAges" v-if="client.kids > 0">
                            <div class="field">
                                <label>Age of kid @{{ index +1 }}</label>
                                <select class="ui fluid dropdown" v-model="item.age" name="kid">
                                    <option value="0" selected="selected">0</option>
                                    <option v-for="(item, index) in tour.maxAge" :value="item">
                                        @{{ item }}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="ui grid" style="justify-content: center">
                        <pre>@{{ $data.kidsAges }}</pre>
                    </div> --}}
                    <div class="ui grid" style="justify-content: center">
                        <div class="eight wide column">
                            <div class="field">
                                <label>Phone number</label><br>
                                <input class="w-100"
                                        type="tel"
                                        name="phone"
                                        id="phone"
                                        v-model="client.phone"
                                        @keyup="checkPhoneLength"
                                >
                            </div>
                        </div>
                    </div>
                </form>

                <div v-show="step==3">
                        <div  class="ui cards" style="justify-content: center">
                            <div class="card">
                              <div class="content">
                                <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
                                <div class="">
                                  @{{tour.name}}
                                </div>
                                <div class="meta">
                                  Friends of Veronika
                                </div>
                                <div class="description">
                                  Elliot requested permission to view your contact details
                                </div>
                              </div>
                              <div class="extra content">
                                <div class="ui two buttons">
                                  <h2 class="text-center">$ @{{tour.total}} USD</h2>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div id="paypal-button-container">
                            <div id="paypal-button" class="text-center"></div>
                        </div>
                </div>

                <div class="ui modal" v-show="step==1">
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

                <button class="ui right labeled icon button-container button"
                        V-show="step!==3"
                        @click="nextStep"
                        type="button"
                        id="submitButton"
                >
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

    {{-- mobiscroll datepicker --}}
    {{-- <script src="assets/js/mobiscroll.jquery.min.js"></script> --}}

    {{-- timepicker --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

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

    {{-- PAYPAL INTEGRATION --}}
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&locale=en_US&currency=USD"></script>
    <script>

    </script>

    {{-- VueJs 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                page: 'loading',
                step:1,
                tour:{
                    name: 'TRADITIONAL ARCH TOUR',
                    price:29.97,
                    total:'',
                    adults:30,
                    kids:30,
                    maxAge:18
                },
                client: {
                    date:'',
                    time:'',
                    adults:'',
                    kids:'',
                    phone:'',
                },
                kidsAges:[],
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

                const datePicker = MCDatepicker.create({
                    el: '#datepicker',
                    minDate: new Date(),
                    bodyType: 'modal',
                    dateFormat: 'yyyy-mm-dd',
                    theme: {
                        theme_color: '#023047'
                    }
                });
                datePicker.onSelect((date, formatedDate) => this.client.date=$('#datepicker').val() );

                var vm= this;
                $('input.timepicker').timepicker({
                    timeFormat: 'h:mm p',
                    interval: 60,
                    minTime: '10',
                    maxTime: '6:00pm',
                    startTime: '10:00',
                    dynamic: false,
                    dropdown: true,
                    scrollbar: true,
                    change: function(time) { vm.client.time=$('#timepicker').val() }
                });

                const phoneInputField = document.querySelector("#phone");
                const phone_number = window.intlTelInput(phoneInputField, {
                    separateDialCode: true,
                    hiddenInput: "full",
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                    preferredCountries:["us", "mx"]
                });

                let validationRules=
                {
                    datepicker: {
                        identifier: 'datepicker',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'You must add a date'
                            }
                        ]
                    },
                    timepicker: {
                        identifier: 'timepicker',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'You must add a time'
                            }
                        ]
                    },
                    adults: {
                        identifier: 'adults',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'field adults cannot be empty'
                            }
                        ]
                    },
                    kid: {
                        identifier: 'kid',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'kid age cannot be empty'
                            }
                        ]
                    },
                    phone: {
                        identifier: 'phone',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'phone number cannot be empty'
                            }
                        ]
                    },
                }

                $('#clientInfo').form({
                    fields : validationRules,
                    inline : true,
                    on     : 'click'
                });

                // $('#date_calendar').mobiscroll().datepicker({
                //     controls: ['calendar'],
                //     touchUi: true,
                //     responsive: {
                //         xsmall: {
                //             controls: ['calendar'],
                //             display: 'bottom',
                //             touchUi: true
                //         },
                //         small: {
                //             controls: ['calendar'],
                //             display: 'anchored',
                //             touchUi: true
                //         },
                //         custom: { // Custom breakpoint
                //             breakpoint: 800,
                //             controls: ['calendar'],
                //             display: 'anchored',
                //             touchUi: false
                //         }
                //     }
                // });
                // $('#time_calendar').mobiscroll().datepicker({
                //     controls: ['time'],
                //     timeFormat: 'h:mm A',
                //     touchUi: true
                // });
            },
            methods:{
                nextStep: function(e){
                    e.preventDefault();
                    let total= this.calcTotal();
                    let step = this.step;
                    this.page='loading';
                    console.log(step);
                    this.checkIfRenderPaypal(step,total);
                    if(step==2 && $('#clientInfo').form('is valid')){
                        this.step !== 3 ? this.step=this.step+1 : this.step=this.step;
                    }
                    else if(step==1){
                        this.step !== 3 ? this.step=this.step+1 : this.step=this.step;
                    }else{
                        $('#clientInfo').form('submit');
                    }

                    // $('#inline_calendar').calendar();
                    this.page='loaded';
                },
                backStep: function(e){
                    e.preventDefault();
                    let total= this.calcTotal();
                    let step = this.step;
                    this.page='loading';
                    this.checkIfRenderPaypal(step,total);
                    this.step !== 1 ? this.step=this.step-1 : this.step=this.step;
                    // $('#inline_calendar').calendar();
                    this.page='loaded';
                },
                changeStep(step){
                    this.checkIfRenderPaypal(step);
                },
                calcTotal(){
                    let total,totalAdults,totalKids=0;
                    totalAdults= this.tour.price * this.client.adults;
                    if(this.client.kids > 0 ){
                        totalKids= this.tour.price * this.client.kids;
                    }
                    total= totalAdults + totalKids;
                    this.tour.total = total.toFixed(2);
                    return total;
                },
                checkIfRenderPaypal(step){
                    let total= this.calcTotal();
                    if(step == 2){
                        if ($('#paypal-button-container').length) {
                            const paypalBtn = document.getElementById('paypal-button');
                            paypalBtn.remove();
                            $('#paypal-button-container').html('<div id="paypal-button"></div>');
                            this.renderPaypal(total);
                        }
                    }
                    this.step = step;
                },
                openModal: function(){
                    $('.ui.modal').modal({centered: false}).modal('show');
                    return false;
                },
                closeMap(){
                    $('.ui.modal').modal('hide');
                },
                checkPhoneLength(){
                    let number=this.client.phone;
                    let length=number.length;
                    this.client.phone=number.replace(/\D/g, '');

                    if(length < 8){
                        $('#phone').removeClass('input-success');
                        $('#phone').addClass('input-error');
                        $('#phone').attr('placeholder','You need to type at least 8 numbers');
                        return 'error';
                    }else{
                        $('#phone').removeClass('input-error');
                        $('#phone').addClass('input-success');
                        $('#phone').attr('placeholder','e.g. 7021234567');
                        return 'ok';
                    }
                },
                renderPaypal(total){
                    paypal.Buttons({
                        fundingSource: paypal.FUNDING.CARD,
                        createOrder: function(data, actions) {
                            return actions.order.create({
                                application_context: {
                                    shipping_preference: "NO_SHIPPING"
                                },
                                payer: {
                                    phone: {
                                        phone_type: "MOBILE",
                                        phone_number: { national_number: "526242640804" }
                                    }
                                },
                                purchase_units: [{
                                    amount: {
                                        value: 200
                                    }
                                }],
                            });
                        },
                        onApprove: function(data, actions) {
                            // alert('pago hecho');
                            let formData=
                            {
                                fristname: "Juan",
                                lastname: "Perez",
                                adults: 3,
                                kids: 4,
                                tour_day: '2022-10-14',
                                tour_time: '15:43:00',
                                phone: '6241556455',
                                tour_name: 'Traditional Arch Tour',

                            }
                            return fetch('/paypal/process/'+data.orderID+'?', { method:'GET' }
                            )
                            .then(res => res.json())
                            .then(function(orderData){
                                var errorDetail= Array.isArray(orderData.details) && orderData.details[0];
                                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED'){
                                    return actions.restart();
                                }

                                if(errorDetail){
                                    var msg = 'Sorry, your transaction could not be processed.';
                                    if(errorDetail.description) msg+= ' ('+orderData.debug_id+')';
                                    return alert(msg);
                                }
                                console.log(orderData);
                                alert('Transaction completed by '+orderData.payer.name.given_name);
                            });
                        },
                        onError: function(err){
                            console.log('hubo un error:  '+err);
                        }
                    }).render('#paypal-button');
                },
                addKidAge(){
                    this.kidsAges=[];
                    var vm=this;
                    let kids= this.client.kids;
                    for (let i = 0; i < kids; i++) {
                        vm.kidsAges.push({ age: '' })
                    }
                },

            }
        })
    </script>

@endsection
