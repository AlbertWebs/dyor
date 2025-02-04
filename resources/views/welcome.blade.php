<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('theme/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/gsap.css')}}">


    {{--  --}}
    <!-- Primary Meta Tags -->
    <title>Do Your Own Research Podcasts Podcasts</title>
    <meta name="description" content="Discover the latest top-notch stories from the worldwide community, quality informative podcasts, and verified creators.">
    <meta name="keywords" content="Do Your Own Research Podcasts, DYOR, top-notch stories, podcasts, verified creators, informative content, community">
    <meta name="author" content="Do Your Own Research Podcasts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{url('/')}}/" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Do Your Own Research Podcasts">
    <meta property="og:description" content="Discover the latest top-notch stories from the worldwide community, quality informative podcasts, and verified creators.">
    <meta property="og:url" content="{{url('/')}}/">
    <meta property="og:site_name" content="Do Your Own Research Podcasts">
    <meta property="og:image" content="{{url('/')}}/og-image.jpg"> <!-- Replace with your image URL -->

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Do Your Own Research Podcasts">
    <meta name="twitter:description" content="Discover the latest top-notch stories from the worldwide community, quality informative podcasts, and verified creators.">
    <meta name="twitter:url" content="{{url('/')}}/">
    <meta name="twitter:image" content="{{url('/')}}/twitter-image.jpg"> <!-- Replace with your image URL -->
    <meta name="twitter:creator" content="@DYORLabz">

    <!-- Favicons -->
    <link rel="icon" href="{{url('/')}}/apple-touch-icon.png" type="image/x-icon"> <!-- Replace with your favicon URL -->
    <link rel="apple-touch-icon" href="{{url('/')}}/apple-touch-icon.png"> <!-- Replace with your icon URL -->

    <!-- Social Media Links -->
    <link rel="me" href="https://x.com/DYORLabz">
    <link rel="me" href="https://www.youtube.com/@D.Y.O.R_Show">

    <!-- Schema.org Markup -->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Do Your Own Research Podcasts",
    "url": "{{url('/')}}/",
    "description": "Discover the latest top-notch stories from the worldwide community, quality informative podcasts, and verified creators.",
    "sameAs": [
        "https://x.com/DYORLabz",
        "https://www.youtube.com/@D.Y.O.R_Show"
    ],
    "logo": "{{url('/')}}/logo.png",  <!-- Replace with your logo URL -->
    "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Customer Support",
        "email": "support@doyourownresear.ch"
    }
    }
    </script>
    {{--  --}}
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
                                src="https://www.youtube.com/embed/{{$trend->whitepaper_link}}"  frameborder="0">
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
                                src="https://www.youtube.com/embed/{{$single->whitepaper_link}}"  frameborder="0">
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
                       Frank Hazard is a passionate podcast host and cryptocurrency advocate committed to educating and empowering his audience in the fast-paced world of digital finance. As the voice behind the renowned podcast Do Your Own Research Podcasts (DYOR), Frank delivers insightful content designed to help listeners make informed decisions about blockchain technology, cryptocurrency investments, and decentralized finance (DeFi).
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
