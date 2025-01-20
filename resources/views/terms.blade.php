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
            <div class="terms-and-conditions">
                <h1>Terms and Conditions for www.doyourownresear.ch</h1>
                <p>Effective Date: 20th January 2025</p>

                <h4>Introduction</h4>
                <p>Welcome to www.doyourownresear.ch (the "Website"). By accessing or using this Website, you agree to comply with and be bound by the following terms and conditions ("Terms"). Please read these Terms carefully before using the Website. If you do not agree with any part of these Terms, you must not use the Website.</p>

                <h4>Use of the Website</h4>
                <p>You agree to use the Website only for lawful purposes and in a manner that does not infringe the rights of, restrict, or inhibit anyone else’s use and enjoyment of the Website. Prohibited behavior includes harassing or causing distress or inconvenience to any other user, transmitting obscene or offensive content, or disrupting the normal flow of dialogue within the Website.</p>

                <h4>Intellectual Property Rights</h4>
                <p>All content on the Website, including text, graphics, logos, images, and software, is the property of www.doyourownresear.ch or its content suppliers and is protected by international copyright and trademark laws. Unauthorized use, reproduction, or distribution of this content is strictly prohibited.</p>

                <h4>User Content</h4>
                <p>If you submit or upload any content to the Website, you grant us a non-exclusive, royalty-free, perpetual, and worldwide license to use, reproduce, modify, and distribute that content in connection with the operation of the Website. You are responsible for ensuring that your content does not violate any third-party rights or applicable laws.</p>

                <h4>Disclaimer of Warranties</h4>
                <p>The Website is provided "as is" and "as available" without any representations or warranties of any kind, either express or implied. We do not guarantee the accuracy, completeness, or reliability of the information on the Website.</p>

                <h4>Limitation of Liability</h4>
                <p>In no event shall www.doyourownresear.ch or its affiliates be liable for any indirect, incidental, special, consequential, or punitive damages arising from or in connection with your use of the Website, even if advised of the possibility of such damages.</p>

                <h4>Links to Third-Party Websites</h4>
                <p>The Website may contain links to third-party websites. These links are provided for your convenience, and we have no control over the content or practices of these websites. We do not endorse or assume responsibility for any third-party websites or their content.</p>

                <h4>Termination</h4>
                <p>We reserve the right to terminate or suspend your access to the Website at our sole discretion, without notice, for conduct that we believe violates these Terms or is harmful to other users of the Website, us, or third parties.</p>

                <h4>Changes to These Terms</h4>
                <p>We may revise these Terms from time to time. Any changes will be effective immediately upon posting on this page, and your continued use of the Website signifies your agreement to the updated Terms.</p>

                <h4>Governing Law</h4>
                <p>These Terms are governed by and construed in accordance with the laws of [Insert Jurisdiction]. Any disputes arising under these Terms shall be subject to the exclusive jurisdiction of the courts located in [Insert Jurisdiction].</p>

                <h4>Contact Information</h4>
                <p>If you have any questions or concerns about these Terms, please contact us:</p>
                <p>Email: support@doyourownresear.ch</p>
                {{-- <p>Address: Online</p> --}}
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
