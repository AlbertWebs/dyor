 <!-- Header -->
        <header class="fixed-top">
            <div class="container-fluid mt-3">
                <!-- Body -->
                <div class="header-boxed md-escape">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="crypt-logo dark">
                            <a class="crypt-link" href="{{url('/')}}">
                                <h3>D.Y.O.R</h3>
                            </a>
                        </div>
                        <div class="crypt-logo light">
                            <a class="crypt-link" href="{{url('/')}}">
                                <h3>D.Y.O.R</h3>
                            </a>
                        </div>
                        <!-- Menu item -->
                        <div class="transparent-menu-bg flex hidesmscreen in-view">
                            <div class="d-flex align-items-center gap-4">
                                @include('front.menu')
                            </div>
                        </div>
                        <!-- Navigation menu / Button -->
                        <div class="col-auto d-flex flex-row align-items-center">
                            <div class="user-settings gap-2 gap-sm-3">

                                <div class="flex">
                                    <a class="btn btn-editor btn-primary " href="#!"> Subscribe</a>
                                </div>

                                <div class="flex hide-mobile">
                                    <a class="btn btn-lg shiny-cta signup-btn" href="https://t.me/+kadh0UzDy1o3N2Vk"><img src="{{asset('theme/images/icon/checkmark.svg')}}" alt="" width="24"> Join DYOR</a>
                                </div>

                                <!-- Dark | Light Mode -->
                                <div class="flex">
                                    <button id="darkMode">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" class="sun">
                                        <path d="M10 2a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 2ZM10 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 15ZM10 7a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM15.657 5.404a.75.75 0 1 0-1.06-1.06l-1.061 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM6.464 14.596a.75.75 0 1 0-1.06-1.06l-1.06 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM18 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 18 10ZM5 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 5 10ZM14.596 15.657a.75.75 0 0 0 1.06-1.06l-1.06-1.061a.75.75 0 1 0-1.06 1.06l1.06 1.06ZM5.404 6.464a.75.75 0 0 0 1.06-1.06l-1.06-1.06a.75.75 0 1 0-1.061 1.06l1.06 1.06Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Hamburger Menu -->
                                <div id="mobile_menu" class="close">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                            <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                            <path d="M4 6H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @include('front.mobile-menu')

        <!-- Hero -->
        <div class="container-fluid hero-temp2 animation-element mt-3">
            <div class="container">
                <div class="row pb-5">
                    <div class="object-circle z-0">
                        <img class="infinite-rotate" src="{{asset('theme/images/slider/circle-1.png')}}" alt="icon">
                    </div>
                    <div class="row  mt-5 pt-5 pb-5 z-1">
                        <h1 class="text-white pt-5 mt-5"> Revolutionizing future steps <br>in <span class="gd-text">crypto</span> and <span class="gd-text">fintech</span></h1>
                        <p class="text-white mt-2">
                            Discover the latest top-notch stories from the worldwide community, featuring quality, informative podcasts,<br>
                            engaging articles, and content from verified creators who bring unique perspectives and valuable insights
                        </p>
                        <div class="d-sm-flex mt-4">
                            <a href="{{url('/')}}/podcasts" class="btn btn-light btn-lg rounded-pill mb-3 me-2">
                                Podcasts
                            </a>
                            <a target="new" href="https://t.me/+kadh0UzDy1o3N2Vk" class="btn btn-primary btn-lg btn-gradient text-white rounded-pill mb-3">
                                Join D.Y.O.R
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row mt-4 pb-5">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-4 mb-4">
                        <!-- TradingView Trending DeFi Tokens -->
                        <div class="tradingview-widget-container card">
                            <script src="{{asset('theme/external-embedding/embed-widget-symbol-overview.js')}}" async="">
                            {
                            "symbols": [
                            [
                                "COINBASE:BTCUSD|1M|USD"
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
                                "symbol": "BINANCE:BTCUSDT",
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
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-4 mb-4">
                        <!-- TradingView Trending DeFi Tokens -->
                        <div class="tradingview-widget-container card">
                            <script src="{{asset('theme/external-embedding/embed-widget-symbol-overview.js')}}" async="">
                            {
                            "symbols": [
                            [
                                "COINBASE:ETHUSD|1M|USD"
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
                                "symbol": "BINANCE:ETHUSDT",
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
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-4 mb-4">
                        <!-- TradingView Trending DeFi Tokens -->
                        <div class="tradingview-widget-container card">
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
            </div>
        </div>
