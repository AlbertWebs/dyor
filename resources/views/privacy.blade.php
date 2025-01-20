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
            <div class="privacy-policy">
                <h1>Privacy Policy for www.doyourownresear.ch</h1>
                <p>Effective Date: 20th January 2025</p>

                <h4>Introduction</h4>
                <p>Welcome to www.doyourownresear.ch (the "Website"). We are committed to protecting your privacy and ensuring that your personal information is handled in a safe and responsible manner. This Privacy Policy explains how we collect, use, and protect your information when you use our Website.</p>

                <h4>Information We Collect</h4>
                <p>We may collect the following types of information:</p>
                <ul>
                  <li><strong>Personal Information:</strong> Your name, email address, phone number, or other information you provide when contacting us or subscribing to our services.</li>
                  <li><strong>Usage Data:</strong> Information about how you use the Website, including your IP address, browser type, and browsing behavior.</li>
                  <li><strong>Cookies:</strong> Small data files stored on your device to enhance your user experience.</li>
                </ul>

                <h4>How We Use Your Information</h4>
                <p>Your information may be used for the following purposes:</p>
                <ul>
                  <li>To provide and maintain our services</li>
                  <li>To improve the functionality and user experience of the Website</li>
                  <li>To communicate with you, including responding to inquiries</li>
                  <li>To comply with legal obligations</li>
                </ul>

                <h4>Sharing Your Information</h4>
                <p>We do not sell or rent your personal information to third parties. However, we may share your information with:</p>
                <ul>
                  <li>Service providers who assist us in operating the Website</li>
                  <li>Legal authorities if required by law</li>
                  <li>Business partners with your consent</li>
                </ul>

                <h4>Your Privacy Rights</h4>
                <p>You have the right to:</p>
                <ul>
                  <li>Access, update, or delete your personal information</li>
                  <li>Opt out of marketing communications</li>
                  <li>Disable cookies through your browser settings</li>
                </ul>

                <h4>Data Security</h4>
                <p>We take appropriate security measures to protect your personal information from unauthorized access, alteration, or disclosure. However, no method of transmission over the Internet is completely secure.</p>

                <h4>Changes to This Privacy Policy</h4>
                <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page, and the updated date will be reflected at the top of this policy.</p>

                <h4>Contact Us</h4>
                <p>If you have any questions about this Privacy Policy, please contact us at:</p>
                <p>Email: support@doyourownresear.ch</p>
                {{-- <p>Address: [Insert Address Here]</p> --}}
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
