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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- CUSTOM CSS --}}
        <link rel="stylesheet" href="assets/css/styles.css">

        @yield('header_scripts')

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
                            <a class="menu-button">TOURS & ACTIVITIES</a>

                            <div class="drop-menu">
                                <li class="menu-item menu-button">
                                    <a href="{{ route('traditional_arch_tour')}}">
                                        TRADITIONAL ARCH TOUR
                                    </a>
                                </li>
                                <li class="menu-item menu-button">
                                    <a href="{{ route('whale_watching')}}">
                                        WHALE WATCHING
                                    </a>
                                </li>
                                <li class="menu-item menu-button">
                                    <a href="{{ route('fishing_tours')}}">
                                        FISHING TOURS
                                    </a>
                                </li>
                                <li class="menu-item menu-button">
                                    <a href="{{ route('sunset_at_sea')}}">
                                        SUNSET AT SEA
                                    </a>
                                </li>
                                <li class="menu-item menu-button">
                                    <a href="{{ route('snorkel')}}">
                                        SNORKEL
                                    </a>
                                </li>
                            </div>
                        </div>

                        <li class="menu-item">
                            <a href="{{ route('transportation')}}" class="item no-border menu-link">
                                TRANSPORTATION
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('about_us')}}" class="item no-border menu-link">
                                ABOUT US
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('contact')}}" class="item no-border menu-link">
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

            @yield('content')

            {{-- FOOTER --}}
            <footer>
                <div class="ui container">
                    <div class="ui stackable grid">
                        <div class="eight wide column" id="contactus-footer">
                            <div>
                                <h3>Contact Us</h3>
                                <p>Ask us what you want</p>
                                <p>We are here for any question you have.</p>
                                <p>Cabo san lucas, Baja California Sur, México.</p>
                                <p><a href="tel:+52 1 624 132 3343"> office +52 1 624 132 3343</a></p>
                                <p><a href="mailto:info@besttourscabo.com">info@besttourscabo.com</a></p>
                            </div>
                            <ul class="social-media">
                                <li>
                                    <a href="https://www.instagram.com/besttourscabo/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/besttourscabo" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.tiktok.com/@besttourscabo" target="_blank"><i class="fab fa-tiktok"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="eight wide column" id="sendmail-footer">
                            <h3>Send us an email</h3>
                            <div class="ui form">
                            </div>
                            <div class="ui form">
                                <div class="field">
                                    <label>E-mail</label>
                                    <input type="email" placeholder="example@mail.com">
                                </div>
                                {{-- <div class="ui error message">
                                    <div class="header">Action Forbidden</div>
                                    <p>You can only sign up for an account once with a given e-mail address.</p>
                                </div> --}}
                                <div class="field">
                                    <label>Mesage</label>
                                    <textarea placeholder="Write your message here"></textarea>
                                </div>
                                <div class="ui submit button">Send</div>
                                </div>
                        </div>
                    </div>
                </div>
            </footer>

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
