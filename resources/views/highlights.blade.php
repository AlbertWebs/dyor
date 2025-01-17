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
     <!-- Main Content -->
     <section class="container animation-element mt-5 pt-1">
        <!-- TradingView Ticker -->
        <div class="tradingview-widget-container__widget card-bs mt-5">
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
    </section>
    <section class="container animation-element bs5-hero mt-2">
        <div class="row g-2">
            <div class="col-md-9">
                <!-- TradingView Symbol Overview -->
                <div class="card-bs">
                    <h5 class="p-3">✮ Crypto Highlights</h5>
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
                        "height": "425",
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
            <div class="col-md-3">
                <div class="card-bs gd-bg">
                    <h5 class="p-3">Trending Coins</h5>
                    <!-- TradingView Trending Coins -->
                    <div class="tradingview-widget-container__widget">
                        <script src="{{asset('theme/external-embedding/embed-widget-market-overview.js')}}" async="">
                        {
                            "title": "Cryptocurrencies",
                            "title_raw": "Cryptocurrencies",
                            "tabs": [
                            {
                                "title": "Trending",
                                "title_raw": "Overview",
                                "symbols": [
                                {
                                    "s": "CRYPTOCAP:TOTAL"
                                },
                                {
                                    "s": "BITSTAMP:BTCUSD"
                                },
                                {
                                    "s": "BITSTAMP:ETHUSD"
                                },
                                {
                                    "s": "COINBASE:SOLUSD"
                                },
                                {
                                    "s": "BINANCE:AVAXUSD"
                                },
                                {
                                    "s": "COINBASE:UNIUSD"
                                }
                                ],
                                "quick_link": {
                                "title": "More cryptocurrencies",
                                "href": "/markets/cryptocurrencies/prices-all/"
                                }
                            },
                            {
                                "title": "Bitcoin",
                                "title_raw": "Bitcoin",
                                "symbols": [
                                {
                                    "s": "BITSTAMP:BTCUSD"
                                },
                                {
                                    "s": "COINBASE:BTCEUR"
                                },
                                {
                                    "s": "COINBASE:BTCGBP"
                                },
                                {
                                    "s": "BITFLYER:BTCJPY"
                                },
                                {
                                    "s": "CME:BTC1!"
                                }
                                ],
                                "quick_link": {
                                "title": "More Bitcoin pairs",
                                "href": "/symbols/BTCUSD/markets/"
                                }
                            },
                            {
                                "title": "Ethereum",
                                "title_raw": "Ethereum",
                                "symbols": [
                                {
                                    "s": "BITSTAMP:ETHUSD"
                                },
                                {
                                    "s": "KRAKEN:ETHEUR"
                                },
                                {
                                    "s": "COINBASE:ETHGBP"
                                },
                                {
                                    "s": "BITFLYER:ETHJPY"
                                },
                                {
                                    "s": "BINANCE:ETHBTC"
                                },
                                {
                                    "s": "BINANCE:ETHUSDT"
                                }
                                ],
                                "quick_link": {
                                "title": "More Ethereum pairs",
                                "href": "/symbols/ETHUSD/markets/"
                                }
                            },
                            {
                                "title": "Solana",
                                "title_raw": "Solana",
                                "symbols": [
                                {
                                    "s": "COINBASE:SOLUSD"
                                },
                                {
                                    "s": "BINANCE:SOLEUR"
                                },
                                {
                                    "s": "COINBASE:SOLGBP"
                                },
                                {
                                    "s": "BINANCE:SOLBTC"
                                },
                                {
                                    "s": "HUOBI:SOLETH"
                                },
                                {
                                    "s": "BINANCE:SOLUSDT"
                                }
                                ],
                                "quick_link": {
                                "title": "More Solana pairs",
                                "href": "/symbols/SOLUSD/markets/"
                                }
                            },
                            {
                                "title": "Uniswap",
                                "title_raw": "Uniswap",
                                "symbols": [
                                {
                                    "s": "COINBASE:UNIUSD"
                                },
                                {
                                    "s": "KRAKEN:UNIEUR"
                                },
                                {
                                    "s": "COINBASE:UNIGBP"
                                },
                                {
                                    "s": "BINANCE:UNIBTC"
                                },
                                {
                                    "s": "KRAKEN:UNIETH"
                                },
                                {
                                    "s": "BINANCE:UNIUSDT"
                                }
                                ],
                                "quick_link": {
                                "title": "More Uniswap pairs",
                                "href": "/symbols/UNIUSD/markets/"
                                }
                            }
                            ],
                            "title_link": "/markets/cryptocurrencies/prices-all/",
                            "width": "100%",
                            "height": "425",
                            "showChart": true,
                            "dateRange": "1D",
                            "showFloatingTooltip": true,
                            "locale": "en",
                            "plotLineColorGrowing": "#2962FF",
                            "plotLineColorFalling": "#2962FF",
                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                            "gridLineColor": "rgba(240, 243, 250, 0)",
                            "scaleFontColor": "rgba(120, 123, 134, 1)",
                            "showSymbolLogo": true,
                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                            "colorTheme": "dark",
                            "isTransparent": true
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container animation-element mt-4">
        <h5>Trending DeFi Tokens</h5>
        <div class="row g-2 mt-2">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-4">
                <!-- TradingView Trending DeFi Tokens -->
                <div class="tradingview-widget-container card-bs">
                    <script src="{{asset('theme/external-embedding/embed-widget-symbol-overview.js')}}" async="">
                    {
                    "symbols": [
                    [
                        "COINBASE:UNIUSD|1M|USD"
                    ]
                    ],
                    "chartOnly": false,
                    "width": "100%",
                    "height": "320",
                    "locale": "en",
                    "colorTheme": "dark",
                    "autosize": false,
                    "showVolume": true,
                    "showMA": true,
                    "hideDateRanges": true,
                    "hideMarketStatus": false,
                    "hideSymbolLogo": false,
                    "scalePosition": "no",
                    "scaleMode": "Normal",
                    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                    "fontSize": "10",
                    "noTimeScale": false,
                    "valuesTracking": "1",
                    "changeMode": "price-and-percent",
                    "chartType": "area",
                    "maLineColor": "#2962FF",
                    "maLineWidth": 1,
                    "maLength": 9,
                    "headerFontSize": "normal",
                    "backgroundColor": "rgba(19, 23, 34, 0)",
                    "lineWidth": 2,
                    "lineType": 0,
                    "compareSymbol": {
                        "symbol": "BINANCE:UNIUSDT",
                        "lineColor": "#FF9800",
                        "lineWidth": 2,
                        "showLabels": true
                    },
                    "dateRanges": [
                        "1d|1",
                        "1m|30"
                    ]
                    }
                    </script>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-4">
                <!-- TradingView Trending DeFi Tokens -->
                <div class="tradingview-widget-container card-bs">
                    <script src="{{asset('theme/external-embedding/embed-widget-symbol-overview.js')}}" async="">
                    {
                    "symbols": [
                    [
                        "COINBASE:OSMOUSD|1M|USD"
                    ]
                    ],
                    "chartOnly": false,
                    "width": "100%",
                    "height": "320",
                    "locale": "en",
                    "colorTheme": "dark",
                    "autosize": false,
                    "showVolume": true,
                    "showMA": true,
                    "hideDateRanges": true,
                    "hideMarketStatus": false,
                    "hideSymbolLogo": false,
                    "scalePosition": "no",
                    "scaleMode": "Normal",
                    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                    "fontSize": "10",
                    "noTimeScale": false,
                    "valuesTracking": "1",
                    "changeMode": "price-and-percent",
                    "chartType": "area",
                    "maLineColor": "#2962FF",
                    "maLineWidth": 1,
                    "maLength": 9,
                    "headerFontSize": "normal",
                    "backgroundColor": "rgba(19, 23, 34, 0)",
                    "lineWidth": 2,
                    "lineType": 0,
                    "compareSymbol": {
                        "symbol": "BINANCE:OSMOUSDT",
                        "lineColor": "#FF9800",
                        "lineWidth": 2,
                        "showLabels": true
                    },
                    "dateRanges": [
                        "1d|1",
                        "1m|30"
                    ]
                    }
                    </script>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-4">
                <!-- TradingView Trending DeFi Tokens -->
                <div class="tradingview-widget-container card-bs">
                    <script src="{{asset('theme/external-embedding/embed-widget-symbol-overview.js')}}" async="">
                    {
                    "symbols": [
                    [
                        "COINBASE:ATOMUSD|1M|USD"
                    ]
                    ],
                    "chartOnly": false,
                    "width": "100%",
                    "height": "320",
                    "locale": "en",
                    "colorTheme": "dark",
                    "autosize": false,
                    "showVolume": true,
                    "showMA": true,
                    "hideDateRanges": true,
                    "hideMarketStatus": false,
                    "hideSymbolLogo": false,
                    "scalePosition": "no",
                    "scaleMode": "Normal",
                    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                    "fontSize": "10",
                    "noTimeScale": false,
                    "valuesTracking": "1",
                    "changeMode": "price-and-percent",
                    "chartType": "area",
                    "maLineColor": "#2962FF",
                    "maLineWidth": 1,
                    "maLength": 9,
                    "headerFontSize": "normal",
                    "backgroundColor": "rgba(19, 23, 34, 0)",
                    "lineWidth": 2,
                    "lineType": 0,
                    "compareSymbol": {
                        "symbol": "BINANCE:UNIUSDT",
                        "lineColor": "#FF9800",
                        "lineWidth": 2,
                        "showLabels": true
                    },
                    "dateRanges": [
                        "1d|1",
                        "1m|30"
                    ]
                }
                    </script>
                </div>
            </div>
        </div>
    </section>
    <section class="container animation-element mt-4">
        <h5>Coins at all-time Highs</h5>
        <div class="row g-2 mt-2">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "COINBASE:BCHUSD",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "COINBASE:SOLUSD",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BINANCE:AVAXUSDT",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BINANCE:DOGEUSDT",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "COINBASE:ADAUSD",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BITSTAMP:XRPUSD",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BINANCE:FTMUSDT",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BINANCE:BNBUSDT",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BINANCE:NEARUSDT",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BINANCE:PEPEUSDT",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BINANCE:SUIUSDT",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
            <!-- Single Ticker Widget -->
            <div class="tradingview-widget-container card-bs">
                <script src="{{asset('theme/external-embedding/embed-widget-single-quote.js')}}" async="">
                {
                    "symbol": "BINANCE:TIAUSDT",
                    "width": "100%",
                    "isTransparent": true,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                </script>
            </div>
        </div>
        </div>
    </section>
    <section class="container animation-element mt-4">
        <h5>Top Gainers</h5>
        <div class="row g-2 mt-2">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <!-- TradingView Marketcap -->
                    <div class="tradingview-widget-container card-bs gd-bg">
                    <div class="tradingview-widget-container__widget"></div>
                    <script src="{{asset('theme/external-embedding/embed-widget-mini-symbol-overview.js')}}" async="">
                    {
                    "symbol": "NYSE:MKFG",
                    "width": "100%",
                    "height": 220,
                    "locale": "en",
                    "dateRange": "1Y",
                    "colorTheme": "dark",
                    "isTransparent": true,
                    "autosize": false,
                    "largeChartUrl": ""
                    }
                    </script>
                    </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <!-- TradingView Marketcap -->
                    <div class="tradingview-widget-container card-bs gd-bg">
                    <div class="tradingview-widget-container__widget"></div>
                    <script src="{{asset('theme/external-embedding/embed-widget-mini-symbol-overview.js')}}" async="">
                    {
                    "symbol": "NASDAQ:RZLV",
                    "width": "100%",
                    "height": 220,
                    "locale": "en",
                    "dateRange": "1Y",
                    "colorTheme": "dark",
                    "isTransparent": true,
                    "autosize": false,
                    "largeChartUrl": ""
                    }
                    </script>
                    </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <!-- TradingView Marketcap -->
                    <div class="tradingview-widget-container card-bs gd-bg">
                    <div class="tradingview-widget-container__widget"></div>
                    <script src="{{asset('theme/external-embedding/embed-widget-mini-symbol-overview.js')}}" async="">
                    {
                    "symbol": "NASDAQ:ATGL",
                    "width": "100%",
                    "height": 220,
                    "locale": "en",
                    "dateRange": "1Y",
                    "colorTheme": "dark",
                    "isTransparent": true,
                    "autosize": false,
                    "largeChartUrl": ""
                    }
                    </script>
                    </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <!-- TradingView Marketcap -->
                    <div class="tradingview-widget-container card-bs gd-bg">
                    <div class="tradingview-widget-container__widget"></div>
                    <script src="{{asset('theme/external-embedding/embed-widget-mini-symbol-overview.js')}}" async="">
                    {
                    "symbol": "NASDAQ:OCTO",
                    "width": "100%",
                    "height": 220,
                    "locale": "en",
                    "dateRange": "1Y",
                    "colorTheme": "dark",
                    "isTransparent": true,
                    "autosize": false,
                    "largeChartUrl": ""
                    }
                    </script>
                    </div>
            </div>
        </div>
    </section>
    <section class="container animation-element mt-4">
        <div class="card-bs">
            <h5 class="p-3">Today's Top Cryptocurrency</h5>
            <!-- TradingView Today's Top Cryptocurrency -->
            <div class="tradingview-widget-container">
                <script src="{{asset('theme/external-embedding/embed-widget-market-quotes.js')}}" async="">
                {
                    "title": "Cryptocurrencies",
                    "title_raw": "Cryptocurrencies",
                    "title_link": "/markets/cryptocurrencies/prices-all/",
                    "width": "100%",
                    "height": "700",
                    "locale": "en",
                    "isTransparent": true,
                    "showSymbolLogo": true,
                    "symbolsGroups": [
                    {
                        "name": "Overview",
                        "symbols": [
                        {
                            "name": "CRYPTOCAP:TOTAL"
                        },
                        {
                            "name": "BITSTAMP:BTCUSD"
                        },
                        {
                            "name": "BITSTAMP:ETHUSD"
                        },
                        {
                            "name": "COINBASE:SOLUSD"
                        },
                        {
                            "name": "BINANCE:AVAXUSD"
                        },
                        {
                            "name": "COINBASE:UNIUSD"
                        }
                        ]
                    },
                    {
                        "name": "Bitcoin",
                        "symbols": [
                        {
                            "name": "BITSTAMP:BTCUSD"
                        },
                        {
                            "name": "COINBASE:BTCEUR"
                        },
                        {
                            "name": "COINBASE:BTCGBP"
                        },
                        {
                            "name": "BITFLYER:BTCJPY"
                        },
                        {
                            "name": "CME:BTC1!"
                        }
                        ]
                    },
                    {
                        "name": "Ethereum",
                        "symbols": [
                        {
                            "name": "BITSTAMP:ETHUSD"
                        },
                        {
                            "name": "KRAKEN:ETHEUR"
                        },
                        {
                            "name": "COINBASE:ETHGBP"
                        },
                        {
                            "name": "BITFLYER:ETHJPY"
                        },
                        {
                            "name": "BINANCE:ETHBTC"
                        },
                        {
                            "name": "BINANCE:ETHUSDT"
                        }
                        ]
                    },
                    {
                        "name": "Solana",
                        "symbols": [
                        {
                            "name": "COINBASE:SOLUSD"
                        },
                        {
                            "name": "BINANCE:SOLEUR"
                        },
                        {
                            "name": "COINBASE:SOLGBP"
                        },
                        {
                            "name": "BINANCE:SOLBTC"
                        },
                        {
                            "name": "HUOBI:SOLETH"
                        },
                        {
                            "name": "BINANCE:SOLUSDT"
                        }
                        ]
                    },
                    {
                        "name": "Uniswap",
                        "symbols": [
                        {
                            "name": "COINBASE:UNIUSD"
                        },
                        {
                            "name": "KRAKEN:UNIEUR"
                        },
                        {
                            "name": "COINBASE:UNIGBP"
                        },
                        {
                            "name": "BINANCE:UNIBTC"
                        },
                        {
                            "name": "KRAKEN:UNIETH"
                        },
                        {
                            "name": "BINANCE:UNIUSDT"
                        }
                        ]
                    }
                    ],
                    "colorTheme": "dark"
                }
                </script>
            </div>
        </div>
    </section>

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
