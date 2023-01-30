@extends('pages.layouts.master')
@section('header_scripts')
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <style>
        main{
            margin-top: 85px;
            padding:2.777rem 1rem; 
            background-color:rgb(255, 219, 129);
        }
        h4{
            font-size: 2.3rem;
            font-family: 'Impact';
            color: #023047;
            margin: 2rem auto;
            text-align: center;
        }
        p.subtitle{
            font-size: 1.3rem;
            font-family: 'Montserrat';
            color: #023047;
            margin: 2rem auto;
            text-align: center;
        }

        .contact-section .contact-grid {
          display: flex;
          flex-direction: column;
        }
        @media only screen and (min-width: 840px) {
            .contact-section .contact-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 2.3rem;
                margin: 20px 0;
            }
        }
        .contact-item {
            text-align: center;
            margin-bottom: 1.3rem;
            background: rgba(4, 81, 132, 1);
            border-radius: 11px;
            padding: 2rem .5rem;
            color: #fff;
        }
        
        .contact-item i {
          font-size: 36px;
          color: rgb(251, 133, 0);
          margin-bottom: 10px;
        }
        @media(min-width:1024px){
            .container{
                max-width: 1024px;
                padding: 0 1rem;
                margin: 0 auto;
            }
        }
    </style>

@endsection
@section('content')
    <main>
            <h4>Contact With Best Tours Cabo's Team</h4>
            <p class="subtitle">Click on any of our options</p>

            <section class="contact-section container">
            <div class="contact-grid">
              <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <p>info@besttourscabo.com</p>
              </div>
              <div class="contact-item">
                <i class="fab fa-whatsapp"></i>
                <p>+52 1 624 132 3343</p>
              </div>
              <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <p> Blvd. Paseo de la Marina,<br/> 
                    Marina Cabo San Lucas, 23450, B.C.S.
                </p>
              </div>
            </div>
          </section>
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
