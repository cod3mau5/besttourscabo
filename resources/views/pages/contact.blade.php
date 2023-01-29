@extends('pages.layouts.master')
@section('header_scripts')
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
    <style>
        main{
            margin-top: 115px;
        }
    </style>
@endsection
@section('content')
    <main>
        {{-- <h4 class="u-custom-font u-font-montserrat u-text u-text-1">Contact Best Tours Cabo's Team</h4> --}}
    </main>
@endsection

@section('footer_scripts')
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
