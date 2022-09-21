<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="semantic/components/reset.min.css">
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">

    <style>
      /* Fonts */
      @font-face {
          font-family: "Impact";
          src: url("//db.onlinewebfonts.com/t/4cbf858ccd9ffd3923bed6843a474080.eot");
          src: url("//db.onlinewebfonts.com/t/4cbf858ccd9ffd3923bed6843a474080.eot?#iefix") format("embedded-opentype"),
          url("//db.onlinewebfonts.com/t/4cbf858ccd9ffd3923bed6843a474080.woff2") format("woff2"),
          url("//db.onlinewebfonts.com/t/4cbf858ccd9ffd3923bed6843a474080.woff") format("woff"),
          url("//db.onlinewebfonts.com/t/4cbf858ccd9ffd3923bed6843a474080.ttf") format("truetype"),
          url("//db.onlinewebfonts.com/t/4cbf858ccd9ffd3923bed6843a474080.svg#Impact") format("svg");
      }
      @font-face {
          font-family: "Helvetica Black";
          src: url("//db.onlinewebfonts.com/t/b14220270a922222bb9500e01fd40f4f.eot"); src: url("//db.onlinewebfonts.com/t/b14220270a922222bb9500e01fd40f4f.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/b14220270a922222bb9500e01fd40f4f.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/b14220270a922222bb9500e01fd40f4f.woff") format("woff"), url("//db.onlinewebfonts.com/t/b14220270a922222bb9500e01fd40f4f.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/b14220270a922222bb9500e01fd40f4f.svg#HelveticaLTW04-Black") format("svg");
      }

      @font-face {
        font-family: "Lulo Clean Bold";
        src: url("//db.onlinewebfonts.com/t/39a2c7f346d5cfae7045aeb2fb50d9ad.eot");
        src: url("//db.onlinewebfonts.com/t/39a2c7f346d5cfae7045aeb2fb50d9ad.eot?#iefix") format("embedded-opentype"),
        url("//db.onlinewebfonts.com/t/39a2c7f346d5cfae7045aeb2fb50d9ad.woff2") format("woff2"),
        url("//db.onlinewebfonts.com/t/39a2c7f346d5cfae7045aeb2fb50d9ad.woff") format("woff"),
        url("//db.onlinewebfonts.com/t/39a2c7f346d5cfae7045aeb2fb50d9ad.ttf") format("truetype"),
        url("//db.onlinewebfonts.com/t/39a2c7f346d5cfae7045aeb2fb50d9ad.svg#LuloCleanW01-OneBold") format("svg");
    }

    @font-face {
        font-family: "Avenir Light";
        src: url("//db.onlinewebfonts.com/t/116af611cbcd9e4bada60b4e700430c1.eot");
        src: url("//db.onlinewebfonts.com/t/116af611cbcd9e4bada60b4e700430c1.eot?#iefix") format("embedded-opentype"),
        url("//db.onlinewebfonts.com/t/116af611cbcd9e4bada60b4e700430c1.woff2") format("woff2"),
        url("//db.onlinewebfonts.com/t/116af611cbcd9e4bada60b4e700430c1.woff") format("woff"),
        url("//db.onlinewebfonts.com/t/116af611cbcd9e4bada60b4e700430c1.ttf") format("truetype"),
        url("//db.onlinewebfonts.com/t/116af611cbcd9e4bada60b4e700430c1.svg#Avenir Light") format("svg");
    }
      /* colors */
      :root {
        --color-white-100: hsl(206, 0%, 100%);
        --color-white-200: hsl(206, 0%, 90%);
        --color-white-300: hsl(206, 0%, 80%);
        --color-white-400: hsl(206, 0%, 65%);
        --color-white-500: hsl(206, 0%, 50%);
        --color-black-100: hsl(217, 30%, 18%);
        --color-black-200: hsl(217, 27%, 15%);
        --color-black-300: hsl(217, 27%, 12%);
        --color-black-400: hsl(217, 52%, 9%);
        --color-blue-100: hsl(215, 97%, 87%);
        --color-blue-200: hsl(215, 96%, 78%);
        --color-blue-300: hsl(215, 94%, 68%);
        --color-blue-400: hsl(215, 91%, 60%);
        --color-blue-500: hsl(215, 83%, 53%);
        --color-blue-600: hsl(215, 76%, 48%);
        --shadow-small: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
          0 1px 2px 0 rgba(0, 0, 0, 0.06);
        --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
          0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-large: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
      }


      /* Helpers */

      *,
      *::before,
      *::after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style: none;
        list-style-type: none;
        text-decoration: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
        border: none;
      }

      a{
        color: unset!important;
      }
      html {
        font-size: 100%;
        box-sizing: inherit;
        scroll-behavior: smooth;
        height: -webkit-fill-available;
      }

      .no-gutter{
        margin-left: 0px!important;
        margin-right: 0px!important;
      }
      @media only screen and (max-width: 767px){
        .no-gutter{
          margin-left: 0px!important;
          margin-right: 0px!important;
        }
      }

      /* header */
      .header {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        width: 100%;
        height: 115px;
        margin: 0 auto;
        background-color: var(--color-white-100);
        box-shadow: var(--shadow-medium);
      }

      .navbar {
        display: flex;
        flex-direction: row;
        align-items: center;
        align-content: center;
        justify-content: space-between;
        width: 100%;
        height: auto;
        margin: 10px auto;
      }

      .brand {
        font-family: inherit;
        font-size: 1.6rem;
        font-weight: 600;
        line-height: 1.25;
        margin: auto;
        letter-spacing: -1px;
        text-transform: uppercase;
        color: var(--color-blue-500);
      }



    /*====================================
        MENU STYLES
    ====================================*/

        .main-menu {
          width: 100%;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          margin-top: 25px;  /* Space for logo */
          overflow: visible;
          max-width: 700px;  /* Keeps the buttons getting too far from each other on largest screens */
        }

        .main-menu a {
            width: 100%;
            text-align: center;
            padding: .75em 1em;
            display: block;
            border-bottom: 2px solid #ddd;
        }

    /*====================================
        DROPDOWN MENU STYLES
    ====================================*/

        /* The hidden-at-first drop menus */
        .drop-menu {
            display: flex;
            flex-direction: column; /* This never changes */
            align-items: center;
            width: 100%; /* Allows sub buttons to stretch across button width in main-menu*/
            transition: max-height .4s, opacity .3s;
            max-height: 0;
            opacity: 0;
            overflow: hidden; /* Keeps links in drop menu from displaying until height is large enough */
            position: unset;
        }


        .drop-menu > .menu-button {
            height: 100%;
            transition: transform .4s;
            transform: translateY(-300%);
            background:rgb(251,133,0); /* Makes the menu effects visible on close */
            margin: 6px 0;
            padding: 5px: 8px;
        }

        /* Makes for easy identifying when the drop menu is open */
        .dropdown-wrapper{
            text-align: center;
        }
        .dropdown-wrapper:hover > .menu-button {
            color: rgb(251,133,0)!important;
        }
        #menu > ul > div > div > li> a{
            padding: 8px!important;
            line-height: 1.3;

        }

        /* The dropdown-wrapper wraps both the .main-menu button and drop down menu */
        /* Expands .drop-menu to children height, not setting an expicit height allows variable # of buttons */
        .dropdown-wrapper:hover .drop-menu{
            max-height: 300px;
            opacity: 1;
        }

        /* The specifity keeps styles from affecting main menu button */
        .dropdown-wrapper:hover > .drop-menu .menu-button {
        transform: translateY(0%);
        }



        /*====================================
        MEDIA QUERIES
        ====================================*/

        @media (min-width: 550px) {


            /*====================================
            DROP-MENU EFFECTS (LARGER SCREENS)
            ====================================*/
            /* Resets dropdown styles to not affect the effects. Overflow still set to hidden allows for menu effects like sliding in */
            .effect {
                transition: max-height 0s;
                opacity: 1;
                background: transparent;
            }
            .effect .menu-button {
                transform: translateY(0%);
            }


            .scissor .menu-button{
                transform: translateX(-100%);
            }
            /* Selects every other menu button to slide the opposite way */
            .scissor .menu-button:nth-child(2n+1) {
                transform: translateX(100%);
            }
            .dropdown-wrapper:hover .scissor .menu-button {
                transform: translateX(0%);
            }


            .fade-in .menu-button {
                transition: opacity .5s;
                opacity: 0;
            }
            .dropdown-wrapper:hover .fade-in .menu-button {
                opacity: 1;
            }



            .header-container {
                width: 90%;
            }

            .header-container {
                height: 200px;
                justify-content: space-between; /* Pushes logo to top, nav bar all the way down */
            }

            .main-menu {
                flex-direction: row; /* Horizontal main menu buttons */
                align-items: flex-start; /* Makes the top of the 'dropdown-wrapper' div stay flush with button top because it's aligned on the cross-axis */
                height: 48px; /* Setting the height allows the dropdown outside of it's parent's bounds, therefore not compensated for by the flex. */
                margin: 0;
            }

            .main-menu > .menu-button {
                width: 23%;
                max-width: 150px;
            }

        }

        @media (min-width: 850px) {
            .header-container {
                flex-direction: row; /* Places logo on the same line as .main-menu */
                justify-content: space-around;
                height: 160px;
                }

            .main-menu {
                    width: 60%;
                justify-content: space-between;
            }
        }


      .menu{
          font-family: 'Oswald', sans-serif;
          font-size: 1.4rem;
          box-shadow: none;
          border: 0;
      }
      .menu .menu-item{
          color: rgb(2,48,71)!important;
      }
      .menu a.item:hover{
          color: rgb(251,133,0)!important;
      }
      .menu .dropdown.item:hover{
          color: rgb(251,133,0);
      }
      .menu {
        position: fixed;
        top: 0;
        left: -100%;
        z-index: 10;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        color: var(--color-black-400);
        background-color: var(--color-white-100);
        box-shadow: var(--shadow-medium);
        transition: all 0.4s ease-in-out;
      }
      .menu .menu-item a{
        font-size: 1.5rem!important;
        margin: 0 auto!important;
      }

      .menu.is-active {
        left: 0;
      }
      .menu-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        row-gap: 1.25rem;
        margin-top: 7rem;
      }
      .menu-link {
        font-family: inherit;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5;
        color: inherit;
        text-transform: uppercase;
        transition: all 0.3s ease;
      }
      @media only screen and (min-width: 768px) {
        .navbar {
            display: grid;
            grid-template-columns: 1.5fr 3fr;
            width: 100%;
            height: auto;
            margin: 10px auto;
            max-width: 1127px;
        }
        .menu {
          position: relative;
          top: 0;
          left: 0;
          width: auto;
          height: auto;
          padding: 0 1rem;
          margin-right: auto;
          background: none;
          box-shadow: none;
          transition: none;
        }
        .menu-inner {
          display: flex;
          flex-direction: row;
          -moz-column-gap: 2rem;
              column-gap: 2rem;
          margin: 0 auto;
        }
        .menu-link {
          text-transform: capitalize;
        }

        .drop-menu {
            display: flex;
            flex-direction: column; /* This never changes */
            align-items: center;
            width: 100%; /* Allows sub buttons to stretch across button width in main-menu*/
            transition: max-height .4s, opacity .3s;
            max-height: 0;
            opacity: 0;
            overflow: hidden; /* Keeps links in drop menu from displaying until height is large enough */
            position: fixed;
            left: -114px;
            margin-top: 10px;
        }
      }

      @media (max-width: 768px) {
          .ui.fixed.menu .ui.container{
              display: none!important;
          }
          .ui.fixed.menu .ui.container.mobile{
              display: flex!important;
              flex-direction: column;
          }

      }



      .logo{
          height:auto!important;
          width: 244px!important;
      }

      .burger {
        position: relative;
        display: block;
        cursor: pointer;
        -webkit-user-select: none;
          -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        order: 1;
        z-index: 12;
        width: 1.75rem;
        height: 1rem;
        margin-right: 1rem;
        border: none;
        outline: none;
        background: none;
        visibility: visible;
        transform: rotate(0deg);
        transition: 0.35s ease;
      }

      @media only screen and (min-width: 48rem) {
        .logo{
          height:auto!important;
          width: 285px!important;
      }
        .burger {
          display: none;
          visibility: hidden;
        }
      }
      .burger-line {
        position: absolute;
        display: block;
        right: 0;
        width: 100%;
        height: 2px;
        border: none;
        outline: none;
        opacity: 1;
        transform: rotate(0deg);
        background-color: var(--color-black-300);
        transition: 0.25s ease-in-out;
      }

      .burger-line:nth-child(1) {
        top: 0px;
      }
      .burger-line:nth-child(2) {
        top: 0.5rem;
      }
      .burger-line:nth-child(3) {
        top: 1rem;
      }
      .burger.is-active .burger-line:nth-child(1) {
        top: 0.5rem;
        transform: rotate(135deg);
      }
      .burger.is-active .burger-line:nth-child(2) {
        right: -1.5rem;
        opacity: 0;
        visibility: hidden;
      }
      .burger.is-active .burger-line:nth-child(3) {
        top: 0.5rem;
        transform: rotate(-135deg);
      }
      .no-border{
          border: 0px transparent solid!important;
      }
      .no-border::before{
          content: ''!important;
          width: 0px!important;
          background: transparent!important;
      }
      .ui.container.mobile{
          display: none;
      }


      /* Main */
      .main {
        margin: 0 auto;
        padding: 115px 0px 0px 0px;
      }

      /* Slider */
      .slider-hero img{
          height: auto;
          width: 100%;
      }
      .slick-prev,.slick-next{
          z-index: 1000;
      }
      .slick-prev{
          left: 0;
      }
      .slick-next{
          right: 0;
      }

      .slider-box {
          position: inherit;
          background-color: rgba(255, 255, 255, 0.65);
          display: block;
          padding: 1rem 0;
      }

      .slider-box p{
        color: #023047;
        font-family: "Helvetica Black";
        font-size: 2.5rem;
        line-height: 1.3;
        text-align: center;
        margin-bottom: 1rem;
        min-height: 100px;
      }

      .slider-box button{
          position: inherit;
          width: 100%;
          border: none;
          padding: 1rem;
          background-image: radial-gradient(#FFB702, #FB8500);
          color: #023047;
          font-size: 2rem;
          font-family: 'Impact';
          cursor: pointer;
      }

      @media only screen and (min-width:992px) {
        .slider-box{
            position: absolute;
            top: 35%;
            left: 35%;
            background-color: rgba(255, 255, 255, 0.65);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 4rem 2.5rem 1rem;
        }
        .slider-box p{
            font-size: 5.4rem;
            line-height: 1;
            margin-bottom:1rem;
            min-height: unset;
        }
        .slider-box button{
            position: absolute;
            bottom: 0;
            right: 0;
            width: auto;
        }
      }


    /*====================================
        OUR TOURS
    ====================================*/
      @media only screen and (max-width: 767px){
        #our-tours{
          margin-left: 0!important;
          margin-right: 0!important;
        }
      }
      #our-tours{
        background-color: #045184;
      }
      #our-tours .ui.container{
        padding:2.5rem 0;
      }
      #our-tours h2{
        font-family: "Helvetica Black";
        font-size: 3rem;
        color: #2b689c;
        letter-spacing: 3px;
      }
      #our-tours .four{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 0.5rem!important;
        min-height: 260px;
      }
      #our-tours .four img{
        width: 100%;
        margin-top: 1rem;
        margin-bottom: 1rem;
      }
      #our-tours .ui.stackable.grid{
        padding-top: 2rem;
        padding-bottom: 4rem;
      }
      #our-tours .four p{
        position: absolute;
        text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5), 3px 3px 3px rgba(0,0,0,0.54);
      }
      #our-tours .four p.title{
        font-family: "Helvetica Black";
        letter-spacing:2px;
        color: #ffffff;
        font-size:1.3rem;
      }
      #our-tours .four p a{
        padding-top: 1rem;
        color: #ffffff!important;
        position: relative;
        font-size:1rem;
        top: 13px;
      }


    /*====================================
        WHY CABO
    ====================================*/
        #why-cabo .img{
            height: 661px;
            background-image: url('assets/img/why_cabo.webp');
            background-size: cover;
        }
        #why-cabo .column{
            background-color: #8ECAE6;
        }
        #why-cabo .column:nth-child(2){
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 4rem 13rem;
            text-align: center;
        }
        #why-cabo .column:nth-child(2) h2{
            font-family: "Lulo Clean Bold";
            font-size: 2.9rem;
            color: rgb(2,48,71);
            padding: 0 3rem;
            margin-bottom: 2.6rem;
            letter-spacing: 7px;
        }
        #why-cabo .column:nth-child(2) p{
            font-family: "Avenir Light";
            font-size: 1.1rem;
            color: #000000;
        }
        #why-cabo .column:nth-child(2) button{
            font-size: 1rem;
            background-color: transparent;
            padding: 0.5rem 1.5rem;
            border: 4px solid #000000;
            cursor: pointer;
            max-width: 80%;
            align-self: center;
        }
        #why-cabo .column:nth-child(2) button:hover{
            background-color: rgb(251,133,0);
            border: 4px solid rgb(2,48,71);
            color: #ffffff;
            font-weight: bolder;
        }
        @media only screen and (max-width: 767px){
            #why-cabo .column:nth-child(2){
                padding: 2.5rem 1rem!important;
            }
            #why-cabo{
                margin-left: 0!important;
                margin-right: 0!important;
            }
            #why-cabo .img{
                padding: 0!important;
                height: 368px;
            }
            #why-cabo .ui.stackable.grid{
                display: flex;
                flex-direction: column-reverse;
            }
            #why-cabo .column:nth-child(2) button{
                margin-top:2rem;
            }
        }

    /*====================================
        GOOGLE MAP
    ====================================*/
      #map {
          height: 340px;
          width: 100%;
      }

    /*====================================
        TESTIMONIALS
    ====================================*/
      #testimonials{
        background-color: rgb(255,219,129);
        padding: 3.5rem 0 5rem 0;
      }
      #testimonials h2{
        font-family: "Helvetica Black";
        color: #FB8500;
        font-size: 3rem;
        margin-bottom: 2.5rem;
      }
      #testimonials .column{
        padding: 0 0.7rem 0 0.7rem;
      }
      #testimonials .column > .column {
        display: flex;
      }
      #testimonials .column > .column > div{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        width: 100%;
      }
      #testimonials .column > .column > div h3{
        color: #ffb703;
      }
      #testimonials .column > .column > div p{
        padding: 0.3rem 5rem;
        margin-bottom: 2rem;
        min-height: 155px;
        color: #fff;
      }

      .bg-blue{
        position: relative;
        width: 100%;
        height: auto;
        background-color: rgba(4, 81, 132, 0.7);
      }
      #robert{
        background:radial-gradient(circle, rgba(4,81,132,0.7147233893557423) 0%, rgba(4,81,132,0.85) 40%, rgba(4,81,132,0.9) 99%),
        url('assets/img/robert.webp');
        background-size:cover;
        background-repeat: no-repeat;
      }
      #sammy{
        background:radial-gradient(circle, rgba(4,81,132,0.7147233893557423) 0%, rgba(4,81,132,0.85) 40%, rgba(4,81,132,0.9) 99%),
        url('assets/img/sammy.webp');
        background-size:cover;
        background-repeat: no-repeat;
      }
      #bryan{
        background:radial-gradient(circle, rgba(4,81,132,0.7147233893557423) 0%, rgba(4,81,132,0.85) 40%, rgba(4,81,132,0.9) 99%),
        url('assets/img/bryan.webp');
        background-size:cover;
        background-repeat: no-repeat;
      }
      .svg-container{
        fill: #ffb703;
        height: auto;
        padding:0 10.1rem;
        margin-bottom: 1rem;
      }
      .svg-container svg{
        color: #ffb703;
        transform: rotate(180deg);
      }

      @media only screen and (max-width: 767px){
        #testimonials h2{
            font-size: 32px;
        }
      }

    </style>

</head>
<body>
    <div id="app">

        {{-- HEADER MENU --}}
        <header class="header" id="header">
            <nav class="navbar container">
              <a href="{{ url('/') }}" class="brand">
                  <img class="logo" src="{{ asset('assets/img/logo_horizontal.png') }}">
              </a>
               <div class="burger" id="burger">
                  <span class="burger-line"></span>
                  <span class="burger-line"></span>
                  <span class="burger-line"></span>
               </div>
               <div class="menu" id="menu">
                  <ul class="menu-inner">

                    <div class="menu-item dropdown-wrapper">
						<a class="menu-button" href="#">OUR TOURS</a>

						<div class="drop-menu">
                            <li class="menu-item menu-button">
                                <a href="#">
                                    WHALE WATCHING
                                </a>
                            </li>
                            <li class="menu-item menu-button">
                                <a href="#">
                                    FISHING TOURS
                                </a>
                            </li>
                            <li class="menu-item menu-button">
                                <a href="#">
                                    SUNSET AT SEA
                                </a>
                            </li>
                            <li class="menu-item menu-button">
                                <a href="#">
                                    SNORKEL
                                </a>
                            </li>
						</div>
					</div>

                    <li class="menu-item">
                        <a href="" class="item no-border menu-link">
                            TRANSPORTATION
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="" class="item no-border menu-link">
                            ABOUT US
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="" class="item no-border menu-link">
                            CONTACT
                        </a>
                    </li>

                </ul>
               </div>
               <button class="switch" id="switch">
                  <i class="switch-light bx bx-sun"></i>
                  <i class="switch-dark bx bx-moon"></i>
               </button>
            </nav>
        </header>

         <main class="main">

            {{-- SLIDER --}}
            <section class="section banner banner-section">
                <div class="ui fluid container no-gutter" style="margin:0px!important">
                    <div class="slider-hero">
                        <div>
                            <img src="{{ asset('assets/img/slider/slide_fishing.jpg') }}" alt="">
                            <div class="slider-box">
                                <p>
                                    Fishing <br>
                                    Tours
                                </p>
                                <button>Book Now</button>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('assets/img/slider/slide_whales.jpg') }}" alt="">
                            <div class="slider-box">
                                <p>
                                    Whale <br>
                                    Watching
                                </p>
                                <button>Book Now</button>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('assets/img/slider/slide_sunset.jpg') }}" alt="">
                            <div class="slider-box">
                                <p>
                                    Sunset at <br>
                                    Sea
                                </p>
                                <button>Book Now</button>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('assets/img/slider/slide_snorkel.jpg') }}" alt="">
                            <div class="slider-box">
                                <p>Snorkel</p>
                                <button>Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- OUR TOURS --}}
            <div class="container fluid" id="our-tours">
              <div class="ui container center aligned">
                  <h2 class="">OUR TOURS</h2>
                  <div class="ui stackable grid">
                      <div class="four wide column">
                        <img src="assets/img/fishing_tours.webp" alt="">
                        <p class="title">FISHING TOURS</p>
                        <p class="subtitle"><a href="#">Read more</a></p>
                      </div>
                      <div class="four wide column">
                        <img src="assets/img/sunset.webp" alt="">
                        <p class="title">SUNSET AT SEA</p>
                        <p class="subtitle"><a href="#">Read more</a></p>
                      </div>
                      <div class="four wide column">
                        <img src="assets/img/snorkel.webp" alt="">
                        <p class="title">SNORKEL</p>
                        <p class="subtitle"><a href="#">Read more</a></p>
                      </div>
                      <div class="four wide column">
                        <img src="assets/img/whale_watching.webp" alt="">
                        <p class="title">WHALE WATCHING</p>
                        <p class="subtitle"><a href="#">Read more</a></p>
                      </div>
                  </div>
              </div>
            </div>

            {{-- WHY CABO? --}}
            <div class="ui container fluid" id="why-cabo">
              <div class="ui stackable grid">
                  <div class="eight wide column img"></div>
                  <div class="eight wide column">
                      <h2>WHY CABO?</h2>
                      <p>
                        Being the # 1 destination in all of Mexico for its water and land activities,
                        for the warmth of its people and gastronomy, for its geography and culture,
                        and most importantly, its safety. Los Cabos, a beautiful desert paradise with a subtropical climate,
                        which makes it the perfect place to take a vacation.
                        That is why we have a little more than 5 million visitors a year.
                      </p>
                    <button>LEARN MORE</button>
                  </div>
              </div>
            </div>

            {{-- TESTIMONIALS --}}
            <div class="container fluid" id="testimonials">
              <div class="ui container center aligned">
                <h2 class="">TESTIMONIALS</h2>
                <div class="ui stackable three column grid">
                    <div class="column">
                        <div id="robert">
                            <div class="bg-blue"></div>
                            <h3>ROBERT, FISHING TOURS</h3>
                            <p>
                                I have been fishing Cabo for years.
                                I usually partake in the Harbor Hustle and like to negotiate and look at the boat prior to booking,
                                as well as the success of boat on that particular day.
                            </p>
                            <div class="svg-container">
                                <svg preserveAspectRatio="xMidYMid meet" data-bbox="0 19.7 200 161.209" xmlns="http://www.w3.org/2000/svg" viewBox="0 19.7 200 161.209" role="presentation" aria-hidden="true">
                                <g>
                                    <path d="M78.2 19.8L85.7 33c.8 1.4 1.7 2.9 2.7 4.5-3.9 2.3-7.7 4.7-11.5 6.9-12.7 7.3-24.2 16.2-33.4 27.8-8.9 11.2-13 24.1-14.3 38.5 4.4 0 8.6-.4 12.8.1 6.8.7 13.9 1.1 20.3 3.3 13.1 4.4 19.5 14.3 20.7 27.9.6 7.4-.5 14.4-4.2 20.9-7.8 13.6-20.5 19.7-37.3 17.5-21.8-2.6-33.5-13.5-38.7-36.3-1.2-5.3-1.9-10.7-2.8-16v-15.4c.2-.6.5-1.2.6-1.9 1-10 4-19.3 8.8-28.1 11.1-20.4 27-36.3 46.3-48.9 7.2-4.7 14.5-9.4 21.8-14.1.2.1.4.1.7.1z"></path>
                                    <path d="M189.4 19.8c3.5 5.8 6.9 11.6 10.6 17.8-1.7 1-3.4 2.1-5.1 3-13.4 7.8-26.3 16.1-36.8 27.9-10.7 12-15.9 26-17.4 42.3 1.4 0 2.8-.1 4.2 0 8.3.6 16.8.2 24.8 2.1 18.9 4.4 26.1 18.9 24.8 36.6-1.3 16.9-15.3 30.5-31.9 31.3-12.2.6-23.9-1.1-33.5-9.5-8.7-7.6-12.6-17.9-15.1-28.8-7.2-32.2 2.1-59.7 23.9-83.6 11-12 23.8-21.8 37.6-30.3 4.5-2.8 8.8-5.8 13.3-8.8h.6z"></path>
                                </g>
                            </svg>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div id="sammy">
                            <div class="bg-blue"></div>
                            <h3>SAMMY, SUNSET AT SEA </h3>
                            <p>
                                Carlos was a wonderful guide!!! Was incredibly engaging and ensured we had a wonderful time from ...
                            </p>
                            <div class="svg-container">
                                <svg preserveAspectRatio="xMidYMid meet" data-bbox="0 19.7 200 161.209" xmlns="http://www.w3.org/2000/svg" viewBox="0 19.7 200 161.209" role="presentation" aria-hidden="true">
                                <g>
                                    <path d="M78.2 19.8L85.7 33c.8 1.4 1.7 2.9 2.7 4.5-3.9 2.3-7.7 4.7-11.5 6.9-12.7 7.3-24.2 16.2-33.4 27.8-8.9 11.2-13 24.1-14.3 38.5 4.4 0 8.6-.4 12.8.1 6.8.7 13.9 1.1 20.3 3.3 13.1 4.4 19.5 14.3 20.7 27.9.6 7.4-.5 14.4-4.2 20.9-7.8 13.6-20.5 19.7-37.3 17.5-21.8-2.6-33.5-13.5-38.7-36.3-1.2-5.3-1.9-10.7-2.8-16v-15.4c.2-.6.5-1.2.6-1.9 1-10 4-19.3 8.8-28.1 11.1-20.4 27-36.3 46.3-48.9 7.2-4.7 14.5-9.4 21.8-14.1.2.1.4.1.7.1z"></path>
                                    <path d="M189.4 19.8c3.5 5.8 6.9 11.6 10.6 17.8-1.7 1-3.4 2.1-5.1 3-13.4 7.8-26.3 16.1-36.8 27.9-10.7 12-15.9 26-17.4 42.3 1.4 0 2.8-.1 4.2 0 8.3.6 16.8.2 24.8 2.1 18.9 4.4 26.1 18.9 24.8 36.6-1.3 16.9-15.3 30.5-31.9 31.3-12.2.6-23.9-1.1-33.5-9.5-8.7-7.6-12.6-17.9-15.1-28.8-7.2-32.2 2.1-59.7 23.9-83.6 11-12 23.8-21.8 37.6-30.3 4.5-2.8 8.8-5.8 13.3-8.8h.6z"></path>
                                </g>
                            </svg>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div id="bryan">
                            <div class="bg-blue"></div>
                            <h3>BRYAN NEAL, SNORKEL</h3>
                            <p>
                                We went on a Beach hopping snorkeling adventure with Fernando and Julio as our guides. It was AMAZING!!!
                            </p>
                            <div class="svg-container">
                                <svg preserveAspectRatio="xMidYMid meet" data-bbox="0 19.7 200 161.209" xmlns="http://www.w3.org/2000/svg" viewBox="0 19.7 200 161.209" role="presentation" aria-hidden="true">
                                <g>
                                    <path d="M78.2 19.8L85.7 33c.8 1.4 1.7 2.9 2.7 4.5-3.9 2.3-7.7 4.7-11.5 6.9-12.7 7.3-24.2 16.2-33.4 27.8-8.9 11.2-13 24.1-14.3 38.5 4.4 0 8.6-.4 12.8.1 6.8.7 13.9 1.1 20.3 3.3 13.1 4.4 19.5 14.3 20.7 27.9.6 7.4-.5 14.4-4.2 20.9-7.8 13.6-20.5 19.7-37.3 17.5-21.8-2.6-33.5-13.5-38.7-36.3-1.2-5.3-1.9-10.7-2.8-16v-15.4c.2-.6.5-1.2.6-1.9 1-10 4-19.3 8.8-28.1 11.1-20.4 27-36.3 46.3-48.9 7.2-4.7 14.5-9.4 21.8-14.1.2.1.4.1.7.1z"></path>
                                    <path d="M189.4 19.8c3.5 5.8 6.9 11.6 10.6 17.8-1.7 1-3.4 2.1-5.1 3-13.4 7.8-26.3 16.1-36.8 27.9-10.7 12-15.9 26-17.4 42.3 1.4 0 2.8-.1 4.2 0 8.3.6 16.8.2 24.8 2.1 18.9 4.4 26.1 18.9 24.8 36.6-1.3 16.9-15.3 30.5-31.9 31.3-12.2.6-23.9-1.1-33.5-9.5-8.7-7.6-12.6-17.9-15.1-28.8-7.2-32.2 2.1-59.7 23.9-83.6 11-12 23.8-21.8 37.6-30.3 4.5-2.8 8.8-5.8 13.3-8.8h.6z"></path>
                                </g>
                            </svg>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>

            {{-- GOOGLE MAP --}}
            <div id="map"></div>

         </main>



        <footer>

        </footer>

    </div>
    {{--  #app --}}

  <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous">
  </script>
  <script src="semantic/semantic.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
            title: 'Polaris Refrigeración'
        });
    }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl3QdpavEMHbNxiU9AqmO577Hir0EZ_Ho&callback=initMap">
  </script>
  <script>
    $(document).ready(()=>{
      const navbarMenu = document.getElementById("menu");
      const burgerMenu = document.getElementById("burger");
      const headerMenu = document.getElementById("header");
      const overlayMenu = document.querySelector(".overlay");

      // Open Close Navbar Menu on Click Burger
      if (burgerMenu && navbarMenu) {
      burgerMenu.addEventListener("click", () => {
          burgerMenu.classList.toggle("is-active");
          navbarMenu.classList.toggle("is-active");
      });
      }

      // Close Navbar Menu on Click Links
      document.querySelectorAll(".menu-link").forEach((link) => {
      link.addEventListener("click", () => {
          burgerMenu.classList.remove("is-active");
          navbarMenu.classList.remove("is-active");
      });
      });

      // Fixed Navbar Menu on Window Resize
      window.addEventListener("resize", () => {
        if (window.innerWidth >= 992) {
            if (navbarMenu.classList.contains("is-active")) {
                navbarMenu.classList.remove("is-active");
                overlayMenu.classList.remove("is-active");
            }
        }
      });

      $('.slider-hero').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        arrows: true,
      });

    });
  </script>

</body>
</html>
