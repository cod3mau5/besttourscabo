@extends('pages.layouts.master')
@section('header_scripts')
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <style>
        main{
            margin-top: 109px;
            padding:2rem 0; 
            background-color:rgb(255, 219, 129);
        }
        h4{
            font-size: 2.4rem;
            font-family: 'Montserrat';
            color: #023047;
            margin: 2rem auto;
            text-align: center;
        }
        .contact-section .contact-grid {
          display: grid;
          grid-template-columns: repeat(3, 1fr);
          gap: 20px;
          margin: 20px 0;
        }
        
        .contact-item {
          text-align: center;
        }
        
        .contact-item i {
          font-size: 36px;
          color: #333;
          margin-bottom: 10px;
        }
    </style>

@endsection
@section('content')
    <main>
        <h4 class="u-custom-font u-font-montserrat u-text u-text-1">Contact With Best Tours Cabo's Team</h4>
            <section class="contact-section">
            <div class="contact-grid">
              <div class="contact-item">
                <i class="fa fa-envelope"></i>
                <p>contacto@email.com</p>
              </div>
              <div class="contact-item">
                <i class="fab fa-whatsapp"></i>
                <p>+1234567890</p>
              </div>
              <div class="contact-item">
                <i class="fa fa-map-marker"></i>
                <p>Calle 123, Ciudad, País</p>
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
