@extends('pages.layouts.master')
@section('header_scripts')
    {{-- <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
    <script src="https://api.windy.com/assets/map-forecast/libBoot.js"></script> --}}
    <link rel="stylesheet" href="https://website890810.nicepage.io/nicepage.css?version=9b152f57-f73e-43a9-a3e1-84ad6fc93b08" media="screen">
    <script class="u-script" type="text/javascript" src="https://static.nicepage.com/shared/assets/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="//capp.nicepage.com/8cd74e095ff01e34d1447974cafa993b59c7e451/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <style class="u-style">
        @media (min-width:425px){
            main{
                padding-top: 5rem;
            }
        }
        .u-section-2 .u-sheet-1 {
            min-height: 656px;
        }
            .u-section-2 .u-layout-wrap-1 {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .u-section-2 .u-layout-cell-1 {
            min-height: 556px;
        }
        .u-section-2 .u-container-layout-1 {
            padding: 0;
        }
        .u-section-2 .u-image-1 {
            height: 377px;
            width: 377px;
            background-image: url('../../assets/img/why_cabo.webp');
            background-position: 50% 50%;
            margin: 0 -124px 0 auto;
        }
        .u-section-2 .u-layout-cell-2 {
            min-height: 556px;
        }
        .u-section-2 .u-container-layout-2 {
            padding: 30px 50px 30px 182px;
        }
        .u-section-2 .u-text-1 {
            font-size: 3rem;
            font-weight: 300;
            margin: 0 270px 0 0;
        }
        .u-section-2 .u-text-2 {
            margin-top: 20px;
            font-size: 1.1rem;
            margin-bottom: 0;
            padding-left:0.3rem;
            padding-right: 1.55rem
        }
        .u-section-2 .u-btn-1 {
            border-style: none;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1.25rem;
            letter-spacing: 1px;
            background-image: none;
            margin: 30px auto 0 0;
        }
        @media (max-width: 1199px) {
            .u-section-2 .u-sheet-1 {
                min-height: 558px;
            }
            .u-section-2 .u-layout-cell-1 {
                min-height: 539px;
            }
            .u-section-2 .u-image-1 {
                height: 351px;
                width: 351px;
                margin-right: -139px;
            }
            .u-section-2 .u-layout-cell-2 {
                min-height: 458px;
            }
            .u-section-2 .u-text-1 {
                margin-right: 130px;
            }
        }
        @media (max-width: 991px) {
            .u-section-2 .u-sheet-1 {
                min-height: 451px;
            }
            .u-section-2 .u-layout-cell-1 {
                min-height: 603px;
            }
            .u-section-2 .u-image-1 {
                height: 280px;
                width: 280px;
                margin-right: -123px;
            }
            .u-section-2 .u-layout-cell-2 {
                min-height: 603px;
            }
            .u-section-2 .u-container-layout-2 {
                padding-right: 30px;
                padding-left: 122px;
            }
            .u-section-2 .u-text-1 {
                width: auto;
                margin-right: 0;
            }
        }
        @media (max-width: 767px) {
            .u-section-2 .u-sheet-1 {
                min-height: 933px;
            }
            .u-section-2 .u-layout-wrap-1 {
                margin-bottom: -95px;
            }
            .u-section-2 .u-layout-cell-1 {
                min-height: 358px;
            }
            .u-section-2 .u-image-1 {
                height: 353px;
                width: 353px;
                margin-top: 15px;
                margin-right: auto;
                margin-bottom: -50px;
            }
            .u-section-2 .u-layout-cell-2 {
                min-height: 100px;
            }
            .u-section-2 .u-container-layout-2 {
                padding-right: 10px;
                padding-left: 10px;
            }
        }
        @media (max-width: 575px) {
            .u-section-2 .u-sheet-1 {
                min-height: 898px;
            }
            .u-section-2 .u-layout-wrap-1 {
                margin-bottom: 50px;
            }
            .u-section-2 .u-layout-cell-1 {
                min-height: 294px;
            }
            .u-section-2 .u-image-1 {
                height: 254px;
                width: 254px;
                margin-top: 50px;
            }
            .u-section-2 .u-text-1 {
                font-size: 2.25rem;
            }
        }
    </style>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "https://website890810.nicepage.io/Page-8.html"
}</script>
    <meta name="theme-color" content="#aab2d9">
    <meta property="og:title" content="Page 8">
    <meta property="og:type" content="website">
@endsection
@section('content')
    <main>

    
            <section class="u-clearfix u-section-2" id="carousel_fcd1">
              <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                  <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                      <div class="u-container-style u-layout-cell u-shape-rectangle u-size-18 u-layout-cell-1">
                        <div class="u-border-20 u-border-palette-3-base u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1">
                          <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1200" data-image-height="1500"></div>
                        </div>
                      </div>
                      <div class="u-align-justify u-container-style u-layout-cell u-size-42 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-2">
                          <h4 class="u-custom-font u-font-montserrat u-text u-text-1">About Us</h4>
                          <p class="u-custom-font u-font-montserrat u-text u-text-default u-text-grey-40 u-text-2">At Best Tours Cabo, we're a team of young, local entrepreneurs dedicated to providing exceptional tourist experiences in Cabo San Lucas. Our family has been involved in the tourism industry since 1970, with my grandfather - the "Yuka" - being a pioneer in glass bottom pangas and an honorary member of Coral Negro beach. He devoted much of his life to the service, care and development of this beautiful destination, leaving behind a great legacy. That's why we created our digital platform - to offer a better service, save you time and ensure the best vacation experience possible. With our top-of-the-line boats and the most experienced guides in the area, we're ready to give you an unforgettable vacation in Cabo San Lucas!</p>
                          <a href="https://api.whatsapp.com/send?phone=5216241323343&text=%F0%9F%91%8B%20hello%2C%20I%20come%20from%20the%20page%20and%20I%20want%20information%20about..."
                            target="_BLANK" class="u-active-black u-border-none u-btn u-button-style u-hover-black u-palette-3-base u-text-active-white u-text-black u-text-hover-white u-btn-1">Send me a whatsapp</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            
            {{-- AQUI PODEMOS PONER "THE TEAM" --}}
            {{-- <section class="u-backlink u-clearfix u-grey-80">
              <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
                <span>Website Templates</span>
              </a>
              <p class="u-text">
                <span>created with</span>
              </p>
              <a class="u-link" href="https://nicepage.com/" target="_blank">
                <span>Website Builder Software</span>
              </a>. 
            </section> --}}

        {{-- WINDY --}}
        {{-- <div id="windy"></div> --}}
    </main>
@endsection

@section('footer_scripts')
    <script>
        // const options = {
        // // Required: API key
        //     key: 'OuceyI0dcHgee8OEzVhUz1mNNyBqTrKY', // REPLACE WITH YOUR KEY !!!

        //     // Put additional console output
        //     verbose: true,

        //     // Optional: Initial state of the map
        //     lat: 22.879869,
        //     lon: -109.906256,
        //     zoom: 7,
        // };

        // // Initialize Windy API
        // windyInit(options, windyAPI => {
        //     // windyAPI is ready, and contain 'map', 'store',
        //     // 'picker' and other usefull stuff

        //     const { map } = windyAPI;
        //     // .map is instance of Leaflet map

        //     L.popup()
        //         .setLatLng([22.879869, -109.906256])
        //         .setContent('Best Tours Cabo')
        //         .openOn(map);
        // });
    </script>

        {{-- VueJs 2 --}}
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    page: 'loading',
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
                },
                methods:{
    
                }
            })
        </script>
@endsection
