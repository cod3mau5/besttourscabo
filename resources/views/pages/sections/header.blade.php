{{-- HEADER MENU --}}
<header class="header" id="header">
    <nav class="navbar container">
    <a href="{{ url('/') }}" class="brand">
        <img class="logo" src="{{ asset('assets/img/logo_horizontal.png') }}">
    </a>
    <div class="burger" id="burger">
        <span class="burger-line"></span>
        <span class="burger-line"></span>
        <span class="burger-line"></span>
    </div>
    <div class="menu" id="menu">
        <ul class="menu-inner">

            <div class="menu-item dropdown-wrapper">
                <a class="menu-button">TOURS & ACTIVITIES</a>

                <div class="drop-menu">
                    <li class="menu-item menu-button">
                        <a href="{{ route('traditional_arch_tour')}}">
                            TRADITIONAL ARCH TOUR
                        </a>
                    </li>
                    <li class="menu-item menu-button">
                        <a href="{{ route('whale_watching')}}">
                            WHALE WATCHING
                        </a>
                    </li>
                    <li class="menu-item menu-button">
                        <a href="{{ route('fishing_tours')}}">
                            FISHING TOURS
                        </a>
                    </li>
                    <li class="menu-item menu-button">
                        <a href="{{ route('sunset_at_sea')}}">
                            SUNSET AT SEA
                        </a>
                    </li>
                    <li class="menu-item menu-button">
                        <a href="{{ route('snorkel')}}">
                            SNORKEL
                        </a>
                    </li>
                </div>
            </div>

            <li class="menu-item">
                <a href="{{ route('transportation')}}" class="item no-border menu-link">
                    TRANSPORTATION
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('about_us')}}" class="item no-border menu-link">
                    ABOUT US
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('contact')}}" class="item no-border menu-link">
                    CONTACT
                </a>
            </li>

        </ul>
    </div>
    <button class="switch" id="switch">
        <i class="switch-light bx bx-sun"></i>
        <i class="switch-dark bx bx-moon"></i>
    </button>
    </nav>
</header>
