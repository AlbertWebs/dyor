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

    </section>
    <!-- Features -->
    <br><br>
    <!-- Main Content -->
    <section class="container-fluid animation-element hero-wrapper mt-5 pt-4">

        <!-- TradingView Ticker Tape -->
        <div class="tradingview-widget-container__widget mb-2 card-bs">
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

    <!-- Main Content -->
    <section class="container-fluid animation-element hero-wrapper pt-50">
        <div class="container mt-2">
            <h4 class="fw-bold">
                <span class="fa fa-podcast"></span>
                IRL Meetups
            </h4>
            <div class="row mt-4">
                <div class="col-12 col-md-4 mb-4">
                    <a href="blog-single.html" class="blog-card">
                        <div class="thumb" style="background-image: url('{{asset('theme/images/blog/blog-13.jpg')}}');"></div>
                        <div class="meta p-3">
                            <h5 class="title-link">Restaking with ETHx | Boosted reward programs</h5>
                            <p class="crypt-grayscale-600">4 mins read / updated on Fri Oct 15 2024</p>
                        </div>
                    </a>
                </div>
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
