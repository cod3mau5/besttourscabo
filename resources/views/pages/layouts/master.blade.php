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

        {{-- FONT AWESOME --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

        {{-- CUSTOM CSS --}}
        <link rel="stylesheet" href="assets/css/styles.css?{{rand(2,50)}}">

        @yield('header_scripts')

    </head>
    <body>
        <div id="app">
            <div class="ui segment h-100" v-show="page == 'loading'" style="position:inherit;border-radius:0;">
                <div class="ui active dimmer">
                    <div class="ui massive text loader">Loading</div>
                </div>
                <p></p>
                <p></p>
                <p></p>
            </div>

            @include('pages.sections.header')

            @yield('content')

            @include('pages.sections.footer')

        </div>
        {{--  #app --}}

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="semantic/semantic.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        @yield('footer_scripts')



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
                    dots: false,
                    prevArrow: false,
                    nextArrow: false
                });

            });
        </script>
    </body>
</html>
