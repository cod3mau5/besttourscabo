@extends('pages.layouts.master')
@section('header_scripts')
<!-- Bootstrap 5 Css -->
<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" /> -
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        main{
            margin-top: 115px;
        }
    </style>
        <!-- twitter-bootstrap-wizard css -->
        <link rel="stylesheet" href="{{ asset('assets/libs/twitter-bootstrap-wizard/prettify.css') }}">

            <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        #departure_flight_details{
            display: none;
        }
        .hidden{
            display: none!important;
        }
        .line{
            border-bottom: 1px solid rgb(251, 133, 0);
        }
        .text-wrap{
            word-break: break-word!important;
        }


        @-webkit-keyframes pulse {
            0% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 44, 44, 0.8);
            }
            70% {
                -webkit-box-shadow: 0 0 0 10px rgba(204, 44, 44, 0);
            }
            100% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 44, 44, 0.2);
            }
        }
        @keyframes pulse {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 44, 44, 0.8);
                box-shadow: 0 0 0 0 rgba(204, 44, 44, 0.4);
            }
            70% {
                -moz-box-shadow: 0 0 0 10px rgba(204, 44, 44, 0.2);
                box-shadow: 0 0 0 10px rgba(204, 44, 44, 0);
            }
            100% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 44, 44, 0);
                box-shadow: 0 0 0 0 rgba(204, 44, 44, 0);
            }
        }

        .finalButton {
            display: none;
        }
        .pvw-title:after {
            animation: pulse 1.2s infinite;
            content: 'whatever it is you want to add';
        }
    </style>
    <style>
        .card{
            box-shadow: 1px 5px 26px -3px rgba(0,0,0,0.58);
            -webkit-box-shadow: 1px 5px 26px -3px rgba(0,0,0,0.58);
            -moz-box-shadow: 1px 5px 26px -3px rgba(0,0,0,0.58);
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap4.min.css') }}"> --}}
    <link href="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <style>
        .text-primary,.text-primary:hover, .text-primary *{
            color: rgb(2, 48, 71)!important;
        }
        .border-success{
            border-color: rgb(251, 133, 0)!important;
        }
    </style>
@endsection
@section('content')
    <main>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100  sm:items-center py-4 sm:pt-0">

            <!-- Reservation form begin -->
            <div class="container reserve-form-container">
                @if(session('notification'))
                    <div class="card-body">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{session('notification')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                
                <div class="row">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title mb-4 fs-2 text-center m-font m-color">
                                    @{{ text.book_now.form.title }}
                                </h2>

                                <div id="basic-pills-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav">

                                            <li class="nav-item" v-for="t in text.book_now.form.steps">
                                                <a :href="'#step'+t.number " 
                                                class="nav-link"  
                                                data-toggle="tab"
                                                style="pointer-events: none;cursor: not-allowed;">
                                                    <span class="step-number">0@{{ t.number }}</span>
                                                    <span class="step-title">@{{ t.name }}</span>
                                                </a>
                                            </li>

                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        {{-- ============================ STEP 1 ==============================  --}}
                                            @include('pages.booking_form.steps.step1')
                                        {{-- ============================ STEP 2 ==============================  --}}
                                            @include('pages.booking_form.steps.step2')
                                        {{-- ============================ STEP 3 ==============================  --}}
                                            @include('pages.booking_form.steps.step3')

                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <button class="btn btn-primary">
                                                @{{ text.book_now.form.buttons.previous }}
                                            </button>
                                        </li>
                                        <li class="next">
                                            <button class="btn btn-primary go_step2">
                                                @{{ text.book_now.form.buttons.next }}
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        @include('pages.booking_form.summary')
                    </div>
                    
                </div>

            </div>
            <!-- Reservation form end -->
        </div>

    </main>
@endsection

@section('footer_scripts')



    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>


        <!-- form wizard init -->
        <script>
            $(document).ready(function(){$("#basic-pills-wizard").bootstrapWizard({tabClass:"nav nav-pills nav-justified"}),$("#progrss-wizard").bootstrapWizard({onTabShow:function(a,r,i){var t=(i+1)/r.find("li").length*100;$("#progrss-wizard").find(".progress-bar").css({width:t+"%"})}})});var triggerTabList=[].slice.call(document.querySelectorAll(".twitter-bs-wizard-nav .nav-link"));triggerTabList.forEach(function(a){var r=new bootstrap.Tab(a);a.addEventListener("click",function(a){a.preventDefault(),r.show()})});
        </script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script src="https://cdn.bootcss.com/moment.js/2.22.1/moment-with-locales.min.js"></script>
        <script src="{{ asset('/assets/bootstrap-datetimepicker.min.js') }}"></script>
        <script  src="{{asset('/assets/jquery.validate.min.js')}}"></script>
        <script  src="{{asset('/assets/additional-methods.min.js')}}"></script>
        <script  src="{{asset('/assets/jquery.blockUI.min.js')}}"></script>

        <script>
            var units = @json($vehicles);
            var rates = @json($rates);
            var resort_options= '<?php echo $resort_options ?>';
        </script>
        <script src="{{ asset('/assets/form_wizzard.js') }}"></script>


                {{-- VueJs 2 --}}
                <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
                <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
                <script>
                    var app = new Vue({
                        el: '#app',
                        data: {
                            page: 'loading',
                            about_us:'{{ empty($about_us) ? false : true }}',
                            language: '{{ $langUpdate }}',
                            specialRequest:{
                                boosterSeat:false,
                                carSeat:false,
                                shoppingStop: false,
                            },
                            routes:{
                                home:'{{ route("homepage","1") }}',
                                gallery:'{{ route("gallery","1") }}',
                                contact_us:'{{ route("contact","1") }}',
                                book_now:'{{ route("createTour","1") }}',
                            },
                            text: @json($language)
                        },
                        beforeMount(){
                            this.page='loading';
                            this.changeLanguage();
                        },
                        mounted() {
                            this.changeLanguage();
                            if(this.about_us == true){
                                $('html, body').animate({
                                    scrollTop: $("#about-us").offset().top
                                }, 850);
                            }
                            this.page='loaded';
                        },
                        methods:{
                            changeLanguage: function(){
                                
                                if(this.language == 1){
                                    this.routes.home= this.routes.home.replace('/0','/'+this.language);
                                    this.routes.gallery= this.routes.gallery.replace('/0','/'+this.language);
                                    this.routes.contact_us= this.routes.contact_us.replace('/0','/'+this.language);
                                    this.routes.book_now= this.routes.book_now.replace('/0','/'+this.language);
                                }
                                if(this.language == "0"){
                                    console.log(typeof(this.language));
                                    this.routes.home= this.routes.home.replace('/1','/'+this.language);
                                    this.routes.gallery= this.routes.gallery.replace('/1','/'+this.language);
                                    this.routes.contact_us= this.routes.contact_us.replace('/1','/'+this.language);
                                    this.routes.book_now= this.routes.book_now.replace('/1','/'+this.language);
                                }
                                axios.get('{{ route("getLanguages",'') }}/'+this.language).then((r)=>{
                                    this.text = r.data;
        
                                }).then(()=>{
                                    $('.sm_start').html($('#start_location option:selected').text());
                                    $('.sm_end').html($('#end_location option:selected').text());
        
                                    if(localStorage.getItem('step') == 3){
                                        $('#language').val() == "1" ? $('.go_step2').html('Finish Booking') : $('.go_step2').html('Finalizar Reserva');
                                    }
        
                                    if ($('#trip_type').val() == 'r') {
                                        if($('#language').val() == "1"){
                                            $('.sm_trip').html('roundtrip');
                                        }else{
                                            $('.sm_trip').html('De Ida y Vuelta');
                                        }
                                        $('#departure_flight_details').slideDown();
                                    } else {
                                        if($('#language').val() == "1"){
                                            $('.sm_trip').html('oneway');
                                        }else{
                                            $('.sm_trip').html('De Ida');
                                        }
                                        $('#departure_flight_details').slideUp();
                                    }
        
                                });
                            }
                        }
                    })
                </script>

@endsection
