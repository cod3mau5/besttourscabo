@extends('pages.layouts.master')
@section('header_scripts')
@endsection
@section('content')
    <main class="main">

        {{-- SLIDER --}}
        <section class="section banner banner-section">
            <div class="ui container fluid" style="margin:0px!important">
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
                title: 'Polaris Refrigeración'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl3QdpavEMHbNxiU9AqmO577Hir0EZ_Ho&callback=initMap"
    async defer></script>
@endsection
