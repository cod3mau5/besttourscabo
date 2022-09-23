@extends('pages.layouts.master')
@section('header_scripts')
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
    <script src="https://api.windy.com/assets/map-forecast/libBoot.js"></script>
    <style>
        main{
            margin-top: 115px;
        }
    </style>
@endsection
@section('content')
    <main>
        <h1 style="text-align: center">ABOUT US</h1>
        {{-- WINDY --}}
        <div id="windy"></div>
    </main>
@endsection

@section('footer_scripts')
    <script>
        const options = {
        // Required: API key
            key: 'OuceyI0dcHgee8OEzVhUz1mNNyBqTrKY', // REPLACE WITH YOUR KEY !!!

            // Put additional console output
            verbose: true,

            // Optional: Initial state of the map
            lat: 22.879869,
            lon: -109.906256,
            zoom: 7,
        };

        // Initialize Windy API
        windyInit(options, windyAPI => {
            // windyAPI is ready, and contain 'map', 'store',
            // 'picker' and other usefull stuff

            const { map } = windyAPI;
            // .map is instance of Leaflet map

            L.popup()
                .setLatLng([22.879869, -109.906256])
                .setContent('Best Tours Cabo')
                .openOn(map);
        });
    </script>
@endsection
