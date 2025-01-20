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

            <div class="risk-policy">
                <h1>Risk Policy for www.doyourownresear.ch</h1>
                {{-- <p>Effective Date: [Insert Date]</p> --}}

                <h4>Introduction</h4>
                <p>At www.doyourownresear.ch (the "Website"), we are committed to providing accurate and reliable information. However, we recognize that the use of any online resource involves certain risks. This Risk Policy outlines potential risks associated with using the Website and our measures to mitigate them. By using the Website, you agree to the terms of this Risk Policy.</p>

                <h4>Risks Associated with Using the Website</h4>
                <ul>
                  <li><strong>Information Accuracy:</strong> While we strive to ensure the information provided on the Website is accurate and up-to-date, we cannot guarantee its completeness or reliability. Users are advised to verify information independently before relying on it.</li>
                  <li><strong>Third-Party Links:</strong> The Website may include links to third-party websites. We do not control or endorse the content of these websites, and users access them at their own risk.</li>
                  <li><strong>Technical Risks:</strong> The Website may experience temporary downtime, data loss, or other technical issues due to factors beyond our control.</li>
                  <li><strong>Cybersecurity Risks:</strong> Although we implement security measures to protect user data, there is always a risk of unauthorized access or data breaches when using online platforms.</li>
                </ul>

                <h4>User Responsibility</h4>
                <p>By using the Website, you acknowledge and accept the following responsibilities:</p>
                <ul>
                  <li>To conduct your own research and exercise critical judgment when using the information provided on the Website.</li>
                  <li>To use updated antivirus software and maintain secure internet practices to reduce cybersecurity risks.</li>
                  <li>To refrain from engaging in illegal or malicious activities that could compromise the Website's security or integrity.</li>
                </ul>

                <h4>Mitigation Measures</h4>
                <p>We take the following steps to minimize risks:</p>
                <ul>
                  <li>Regularly updating and maintaining the Website to ensure its functionality and security.</li>
                  <li>Using encryption and secure protocols to protect sensitive user data.</li>
                  <li>Providing disclaimers and transparency about the limitations of our content and services.</li>
                </ul>

                <h4>Limitation of Liability</h4>
                <p>www.doyourownresear.ch is not liable for any direct, indirect, incidental, or consequential damages arising from your use of the Website. This includes, but is not limited to, financial losses, reputational damage, or data breaches resulting from reliance on the information or services provided.</p>

                <h4>Policy Updates</h4>
                <p>We may update this Risk Policy periodically to reflect changes in our practices or relevant laws. Updates will be posted on this page with the updated effective date.</p>

                <h4>Contact Information</h4>
                <p>If you have questions or concerns regarding this Risk Policy, please contact us:</p>
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
