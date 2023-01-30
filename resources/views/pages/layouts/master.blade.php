<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Google tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2JHC60Q1FQ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-2JHC60Q1FQ');
        </script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="/semantic/components/reset.min.css">
        <link rel="stylesheet" type="text/css" href="/semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>

        {{-- GOOGLE FONTS --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">


        {{-- FONT AWESOME --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

        {{-- CUSTOM CSS --}}
        <link rel="stylesheet" href="/assets/css/styles.css?{{rand(2,50)}}">
        <link rel="stylesheet" href="{{url('/assets/css/about_us/about_us.css')}}" media="screen">
        @yield('header_scripts')


        <style>
            footer input,
            footer textarea, input#email:-webkit-autofill{
                border-color:var(--main_blue);
                background-color: var(--main_blue);
                border-radius: 0px !important;
                color: #fff !important;
                -webkit-box-shadow: 0 0 0px 1000px var(--main_blue) inset!important;
                -webkit-text-fill-color: #fff;
            }
            footer input,input#phone{
                padding: .67857143em 1em!important;
                width: 100%!important;
            }
            .danger{
                background-color: #800F2F!important;
                color:#fff!important;
                font-weight: bolder!important;
                -webkit-box-shadow: 0 0 0px 1000px #800F2F inset!important;
            }

            .whatsapp-btn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                padding: 10px 20px;
                background-color: rgb(251, 133, 0);
                border-radius: 50px;
                font-weight: bold;
                color: #fff;
                display: flex;
                align-items: center;
                text-decoration: none;
                z-index: 100;
            }

            .whatsapp-icon {
                font-size: 20px;
                margin-right: 10px;
            }
        </style>
  
    </head>
    <body @if(Route::current()=='about_us')  class="u-body" @endif>
        <div id="app">
            <div class="ui segment h-100" v-show="page == 'notification'" style="position:inherit;border-radius:0;">
                <div class="ui active dimmer">
                    <div class="ui massive text">Message sent successfully!!</div>
                </div>
                <p></p>
                <p></p>
                <p></p>
            </div>
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
            @if(Route::current()->getName() !== 'tour')
                <a 
                    href="https://api.whatsapp.com/send?phone=5216241323343&text=%F0%9F%91%8B%20hello%2C%20I%20come%20from%20the%20page%20and%20I%20want%20information%20about..." 
                    class="whatsapp-btn" 
                    id="whatsapp-btn" 
                    target="_BLANK">
                    <i class="fab fa-whatsapp whatsapp-icon"></i>
                    WhatsApp
                </a>
            @endif

        </div>
        {{--  #app --}}

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/semantic/semantic.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


        @yield('footer_scripts')

        <script>
            $(document).ready(()=>{

                // alert("{{env('PAYPAL_MODE') == 'sandbox' ? 'https://api-m.sandbox.paypal.com' : 'https://api-m.paypal.com'}}")
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

                $('#email').click(()=>{$('#email').removeClass('danger')});
                $('#phone').click(()=>{$('#phone').removeClass('danger')});
                $('#message').click(()=>{ $('#message').removeClass('danger')});


                $('#sendContactEmail').click(()=>{
                    app._data.page='loading';
                    let data= {
                        email:$('#email').val(),
                        phone:$('#phone').val(),
                        message:$('#message').val(),
                        _token:"{{csrf_token()}}"
                    }

                    $.ajax({
                        type: "POST",
                        url: '{{route("sendContactMail")}}',
                        data: data,
                        success:function(response){
                            if(response.success==false){
                                response.data.email==null?$('#email').addClass('danger'):'';
                                response.data.phone==null?$('#phone').addClass('danger'):'';
                                response.data.phone==null?$('#message').addClass('danger'):'';
                                response.data.email==null?$('#email').attr('placeholder','you need to put your email'):'';
                                response.data.phone==null?$('#phone').attr('placeholder','you need to put your phone'):'';
                                response.data.phone==null?$('#message').attr('placeholder','you need to put your message'):'';

                                response.phone == 0 ? $('#phone').addClass('danger')  : '';
                                response.email == false ? $('#email').addClass('danger') : '';
                                response.phone == 0 ? $('#phone').val('') : '';
                                response.email == false ? $('#email').val('') : '';
                                response.phone == 0 ? $('#phone').attr('placeholder','you need to put a real phone') : '';
                                response.email  == false ? $('#email').attr('placeholder','you need to put a real email') : '';
                            }else{
                                $('#email').removeClass('danger');
                                $('#phone').removeClass('danger');
                                $('#message').removeClass('danger');
                                app._data.page='notification'
                            }
                            
                        },
                        error: function(){
                            alert('Error sending message, please try again.');
                        }
                    }).then(()=>{
                        setTimeout(function(){
                            app._data.page='loaded';
                        }, 2800);
                    });
                });

                window.addEventListener('scroll', function() {
                    console.log(scrollY);
                });
  
                $(window).on("scroll touchmove",function(){
                    if ($(window).scrollTop() >= $(document).height() - $(window).height() - 300){
                    $("#whatsapp-btn").hide();
                    }
                    else {
                    $("#whatsapp-btn").show();
                    }
                });

            });
        </script>
    </body>
</html>
