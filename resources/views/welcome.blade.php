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
    <link rel="icon" type="image/svg" href="{{asset('theme/images/favicon.svg')}}">
</head>
<body class="crypt-dark">

    <!-- Hero/Header -->
    <section class="container-fluid">
        <!-- Header -->
        @include('front.headers')
        <!-- Offcanvas Navbar -->
    </section>
    <!-- Features -->

    <!-- Main Content -->
    <section class="container-fluid animation-element hero-wrapper pt-5">
        {{-- <div class="container mt-5">
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
        </div> --}}
        <div class="container mt-2">
            <h4 class="fw-bold">🌈 Top Stories</h4>
            <div class="row mt-4">
                {{-- Iterations --}}
                <?php
                  $Trending = DB::table('blogs')->orderBy('id','DESC')->limit(3)->get();
                ?>
                @foreach ($Trending as $trend)
                @if($trend->type == "Videos")
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{url('/')}}/research/{{$trend->slung}}" class="blog-card">
                            <iframe class="yt-frame thumbs" type="text/html"
                                src="http://www.youtube.com/embed/{{$trend->whitepaper_link}}"  frameborder="0">
                            </iframe>

                        <div class="meta p-3">
                            <span class="badge badge text-uppercase text-bg-success">{{$trend->type}}</span>
                            <h5 class="title-link min-h90">{{$trend->title}}</h5>
                            <p class="crypt-grayscale-600">
                                <?php  echo estimateReadingTime($trend->content);  ?> / updated on {{date('D M d Y', strtotime($trend->updated_at))}}
                            </p>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{url('/')}}/research/{{$trend->slung}}" class="blog-card">
                        <div class="thumb" style="background-image: url('{{$trend->image_one}}');"></div>
                        <div class="meta p-3">
                            <span class="badge badge text-uppercase text-bg-success">{{$trend->type}}</span>
                            <h5 class="title-link min-h90">{{$trend->title}}</h5>
                            <p class="crypt-grayscale-600">
                                <?php  echo estimateReadingTime($trend->content);  ?> / updated on {{date('D M d Y', strtotime($trend->updated_at))}}
                            </p>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
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
    <?php
        $Category = DB::table('categories')->get();
    ?>

    @foreach ($Category as $category)
    <?php
       $Blog = DB::table('blogs')->where('category',$category->id)->orderby('id','ASC')->limit('3')->get();
    ?>
        @if($Blog->isEmpty())

        @else
        <section class="container animation-element mt-2">
            <h4 class="fw-bold">🌈 {{$category->title}}</h4>
            <div class="row mt-4">
                @foreach ($Blog as $single)
                @if($single->type == "Videos")
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{url('/')}}/research/{{$single->slung}}" class="blog-card">
                            <iframe class="yt-frame thumbs" type="text/html"
                                src="http://www.youtube.com/embed/{{$single->whitepaper_link}}"  frameborder="0">
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
        </section>
        @endif
    @endforeach



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

    @include('front.class')


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
