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
                            Discover the latest top-notch stories from the worldwide community, featuring quality, informative podcasts,engaging articles, and content from verified creators who bring unique perspectives and valuable insights
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
                            <h6 class="mb-3 crypt-grayscale-300">Resources</h6>
                            <p><a href="{{url('/')}}/highlights" class="text-reset">Highlights</a></p>
                            <p><a href="https://www.tradingview.com/markets/stocks-usa/" class="text-reset">Stock market</a></p>
                            <p><a href="https://www.tradingview.com/markets/futures/" class="text-reset">Futures</a></p>
                            <p><a href="https://www.tradingview.com/markets/cryptocurrencies/" class="text-reset">Crypto market</a></p>
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-lg-3 text-link mb-3">
                            <!-- Links -->
                            <h6 class="mb-3 crypt-grayscale-300">Quick Links</h6>
                            <?php
                               $Categories = DB::table('categories')->get();
                            ?>
                             @foreach ($Categories as $categores)
                            <p><a href="{{url('/')}}/researches/{{$categores->slung}}" class="text-reset">{{$categores->title}}</a></p>
                            @endforeach
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-lg-3 text-link mb-3">
                            <!-- Links -->
                            <h6 class="mb-3 crypt-grayscale-300">Leagalities</h6>
                            <p><a href="{{url('/')}}/terms-and-conditions" class="text-reset">Terms and Conditions</a></p>
                            <p><a href="{{url('/')}}/privacy-policy" class="text-reset">Privacy Policies</a></p>
                            <p><a href="{{url('/')}}/risk-policy" class="text-reset">Risk Policies</a></p>
                            {{-- <p><a href="#!" class="text-reset">Copyright Statements</a></p> --}}
                        </div>
                        <div class="col-6 col-md-3 col-sm-6 col-lg-3 text-link mb-3">
                            <!-- Links -->
                            <h6 class="mb-3 crypt-grayscale-300">Community</h6>
                            <p><a href="https://t.me/+kadh0UzDy1o3N2Vk" class="text-reset">Refer a friend</a></p>
                            <p><a href="https://t.me/+kadh0UzDy1o3N2Vk" class="text-reset">Join</a></p>
                            <p><a href="mailto:info@doyourownresear.ch" class="text-reset">Mail Us</a></p>
                        </div>
                    </div>
                 </div>
            </div>
             <!-- Copyright -->
             <div class="text-center p-4 mt-4 crypt-footer-copyright" style="color:#868e96; font-weight:600">
                Copyright © {{date('Y')}} All Rights Reserved - Powered by <a style="color:#868e96; font-weight:600" class="fw-bold link" href="https://designekta.com" rel="nofollow" target="_blank">Designekta Studios</a>
            </div>
        </div>

    </footer>
