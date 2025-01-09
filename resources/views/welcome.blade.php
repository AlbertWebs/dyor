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
<body class="crypt-dark section-dark">

    <!-- Hero/Header -->
    <section class="container-fluid temp5-bg">
        <!-- Header -->
        @include('front.header')
        <!-- Offcanvas Navbar -->
        <nav class="navbar py-0 navbar-dark bg-dark">
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
                                    News & Analysis
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
        </div>
    </section>
    <!-- Features -->

    <!-- Main Content -->
    <section class="container-fluid animation-element hero-wrapper pt-5">
        <div class="container mt-5">
            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-6 mb-4">
                    <a href="blog-single.html" class="blog-card bg-gradient">
                        <div class="thumb" style="background-image: url('{{asset('theme/images/blog/blog-1.jpg')}}');"></div>
                        <div class="article">
                            <div class="d-flex flex-row gap-2 align-items-center">
                                <div class="tag">
                                    <span class="badge text-bg-light">Announcements</span>
                                </div>
                                <div class="meta">
                                    <p class="crypt-grayscale-500">2 minute read</p>
                                </div>
                            </div>
                            <h3 class="title-link">Forget Solana: These Cryptos going to outperform SOL</h3>
                            <p>Bitcoin prices rallied to $64,000 per coin early Friday with emboldened crypto traders betting their cash on fresh upside for the OG token.</p>
                            <div class="auth">
                                <img src="{{asset('theme/images/blog/tv.jpg')}}" alt="" class="author">
                                <span class="author-name title-link">TradingView</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-6">
                    <div class="row p-3">
                        <div class="d-flex flex-row blog-card-divider align-items-center gap-4">
                            <div class="blog-card-content">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <div class="tag">
                                        <span class="badge text-bg-light">MT Newswires</span>
                                    </div>
                                    <div class="meta">
                                        <p>Sep, 21, 2024</p>
                                    </div>
                                </div>

                                    <h5 class="title-link">
                                        <a href="blog-single.html">
                                            Top Cryptocurrencies Mixed; Bitcoin Dips Below $63,000
                                        </a>
                                    </h5>
                                <div class="mt-3">
                                    <a href="#"><img src="{{asset('theme/images/blog/nbc.jpg')}}" alt="" class="author"><span class="author-name title-link">NBC News</span></a>
                                </div>
                            </div>
                            <div class="blog-image-sm">
                                <img alt="" src="{{asset('theme/images/blog/blog-2.jpg')}}">
                            </div>
                        </div>
                        <div class="d-flex flex-row blog-card-divider align-items-center gap-4 mt-3">
                            <div class="blog-card-content">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <div class="tag">
                                        <span class="badge text-bg-light">Blockchain</span>
                                    </div>
                                    <div class="meta">
                                        <p>Sep, 21, 2024</p>
                                    </div>
                                </div>
                                <h5 class="title-link">
                                    <a href="blog-single.html">
                                        W Token Price Surges 6.35% on Securitize-Wormhole Partnership News
                                    </a>
                                </h5>
                                <div class="mt-3">
                                    <a href="#"><img src="{{asset('theme/images/blog/coindesk.jpg')}}" alt="" class="author"><span class="author-name title-link">Coindesk</span></a>
                                </div>
                            </div>
                            <div class="blog-image-sm">
                                <img alt="" src="{{asset('theme/images/blog/blog-4.jpg')}}">
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center gap-4 mt-3">
                            <div class="blog-card-content">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <div class="tag">
                                        <span class="badge text-bg-light">Elon Musk</span>
                                    </div>
                                    <div class="meta">
                                        <p>Sep, 21, 2024</p>
                                    </div>
                                </div>
                                <h5 class="title-link">
                                    <a href="blog-single.html">
                                        Elon Musk Faces Potential SEC Sanctions After Skipping Twitter Probe Testimony...
                                    </a>
                                </h5>
                                <div class="mt-3">
                                    <a href="#"><img src="{{asset('theme/images/blog/decrypt.jpg')}}" alt="" class="author"><span class="author-name title-link">Decrypt</span></a>
                                </div>
                            </div>
                            <div class="blog-image-sm">
                                <img alt="" src="{{asset('theme/images/blog/blog-7.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-2">
            <h4 class="fw-bold">🌈 Top Stories</h4>
            <div class="row mt-4">
                <div class="col-12 col-md-4 mb-4">
                    <a href="blog-single.html" class="blog-card">
                        <div class="thumb" style="background-image: url('{{asset('theme/images/blog/blog-12.jpg')}}');"></div>
                        <div class="meta p-3">
                            <span class="badge badge text-uppercase text-bg-success">Metaverse</span>
                            <h5 class="title-link">FOMC holds rates steady, Bitcoin and Ethereum price decline</h5>
                            <p class="crypt-grayscale-600">2 mins read / updated on Tue Dec 29 2024</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <a href="blog-single.html" class="blog-card">
                        <div class="thumb" style="background-image: url('{{asset('theme/images/blog/blog-13.jpg')}}');"></div>
                        <div class="meta p-3">
                            <span class="badge badge text-uppercase text-bg-info">Ethereum</span>
                            <h5 class="title-link">Restaking with ETHx | Boosted reward programs</h5>
                            <p class="crypt-grayscale-600">4 mins read / updated on Fri Oct 15 2024</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <a href="blog-single.html" class="blog-card">
                        <div class="thumb" style="background-image: url('{{asset('theme/images/blog/blog-14.jpg')}}');"></div>
                        <div class="meta p-3">
                            <span class="badge badge text-uppercase text-bg-warning">Trading</span>
                            <h5 class="title-link">Wrapping tokens enables broader across the Web3 ecosystem</h5>
                            <p class="crypt-grayscale-600">5 mins read / updated on Sat May 22 2024</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container animation-element mt-2">
        <h4 class="fw-bold">🌈 Trending News</h4>
        <div class="row mt-4">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                <a href="blog-single.html" class="blog-card">
                  <div class="thumb" style="background-image: url('{{asset('theme/images/blog/blog-3.jpg')}}');"></div>
                  <div class="article">
                        <span class="badge text-bg-light">Cryptocurrency</span>
                        <h5 class="title-link">Grayscale XRP Trust Surges 11.44% One Week After Launch</h5>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                <a href="blog-single.html" class="blog-card">
                  <div class="thumb" style="background-image: url('{{asset('theme/images/blog/blog-6.jpg')}}');"></div>
                  <div class="article">
                        <span class="badge text-bg-light">Cryptocurrency</span>
                        <h5 class="title-link">Why Bitcoin and Ethereum prices dropped the Cryptocurrency</h5>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                <a href="blog-single.html" class="blog-card">
                  <div class="thumb" style="background-image: url('{{asset('theme/images/blog/blog-5.jpg')}}');"></div>
                  <div class="article">
                        <span class="badge text-bg-light">Tradingview</span>
                        <h5 class="title-link">How to leverage Tradingview charts for successful trading</h5>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Crypto highlights -->
    <section class="container animation-element mt-5 pb-4 g-2">
        <div class="d-flex justify-content-between align-items-center">
            <h3>🌈 Crypto highlights</h3>
            <div class="col-auto">
                <a href="https://www.tradingview.com/markets/" class="btn btn-dark btn-block" tabindex="-1" role="button">All Market</a>
            </div>
        </div>
        <div class="row mt-4 g-2">
            <div class="col-md-8">
                <!-- TradingView Symbol Overview -->
                <div class="tradingview-widget-container card">
                    <div class="tradingview-widget-container__widget">
                        <script src="{{asset('theme/external-embedding/embed-widget-symbol-overview.js')}}" async="">
                        {
                        "symbols": [
                        [
                        "BINANCE:ETHUSDT|1M"
                        ],
                        [
                        "BINANCE:NEARUSDT|1M"
                        ],
                        [
                        "BINANCE:BTCUSDT|1M"
                        ],
                        [
                        "BINANCE:LINKUSDT|1M"
                        ],
                        [
                        "BINANCE:BNBUSDT|1M"
                        ],
                        [
                        "BINANCE:DOGEUSDT|1M"
                        ],
                        [
                        "BINANCE:SUIUSDT|1M"
                        ],
                        [
                        "BINANCE:FTMUSDT|1M"
                        ],
                        [
                        "BINANCE:SOLUSDT|1M"
                        ]
                        ],
                        "chartOnly": false,
                        "width": "100%",
                        "height": "373",
                        "locale": "en",
                        "colorTheme": "dark",
                        "autosize": true,
                        "showVolume": true,
                        "showMA": true,
                        "hideDateRanges": false,
                        "hideMarketStatus": false,
                        "hideSymbolLogo": false,
                        "scalePosition": "right",
                        "scaleMode": "Normal",
                        "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                        "fontSize": "14",
                        "noTimeScale": false,
                        "valuesTracking": "3",
                        "changeMode": "price-and-percent",
                        "chartType": "area",
                        "maLineColor": "#2962FF",
                        "maLineWidth": 1,
                        "maLength": 9,
                        "headerFontSize": "medium",
                        "backgroundColor": "rgba(19, 23, 34, 0)",
                        "lineType": 0,
                        "dateRanges": [
                        "1d|1",
                        "5d|5",
                        "1m|30",
                        "1D|1D",
                        "60m|1W",
                        "all|1M"
                        ],
                        "upColor": "#22ab94",
                        "downColor": "#f7525f",
                        "borderUpColor": "#22ab94",
                        "borderDownColor": "#f7525f",
                        "wickUpColor": "#22ab94",
                        "wickDownColor": "#f7525f"
                    }
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row g-2">
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                                {
                                "symbol": "BINANCE:FTMUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                                {
                                "symbol": "BINANCE:BTCUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                                {
                                "symbol": "BINANCE:NEARUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                                {
                                "symbol": "BINANCE:FTMUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                                {
                                "symbol": "BINANCE:BNBUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                                {
                                "symbol": "BINANCE:DOGEUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instant swap -->
    <section class="container animation-element mt-5 pt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="grayscale-item" style="width:100%;" src="{{asset('uploads/heroimg.50c26b48.svg')}}" alt="">
            </div>
            <div class="col-md-6 p-5">
                <div class="text-left">
                    <h2 class="heading">Meet the host</h2>
                    <p class="crypt-grayscale-400 mt-3">
                       {{--  --}}
                       Frank Hazard is a passionate podcast host and cryptocurrency advocate committed to educating and empowering his audience in the fast-paced world of digital finance. As the voice behind the renowned podcast Do Your Own Research (DYOR), Frank delivers insightful content designed to help listeners make informed decisions about blockchain technology, cryptocurrency investments, and decentralized finance (DeFi).
                       <br><br>
                       With a deep understanding of the crypto space, Frank unpacks complex topics, spotlights emerging trends, and hosts conversations with industry pioneers and thought leaders. His engaging storytelling and straightforward approach have made DYOR a go-to resource for both seasoned investors and curious newcomers.
                       <br><br>
                       Outside the studio, Frank is a dedicated learner, constantly exploring innovative blockchain applications and sharing tips on how to approach the crypto market responsibly. His mission is simple: to inspire his audience to embrace knowledge, take ownership of their financial journey, and thrive in the digital economy.
                       {{--  --}}
                    </p>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <a class="btn btn-editor btn-info" href="trading-bots.html" role="button">Linkedin Profile</a>
                    <button class="btn btn-link text-link underline crypt-grayscale-600 fw-medium text-sm" type="button">Learn more</button>
                </div>
            </div>
        </div>
    </section>
    <!-- See your crypto -->

    <!-- Offcanvas Notifications -->
    <div class="offcanvas offcanvas-end" tabindex="0" id="offcanvasNotify">
        <div class="offcanvas-header card-line">
            <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Notifications <span class="crypt-grayscale-500 text-sm mb-0">3</span></h5>
            <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
        <div class="offcanvas-body">
            <h6 class="crypt-grayscale-400">Today</h6>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p class="crypt-grayscale-600 text-sm mb-0">30 min ago</p>
                <a class="text-dark fs-6 fw-bold text-link" href="#!">🔐 Account Login</a>
                <p class="mt-2"><strong>Hollo Frank! </strong>You have logged in your account from Windows Chrome 130.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <p class="crypt-grayscale-600 text-sm mb-0">1 hours ago</p>
                <a class="text-dark fs-6 fw-bold text-link" href="#!">📢 Podcast Starting in 30Mins</a>
                <p class="mt-2">We are starting our podcast in the next like 30 minutes, Stay tuned ama ukwende na huko.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <p class="crypt-grayscale-600 text-sm mb-0">2 hours ago</p>
                <a class="text-dark fs-6 fw-bold text-link" href="#!">🔖 Some Notification</a>
                <p class="mt-2"><strong>Hollo Frank!</strong> Your Ideas are great!! Now i am running out of things to write</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="container-fluid text-left text-lg-start crypt-footer mt-5 animation-element">
        <div class="container mt-5 in-view">
            <div class="row mt-5 pt-3">
                <div class="col-12 col-sm-12 col-lg-4 pb-5">
                    <!-- Content -->
                    <div class="mb-4">
                        <!-- Logo -->
                        <div class="crypt-logo dark">
                            <h3>D.Y.O.R</h3>
                        </div>
                        <div class="crypt-logo light">
                            <h3>D.Y.O.R</h3>
                        </div>
                        <p class="card-text mt-2">
                            Discover the latest top-notch stories from a worldwide community, featuring quality, informative podcasts and content from verified and trusted creato
                        </p>
                    </div>
                    <div class="text-left social-icons mt-4">
                        <a href="" rel="nofollow" target="_blank">
                            <img src="{{asset('theme/images/social/x.svg')}}" alt="" width="24">
                        </a>
                        <a href="" rel="nofollow" target="_blank">
                            <img src="{{asset('theme/images/social/facebook.svg')}}" alt="" width="24">
                        </a>
                        <a href="" rel="nofollow" target="_blank">
                            <img src="{{asset('theme/images/social/instagram.svg')}}" alt="" width="24">
                        </a>
                        <a href="" rel="nofollow" target="_blank">
                            <img src="{{asset('theme/images/social/tiktok.svg')}}" alt="" width="24">
                        </a>
                    </div>
                </div>
                 <div class="col-12 col-sm-12 col-lg-8">
                    <div class="row">
                        <div class="col-6 col-md-3 col-sm-6 col-lg-3 text-link mb-3">
                            <!-- Links -->
                            <h6 class="mb-3 crypt-grayscale-300">Products</h6>
                            <p><a href="#!" class="text-reset">Supercharts</a></p>
                            <p><a href="#!" class="text-reset">Stock market</a></p>
                            <p><a href="#!" class="text-reset">Forex screener</a></p>
                            <p><a href="#!" class="text-reset">Crypto market</a></p>
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-lg-3 text-link mb-3">
                            <!-- Links -->
                            <h6 class="mb-3 crypt-grayscale-300">For Business</h6>
                            <p><a href="#!" class="text-reset">Widgets</a></p>
                            <p><a href="#!" class="text-reset">Advertising</a></p>
                            <p><a href="#!" class="text-reset">Script libraries</a></p>
                            <p><a href="#!" class="text-reset">Lightweight Charts™</a></p>
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-lg-3 text-link mb-3">
                            <!-- Links -->
                            <h6 class="mb-3 crypt-grayscale-300">Buy</h6>
                            <p><a href="#!" class="text-reset">Buy Bitcoin</a></p>
                            <p><a href="#!" class="text-reset">Buy Ethereum</a></p>
                            <p><a href="#!" class="text-reset">Buy USDT</a></p>
                            <p><a href="#!" class="text-reset">Buy Cardano</a></p>
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-lg-3 text-link mb-3">
                            <!-- Links -->
                            <h6 class="mb-3 crypt-grayscale-300">Community</h6>
                            <p><a href="#!" class="text-reset">Refer a friend</a></p>
                            <p><a href="#!" class="text-reset">Scripts</a></p>
                            <p><a href="#!" class="text-reset">Moderators</a></p>
                        </div>
                    </div>
                 </div>
            </div>
             <!-- Copyright -->
             <div class="text-center p-4 mt-4 crypt-footer-copyright">
                Copyright © {{date('Y')}} - Powered by <a class="fw-bold link" href="https://designekta.com" rel="nofollow" target="_blank">Designekta Studios</a>
            </div>
        </div>

    </footer>

    <!-- Main Content End -->
    <script src="{{asset('theme/ajax/libs/jquery/3.7.1/jquery.min.js')}}"></script>
    <script src="{{asset('theme/ajax/libs/popper.js/2.11.8/umd/popper.min.js')}}"></script>
    <script src="{{asset('theme/js/particle-canvas.js')}}"></script>
    <script src="{{asset('theme/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>

</body>
</html>
