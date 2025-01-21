<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>D.Y.O.R</title>
    <link rel="stylesheet" href="{{asset('theme/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/gsap.css')}}">
    <link rel="icon" type="image/svg" href="images/favicon.svg')}}">
</head>
<body class="crypt-dark">

    <!-- Hero/Header -->
    <section class="container-fluid">
        <!-- Header -->
        @include('front.headers-page')
        <!-- Offcanvas Navbar -->
        {{-- <nav class="navbar py-0 navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar">
                    <!-- Header -->
                    <div class="offcanvas-header card-line">
                        <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">D.Y.O.R</h5>
                        <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Body -->
                    <div class="offcanvas-body">
                        <!-- Search -->
                        <form class="d-flex" role="search">
                            <input type="text" class="search search-input form-control form-control-lg text-sm" placeholder="Search coin">
                        </form>
                        <!-- Menu -->
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-2 mt-3 pb-3">
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Podcasts
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewbox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark g-2">
                                    <li><a class="dropdown-item" href="template-1.html"><span class=""></span> Template 1</a></li>
                                    <li><a class="dropdown-item" href="template-2.html">Template 2</a></li>
                                    <li><a class="dropdown-item" href="template-3.html">Template 3</a></li>
                                    <li><a class="dropdown-item" href="template-4.html">Template 4</a></li>
                                    <li><a class="dropdown-item" href="template-5.html">Template 5</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Articles & Guides
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewbox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="dashboard-1.html">Dashboard 1</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <div class="container-fluid hero-wrapper align-items-center animation-element">
            <div class="row">
                <canvas id="particleCanvas"></canvas>
                <div class="object-circle disable-sm-screen z-0">
                    <img class="infinite-rotate" src="{{asset('theme/images/slider/circle-1.png')}}" alt="">
                </div>
                <div class="bs5-hero text-center mt-5 pt-5 pb-5 z-1">
                    <h1 class="crypt-grayscale-100">
                         Unpacking the
                        <span class="text-span-orange text-dark mt-4"> Latest</span>
                    </h1>

                    <h1 class="gd-text">Trends in Cryptocurrency</h1>
                    <p class="fs-5 crypt-grayscale-300 mt-4 width-500">Discovered latest top-notch stories from world wide community, quality informative podcast and verified creators.</p>
                    <div class="d-sm-flex justify-content-center gap-3 pt-5">
                        <a href="#" class="btn btn-primary btn-lg text-dark mb-3"><span>Explore</span>
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 7L13.5 15.5L8.5 10.5L2 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M16 7H22V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <button class="btn btn-secondary btn-lg btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Start Listening</button>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center gap-5">
                    <div class="meta">
                        <h4 class="crypt-blue-200">10+</h4>
                        <p class="mt-2">Crypto Articles</p>
                    </div>
                    <div class="meta">
                        <h4 class="crypt-blue-200">26</h4>
                        <p class="mt-2">Guides</p>
                    </div>
                    <div class="meta">
                        <h4 class="crypt-blue-200">15</h4>
                        <p class="mt-2">Podcasts</p>
                    </div>
                </div>
            </div>
            <!-- TradingView Ticker -->
            <div class="mt-5 pb-2 animation-element">
                <div class="tradingview-widget-container__widget">
                    <script src="{{asset('theme/external-embedding/embed-widget-ticker-tape.js')}}" async="">
                       {
                           "symbols": [
                               {
                                   "proName": "FOREXCOM:SPXUSD",
                                   "title": "S&P 500 Index"
                               },
                               {
                                   "proName": "FOREXCOM:NSXUSD",
                                   "title": "US 100 Cash CFD"
                               },
                               {
                                   "proName": "FX_IDC:EURUSD",
                                   "title": "EUR to USD"
                               },
                               {
                                   "proName": "BITSTAMP:BTCUSD",
                                   "title": "Bitcoin"
                               },
                               {
                                   "proName": "BITSTAMP:ETHUSD",
                                   "title": "Ethereum"
                               }
                           ],
                           "showSymbolLogo": true,
                           "isTransparent": true,
                           "displayMode": "adaptive",
                           "colorTheme": "dark",
                           "locale": "en"
                       }
                    </script>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- Features -->

    <!-- Main Content -->
    <section class="container-fluid animation-element hero-wrapper pt-100">
        <div class="container mt-2">
            <h4 class="fw-bold">
                <span class="fa fa-podcast"></span>
                {{$Category->title}}
            </h4>
            <div class="row mt-4">
                @foreach ($Single as $single)
                @if($single->type == "Videos")
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{url('/')}}/research/{{$single->slung}}" class="blog-card">
                            <iframe class="yt-frame thumbs" id="player" type="text/html"
                                src="https://www.youtube.com/embed/{{$single->whitepaper_link}}"
                                frameborder="0">
                            </iframe>

                        <div class="meta p-3">
                            <span class="badge badge text-uppercase text-bg-success">{{$single->type}}</span>
                            <h5 class="title-link min-h90">{{$single->title}}</h5>
                            <p class="crypt-grayscale-600">
                                <?php  echo estimateReadingTime($single->content);  ?> / updated on {{date('D M d Y', strtotime($single->updated_at))}}
                            </p>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{url('/')}}/research/{{$single->slung}}" class="blog-card">
                        <div class="thumb" style="background-image: url('{{$single->image_one}}');"></div>
                        <div class="meta p-3">
                            <span class="badge badge text-uppercase text-bg-success">{{$single->type}}</span>
                            <h5 class="title-link min-h90">{{$single->title}}</h5>
                            <p class="crypt-grayscale-600"><?php  echo estimateReadingTime($single->content);  ?> / updated on {{date('D M d Y', strtotime($single->updated_at))}}</p>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </section>


    <!-- Footer -->
    @include('front.footer')

    <!-- Main Content End -->
    <script src="{{asset('theme/ajax/libs/jquery/3.7.1/jquery.min.js')}}"></script>
    <script src="{{asset('theme/ajax/libs/popper.js/2.11.8/umd/popper.min.js')}}"></script>
    <script src="{{asset('theme/js/particle-canvas.js')}}"></script>
    <script src="{{asset('theme/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>

</body>
</html>
