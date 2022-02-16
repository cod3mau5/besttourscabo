<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="semantic/components/reset.min.css">
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">

</head>
<body>
    <div class="ui fixed menu">
        <div class="ui container">
          <a href="{{ url('/') }}" class="header item">
            <img class="logo" src="{{ asset('assets/img/best_tours_cabo_horizontal.png') }}">
          </a>
          <a href="#" class="item">Home</a>
          <div class="ui simple dropdown item">
            Dropdown <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item" href="#">Link Item</a>
              <a class="item" href="#">Link Item</a>
              <div class="divider"></div>
              <div class="header">Header Item</div>
              <div class="item">
                <i class="dropdown icon"></i>
                Sub Menu
                <div class="menu">
                  <a class="item" href="#">Link Item</a>
                  <a class="item" href="#">Link Item</a>
                </div>
              </div>
              <a class="item" href="#">Link Item</a>
            </div>
          </div>
        </div>
      </div>
    {{-- <div id="app">
        <header>
            <div class="container">
                <div class="row">
                    <img src="{{ asset('assets/img/best_tours_cabo_horizontal.png') }}" alt="">
                </div>
            </div>
        </header>
        <main>

        </main>
        <footer>

        </footer>
    </div> --}}
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
</html>