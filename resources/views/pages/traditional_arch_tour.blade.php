@extends('pages.layouts.master')
@section('header_scripts')
    <style>
        main{
            margin-top: 115px;
        }
        .grid-gallery{
            display: grid;
            grid-template-columns: 3fr 1fr 1fr;
            grid-template-rows: 6fr 3.5fr;
            grid-gap: 7px;
            height: 360px;
            font-size: 30px;
            margin-left: auto;
            margin-right: auto;
        }
        .grid-gallery > div{
            background-size: cover;
        }
        .grid-gallery > div:nth-child(1){
            grid-row-start: 1;
            grid-row-end: 3;
        }
        .grid-gallery > div:nth-child(2){
            grid-column-start: 2;
            grid-column-end: 4
        }
        .tour-title {
            text-align: center;
            padding-top: 1rem!important;
            margin-bottom:2rem!important;
        }

    </style>
@endsection
@section('content')
    <main>
        <div class="ui container">
            <h2 class="tour-title">TRADITIONAL ARCH TOUR</h2>
            <div class="grid-gallery">
                <div style="background-image:url('assets/img/tours/traditional_arch_tour/img_1.jpg')"></div>
                <div style="background-image:url('assets/img/tours/traditional_arch_tour/img_2.jpg')"></div>
                <div style="background-image:url('assets/img/tours/traditional_arch_tour/img_3.jpg')"></div>
                <div style="background-image:url('assets/img/tours/traditional_arch_tour/img_4.jpg')"></div>
            </div>
        </div>
    </main>
@endsection

@section('footer_scripts')
    <script>
    </script>
@endsection
