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

        .ui.menu{
            font-family: 'Oswald', sans-serif;
            font-size: 1.4rem;
            box-shadow: none;
            border: 0;
        }
        .ui.menu .item{
            color: rgb(2,48,71)
        }
        .ui.menu a.item:hover{
            color: rgb(251,133,0);
        }
        .ui.menu .dropdown.item:hover{
            color: rgb(251,133,0);
        }
        .logo{
            height:auto!important;
            width: 295px!important;
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

        @media (max-width: 768px) {
            .ui.fixed.menu .ui.container{
                display: none!important;
            }
            .ui.fixed.menu .ui.container.mobile{
                display: flex!important;
                flex-wrap: wrap;
            }

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
            color: #023047;
            font-family: "Helvetica Black";
            font-size: 5.4rem;
            line-height: 1;
        }
        .slider-box button{
            position: absolute;
            bottom: 0;
            right: 0;
            border: none;
            padding: 1rem;
            background-image: radial-gradient(#FFB702, #FB8500);
            color: #023047;
            font-size: 2rem;
            font-family: 'Impact';
            cursor: pointer;
        }
    </style>

</head>
<body>
    <div id="app">
        <header>
            <div class="ui fixed menu">
                <div class="ui container mobile">
                    <a href="{{ url('/') }}" class="header item no-border">
                        <img class="logo" src="{{ asset('assets/img/logo_horizontal.png') }}">
                    </a>
                    <a href="#" class="item no-border">HOME</a>

                    <div class="ui simple dropdown item no-border">
                        TOURS
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item" href="#">Link Item</a>
                            <a class="item" href="#">Link Item</a>
                            <div class="divider"></div>
                            <div class="header">Header Item</div>
                            <div class="item">
                                <i class="dropdown icon"></i>
                                Sub Menu
                                <div class="menu">
                                <a class="item" href="#">Link Item</a>
                                <a class="item" href="#">Link Item</a>
                                </div>
                            </div>
                            <a class="item" href="#">Link Item</a>
                        </div>

                    </div>

                    <a href="" class="item no-border">TRANSPORTATION</a>
                    <a href="" class="item no-border">ABOUT US</a>
                    <a href="" class="item no-border">CONTACT</a>

                </div>
                <div class="ui container">
                    <a href="{{ url('/') }}" class="header item no-border">
                        <img class="logo" src="{{ asset('assets/img/logo_horizontal.png') }}">
                    </a>
                    <a href="#" class="item no-border">HOME</a>

                    <div class="ui simple dropdown item no-border">
                        TOURS
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item" href="#">Link Item</a>
                            <a class="item" href="#">Link Item</a>
                            <div class="divider"></div>
                            <div class="header">Header Item</div>
                            <div class="item">
                                <i class="dropdown icon"></i>
                                Sub Menu
                                <div class="menu">
                                <a class="item" href="#">Link Item</a>
                                <a class="item" href="#">Link Item</a>
                                </div>
                            </div>
                            <a class="item" href="#">Link Item</a>
                        </div>

                    </div>

                    <a href="" class="item no-border">TRANSPORTATION</a>
                    <a href="" class="item no-border">ABOUT US</a>
                    <a href="" class="item no-border">CONTACT</a>

                </div>
              </div>
            </header>
            <div class="ui fluid container">
                <div class="slider-hero">
                    <div>
                        <div class="slider-box">
                            <p>
                                Whale <br>
                                Watching
                            </p>
                            <button>Book Now</button>
                        </div>
                        <img src="{{ asset('assets/img/slider/slide_1.jpg') }}" alt="">
                    </div>
                    <div>
                        <div class="slider-box">
                            <p>
                                Fishing <br>
                                Tours
                            </p>
                            <button>Book Now</button>
                        </div>
                        <img src="{{ asset('assets/img/slider/slide_2.jpg') }}" alt="">
                    </div>
                    <div>
                        <div class="slider-box">
                            <p>
                                Sunset at <br>
                                Sea
                            </p>
                            <button>Book Now</button>
                        </div>
                        <img src="{{ asset('assets/img/slider/slide_3.jpg') }}" alt="">
                    </div>
                    <div>
                        <div class="slider-box">
                            <p>Snorkel</p>
                            <button>Book Now</button>
                        </div>
                        <img src="{{ asset('assets/img/slider/slide_4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        <main>

        </main>
        <footer>

        </footer>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="semantic/semantic.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(()=>{
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
