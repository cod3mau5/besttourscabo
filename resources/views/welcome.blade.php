<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="semantic/components/reset.min.css">
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <style>
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
        .slider-hero img{
            height: auto;
            width: 100%;
        }
    </style>

</head>
<body>
    <div class="ui fixed menu">
        <div class="ui container">
            <a href="{{ url('/') }}" class="header item no-border">
                <img class="logo" src="{{ asset('assets/img/logo_horizontal.png') }}">
            </a>
            <a href="#" class="item no-border">HOME</a>

            <div class="ui simple dropdown item no-border">
            TOURS <i class="dropdown icon"></i>

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
    <div id="app">
        <header>
            <div class="ui container">
                <div class="slider-hero">
                    <div><img src="{{ asset('assets/img/slider/slide_1.jpg') }}" alt=""></div>
                    <div><img src="{{ asset('assets/img/slider/slide_2.jpg') }}" alt=""></div>
                    <div><img src="{{ asset('assets/img/slider/slide_3.jpg') }}" alt=""></div>
                    <div><img src="{{ asset('assets/img/slider/slide_4.jpg') }}" alt=""></div>
                </div>
            </div>
        </header>
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
            $('.slider-hero').slick();
        });
    </script>
</body>
</html>