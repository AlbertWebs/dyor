<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Crypt</title>
    <link rel="stylesheet" href="{{asset('theme/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/gsap.css')}}">
    <link rel="icon" type="image/svg" href="images/favicon.svg')}}">
</head>
<body class="crypt-dark">
    <!-- Header/Hero -->
    <section class="container-fluid bg-image" style="background-image: url('{{asset('theme/images//slider/bg-4.svg')}}'); background-size: contain; background-repeat: no-repeat;">
        <!-- Header -->
        @include('front.header')
        <!-- Offcanvas Navbar -->

        <nav class="navbar py-0 navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar">
                    <!-- Header -->
                    <div class="offcanvas-header card-line">
                        <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">// Crypt</h5>
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
                                    Landing Page
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewbox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark g-2">
                                    <li><a class="dropdown-item" href="template-1.html">Template 1</a></li>
                                    <li><a class="dropdown-item" href="template-2.html">Template 2</a></li>
                                    <li><a class="dropdown-item" href="template-3.html">Template 3</a></li>
                                    <li><a class="dropdown-item" href="template-4.html">Template 4</a></li>
                                    <li><a class="dropdown-item" href="template-5.html">Template 5</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Exchange
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewbox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="dashboard-1.html">Dashboard 1</a></li>
                                    <li><a class="dropdown-item" href="dashboard-2.html">Dashboard 2</a></li>
                                    <li><a class="dropdown-item" href="dashboard-3.html">Dashboard 3</a></li>
                                    <li><a class="dropdown-item" href="dashboard-4.html">Dashboard 4</a></li>
                                    <li><a class="dropdown-item" href="dashboard-5.html">Dashboard 5</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Markets
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewbox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="market.html">All Market</a></li>
                                    <li><a class="dropdown-item" href="highlights.html">Crypto Highlights</a></li>
                                    <li><a class="dropdown-item" href="marketcap.html">Market Cap</a></li>
                                    <li><a class="dropdown-item" href="symbols.html">Symbols</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Blog
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewbox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="nav-link" href="blog.html">Blog Classic</a></li>
                                    <li><a class="nav-link" href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Dropdown (Assets) -->
                        <div class="dropdown-menu-dark card-bs gd-bg p-2 pb-2">
                            <div class="d-flex flex-column card-bs-tabs p-2 mb-3">
                                <div class="d-flex gap-1">
                                    <p class="text-sm fw-bold crypt-grayscale-600 mb-0">Total Assets</p>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <div class="flex">
                                        <h4 class="fw-bold mb-0 encrypted">4.55</h4>
                                    </div>
                                    <div class="flex">
                                        <select class="form-select text-bg-bs2 crypt-grayscale-600">
                                            <option selected="">BTC</option>
                                            <option value="1">ETH</option>
                                            <option value="2">BNB</option>
                                            <option value="3">USDT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex">
                                    <h6 class="text-sm crypt-grayscale-600 encrypted">≈ $99,738.50 USDT</h6>
                                </div>
                            </div>
                            <!-- Menu Item -->
                            <ul class="d-flex flex-column profile_menu gap-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="my-dashboard.html">
                                        <svg class="me-1" width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M18.6699 2H16.7699C14.5899 2 13.4399 3.15 13.4399 5.33V7.23C13.4399 9.41 14.5899 10.56 16.7699 10.56H18.6699C20.8499 10.56 21.9999 9.41 21.9999 7.23V5.33C21.9999 3.15 20.8499 2 18.6699 2Z" fill="currentColor"></path>
                                            <path opacity="0.4" d="M7.24 13.4301H5.34C3.15 13.4301 2 14.5801 2 16.7601V18.6601C2 20.8501 3.15 22.0001 5.33 22.0001H7.23C9.41 22.0001 10.56 20.8501 10.56 18.6701V16.7701C10.57 14.5801 9.42 13.4301 7.24 13.4301Z" fill="currentColor"></path>
                                            <path d="M6.29 10.58C8.6593 10.58 10.58 8.6593 10.58 6.29C10.58 3.9207 8.6593 2 6.29 2C3.9207 2 2 3.9207 2 6.29C2 8.6593 3.9207 10.58 6.29 10.58Z" fill="currentColor"></path>
                                            <path d="M17.7099 22C20.0792 22 21.9999 20.0793 21.9999 17.71C21.9999 15.3407 20.0792 13.42 17.7099 13.42C15.3406 13.42 13.4199 15.3407 13.4199 17.71C13.4199 20.0793 15.3406 22 17.7099 22Z" fill="currentColor"></path>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="marketplace.html">
                                        <svg class="me-1" width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.9597 17.84L19.3297 18.39C18.8797 18.54 18.5197 18.89 18.3697 19.35L17.8197 20.98C17.3497 22.39 15.3697 22.36 14.9297 20.95L13.0797 15C12.7197 13.82 13.8097 12.72 14.9797 13.09L20.9397 14.94C22.3397 15.38 22.3597 17.37 20.9597 17.84Z" fill="currentColor"></path>
                                            <path opacity="0.4" d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" fill="currentColor"></path>
                                        </svg>
                                        Marketplace
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="my-asset.html">
                                        <svg class="me-1" width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.0602 11.8201L20.9002 11.6001C20.6202 11.2601 20.2902 10.9901 19.9102 10.7901C19.4002 10.5001 18.8202 10.3501 18.2202 10.3501H5.7702C5.1702 10.3501 4.6002 10.5001 4.0802 10.7901C3.6902 11.0001 3.3402 11.2901 3.0502 11.6501C2.4802 12.3801 2.2102 13.2801 2.3002 14.1801L2.6702 18.8501C2.8002 20.2601 2.9702 22.0001 6.1402 22.0001H17.8602C21.0302 22.0001 21.1902 20.2601 21.3302 18.8401L21.7002 14.1901C21.7902 13.3501 21.5702 12.5101 21.0602 11.8201ZM14.3902 17.3401H9.6002C9.2102 17.3401 8.9002 17.0201 8.9002 16.6401C8.9002 16.2601 9.2102 15.9401 9.6002 15.9401H14.3902C14.7802 15.9401 15.0902 16.2601 15.0902 16.6401C15.0902 17.0301 14.7802 17.3401 14.3902 17.3401Z" fill="currentColor"></path>
                                            <path opacity="0.4" d="M3.37988 11.31C3.59988 11.11 3.81988 10.93 4.07988 10.79C4.58988 10.5 5.16988 10.35 5.76988 10.35H18.2299C18.8299 10.35 19.3999 10.5 19.9199 10.79C20.1799 10.93 20.4099 11.11 20.6199 11.32V10.79V9.82C20.6199 6.25 19.5299 5.16 15.9599 5.16H13.5799C13.1399 5.16 13.1299 5.15 12.8699 4.81L11.6699 3.2C11.0999 2.46 10.6499 2 9.21988 2H8.03988C4.46988 2 3.37988 3.09 3.37988 6.66V10.8V11.31Z" fill="currentColor"></path>
                                        </svg>
                                        My Asset
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="order-history.html">
                                        <svg class="me-1" width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M6.73049 19.7C7.55049 18.82 8.80049 18.89 9.52049 19.85L10.5305 21.2C11.3405 22.27 12.6505 22.27 13.4605 21.2L14.4705 19.85C15.1905 18.89 16.4405 18.82 17.2605 19.7C19.0405 21.6 20.4905 20.97 20.4905 18.31V7.04C20.5005 3.01 19.5605 2 15.7805 2H8.22049C4.44049 2 3.50049 3.01 3.50049 7.04V18.3C3.50049 20.97 4.96049 21.59 6.73049 19.7Z" fill="currentColor"></path>
                                            <path d="M16.2305 11.75H10.7305C10.3205 11.75 9.98047 11.41 9.98047 11C9.98047 10.59 10.3205 10.25 10.7305 10.25H16.2305C16.6405 10.25 16.9805 10.59 16.9805 11C16.9805 11.41 16.6405 11.75 16.2305 11.75Z" fill="currentColor"></path>
                                            <path d="M16.2305 7.75H10.7305C10.3205 7.75 9.98047 7.41 9.98047 7C9.98047 6.59 10.3205 6.25 10.7305 6.25H16.2305C16.6405 6.25 16.9805 6.59 16.9805 7C16.9805 7.41 16.6405 7.75 16.2305 7.75Z" fill="currentColor"></path>
                                            <path d="M7.78027 8C7.23027 8 6.78027 7.55 6.78027 7C6.78027 6.45 7.23027 6 7.78027 6C8.33027 6 8.78027 6.45 8.78027 7C8.78027 7.55 8.33027 8 7.78027 8Z" fill="currentColor"></path>
                                            <path d="M7.78027 12C7.23027 12 6.78027 11.55 6.78027 11C6.78027 10.45 7.23027 10 7.78027 10C8.33027 10 8.78027 10.45 8.78027 11C8.78027 11.55 8.33027 12 7.78027 12Z" fill="currentColor"></path>
                                        </svg>
                                        Order History
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="exchange.html">
                                        <svg class="me-1" width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 15.5C15 19.09 12.09 22 8.5 22C4.91 22 2 19.09 2 15.5C2 11.91 4.91 9 8.5 9C8.67 9 8.84999 9.01 9.01999 9.02C12.19 9.27 14.73 11.81 14.98 14.98C14.99 15.15 15 15.33 15 15.5Z" fill="currentColor"></path>
                                            <path opacity="0.4" d="M22 8.5C22 12.09 19.09 15 15.5 15C15.33 15 15.15 14.99 14.98 14.98C14.73 11.81 12.19 9.27 9.01999 9.02C9.00999 8.85 9 8.67 9 8.5C9 4.91 11.91 2 15.5 2C19.09 2 22 4.91 22 8.5Z" fill="currentColor"></path>
                                            <path d="M5.59 2H3C2.45 2 2 2.45 2 3V5.59C2 6.48 3.07999 6.93 3.70999 6.3L6.29999 3.71001C6.91999 3.08001 6.48 2 5.59 2Z" fill="currentColor"></path>
                                            <path d="M18.41 22H21C21.55 22 22 21.55 22 21V18.41C22 17.52 20.92 17.07 20.29 17.7L17.7 20.29C17.08 20.92 17.52 22 18.41 22Z" fill="currentColor"></path>
                                        </svg>
                                        Exchange
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Call to Action -->
                        <span class="d-grid">
                            <a class="btn btn-editor btn-primary" href="#!" data-bs-toggle="modal" data-bs-target="#buyCrypto">Add Funds</a>
                        </span>
                        <!-- Carousel Slider -->
                        <div id="RewardCarousel" class="carousel slide card-bs mt-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#RewardCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label=""></button>
                                <button type="button" data-bs-target="#RewardCarousel" data-bs-slide-to="1" aria-label=""></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="col-12 p-3 reward-bg2 pb-5">
                                        <h4 class="fw-medium text-white mb-1">Invite Friends for Rewards</h4>
                                        <p class="text-white mb-3">Invite friends and get 20% commissions.</p>
                                        <a class="btn btn-editor btn-info mt-2" href="#!" data-bs-toggle="modal" data-bs-target="#RewardCrypto">Invite friends</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-12 p-3 reward-bg3 pb-5">
                                        <h4 class="fw-medium text-white text-white mb-1">Crypt Affiliate Programs</h4>
                                        <p class="text-white mb-3">Apply and earn up to 60% commission!</p>
                                        <a class="btn btn-editor btn-success mt-2" href="#!" data-bs-toggle="modal" data-bs-target="#RewardCrypto">Apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <div class="container animation-element pt-5 mt-5 pb-5">
            <div class="row align-items-top mt-5 pt-5 pb-5">
                <div class="col-sm-12 col-md-12 col-lg-7 hero-text">
                    <h1>Find the <span class="text-span-2 text-dark">Next</span> <br> <span class="gd-text">Crypto Gem</span></h1>
                    <p class="crypt-grayscale-300 mt-4">Unleash Crypto Freedom: Limitless, Trustworthy, and Sign-Up Free</p>
                    <div class="d-sm-flex pt-5">
                        <a href="login.html" class="btn btn-primary btn-lg me-2 mb-3"><span>Start trading</span>
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 7L13.5 15.5L8.5 10.5L2 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M16 7H22V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <button class="btn btn-secondary btn-lg btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Connect wallet</button>
                    </div>
                    <div class="row mt-4 align-items-center">
                        <p class="crypt-grayscale-600">Excellent
                            <span class="crypt-grayscale-100 meta">4.7 out of 5</span>
                            <a href="https://www.trustpilot.com/" target="_blank">
                                <img class="ms-2 " src="{{asset('theme/images/partner/logo-11.svg')}}" style="width:100px;" alt="">
                            </a>
                        </p>
                    </div>
                    <div class="d-flex flex-row pt-4 mb-4">
                        <img class="coin-wrap" alt="" src="{{asset('theme/images/coin/btc.svg')}}">
                        <img class="coin-wrap" alt="" src="{{asset('theme/images/coin/eth.svg')}}">
                        <img class="coin-wrap" alt="" src="{{asset('theme/images/coin/tron.svg')}}">
                        <img class="coin-wrap" alt="" src="{{asset('theme/images/coin/xrp.svg')}}">
                        <img class="coin-wrap" alt="" src="{{asset('theme/images/coin/ada.svg')}}">
                        <img class="coin-wrap" alt="" src="{{asset('theme/images/coin/avax.svg')}}">
                        <img class="coin-wrap" alt="" src="{{asset('theme/images/coin/usdc.svg')}}">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <img class="ms-2" src="{{asset('theme/images/slider/swap.svg')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Featured -->
    <section class="container animation-element mt-5">
            <div class="card card-border flex-md-row">
                <div class="card-body d-flex gap-2">
                    <div class="icon">
                        <img alt="" width="64" src="{{asset('theme/images/icon/1.svg')}}">
                    </div>
                    <div class="iteam1">
                        <h4 class="card-title mb-2">Create an account</h4>
                        <p class="card-text mb-3">Pick one of 50 000+ supported currency pairs from the list</p>
                    </div>
                </div>
                <div class="card-body d-flex gap-2">
                    <div class="icon">
                        <img alt="" width="64" src="{{asset('theme/images/icon/2.svg')}}">
                    </div>
                    <div class="iteam2">
                        <h4 class="card-title mb-2">Enter swap details</h4>
                        <p class="card-text mb-3">Confirm details and send your assets to the generated address</p>
                    </div>
                </div>
                <div class="card-body d-flex gap-2">
                    <div class="icon">
                        <img alt="" width="64" src="{{asset('theme/images/icon/3.svg')}}">
                    </div>
                    <div class="iteam3">
                        <h4 class="card-title mb-2">Trade your crypto</h4>
                        <p class="card-text mb-3">Receive exchanged crypto with the best possible rate</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- See your crypto -->
    <section class="container animation-element mt-5">
        <!-- Benefits -->
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-7 p-5">
                <div class="text-left">
                    <h2>See your crypto and collectibles in one place</h2>
                    <p class="crypt-grayscale-400 mt-3">You can receive your payments in your digital wallet in crypto or
                        <br>in your bank account in fiat — it’s your choice.</p>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <img class="grayscale-item" alt="" style="width:26px;" src="{{asset('theme/images/icon/check-fill.svg')}}">
                    <h6 class="lh-lg">80% reward for LPs</h6>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <img class="grayscale-item" alt="" style="width:26px;" src="{{asset('theme/images/icon/check-fill.svg')}}">
                    <h6 class="lh-lg">Flexible trading & low slippage</h6>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <img class="grayscale-item" alt="" style="width:26px;" src="{{asset('theme/images/icon/check-fill.svg')}}">
                    <h6 class="lh-lg">Limit orders with 0% fee</h6>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-2">One account. Over <span class="badge text-bg-warning text-dark fs-6 fw-bold">300+</span> partners.</h5>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card gd-bg">
                            <h3 class="crypt-red-500">50+</h3>
                            <p class="card-text">Cryptocurrencies</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card gd-bg">
                            <h3 class="crypt-blue-500">$48.51B</h3>
                            <p class="card-text">Total volume</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card gd-bg">
                            <h3 class="crypt-cyan-500">923K+</h3>
                            <p class="card-text">User accounts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-5">
                <img alt="" style="width:100%;" src="{{asset('theme/images/slider/rewards.svg')}}">
            </div>
        </div>
        <!-- Trusted by industry leaders -->
        <div class="row mt-3 animation-element">
            <h5 class="gd-text text-center text-uppercase">Trusted by industry leaders</h5>
            <div class="partner grayscale-item crypt-scroll in-view">
                <div class="crypt-scrolling scroll-right">
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-3.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-2.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-4.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-9.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-10.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-5.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-3.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-2.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-4.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-9.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-10.svg')}}"></div>
                    <div><img alt="" style="width:200px;" src="{{asset('theme/images/partner/logo-5.svg')}}"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits -->
    <section class="container animation-element mt-5 pt-4">
        <div class="text-center">
            <h2>Benefits of <br>buying crypto with <span class="gd-text">Swaps</span></h2>
            <p class="card-text crypt-grayscale-500 mt-3">All your tokens, DeFi positions, NFT collections, and transaction <br>history across all major networks.
             </p>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card-lg-3 bg-1">
                    <h3 class="text-dark">Crypto Swap</h3>
                    <p class="card-text mt-2 text-dark">Seamless crypto exchanges across multiple blockchains without limits.</p>
                    <div class="mt-5">
                        <img alt="" style="width:100%;" src="{{asset('theme/images/features/f-1.png')}}">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card-lg-3 bg-2">
                    <h3 class="text-dark">Buy/Sell</h3>
                    <p class="card-text mt-2 text-dark">Trading alerts were never this powerful, flexible and easy to use.</p>
                    <div class="mt-5">
                        <img class="" alt="" style="width:100%;" src="{{asset('theme/images/features/f-23.png')}}">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card-lg-3 bg-3">
                    <h3 class="text-dark">Trading Crypto</h3>
                    <p class="card-text mt-2 text-dark">Test ready-made or self-written strategies in real-time based on historical data.</p>
                    <div class="mt-5 ">
                        <img alt="" style="width:100%;" src="{{asset('theme/images/features/f-20.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Powerful features -->
    <section class="container animation-element mt-5 pt-4">
        <h2 class="text-center">Powerful features</h2>
        <div class="row mt-5 pt-2">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img class="" alt="" style="width:80px;" src="{{asset('theme/images/icon/3.svg')}}">
                        <h4 class="card-title mt-4 mb-2">Fast Exchange</h4>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <img alt="" style="width:80px;" src="{{asset('theme/images/icon/instant.svg')}}">
                    <h4 class="card-title mt-4 mb-2">Competitive rates</h4>
                    <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.</p>
                  </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <img alt="" style="width:80px;" src="{{asset('theme/images/icon/exchange.svg')}}">
                    <h4 class="card-title mt-4 mb-2">Earn Interest</h4>
                    <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.</p>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trade Anytime -->
    <section class="container animation-element mt-2">
        <div class="row">
            <div class="col-md-8">
                <div class="card p-4 bg-5 animation-element">
                    <div class="card-body in-view">
                        <h2 class="gd-text mb-2">Trade Anytime, Anywhere</h2>
                        <h5 class="text-white text-opacity-75 mt-3">Easily embed the widget on your website or mobile app with just a few clicks.</h5>
                        <a class="btn btn-editor btn-info mt-3" href="exchange.html" role="button">Start Copy Trading</a>
                        <div class="pt-2">
                            <div class="attributes">
                                <!-- Content, Design, Speaking, Creative, Engineering  -->
                                <div class="attribute p-2">
                                    <img class="" alt="" style="width:44px;" src="{{asset('theme/images/coin/tron.svg')}}">
                                    TRON
                                </div>
                                <div class="attribute">
                                    <img class="" alt="" style="width:44px;" src="{{asset('theme/images/coin/bnb.svg')}}">
                                    Binance
                                </div>
                                <div class="attribute">
                                    <img class="" alt="" style="width:44px;" src="{{asset('theme/images/coin/sol.svg')}}">
                                    Solana
                                </div>
                                <div class="attribute">
                                    <img class="" alt="" style="width:44px;" src="{{asset('theme/images/coin/pepe.svg')}}">
                                    Pepe
                                </div>
                                <div class="attribute">
                                    <img class="" alt="" style="width:44px;" src="{{asset('theme/images/coin/link.svg')}}">
                                    Chainlink
                                </div>
                            </div>
                        </div>
                        <img class="" alt="" style="width:100%;" src="{{asset('theme/images/slider/bg-5.png')}}">
                        <div class="crypt-scroll">
                            <div class="crypt-scrolling">
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/avax.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/eth.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/link.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/sol.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/near.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/mnt.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/bnb.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/kas.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/apex.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/arb.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/wld.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/tron.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/sui.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/op.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/pepe.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/stx.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/btc.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/dot.svg')}}"></div>
                                <div><img alt="" style="width:60px;" src="{{asset('theme/images/coin/ada.svg')}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-border px-4 pb-0 gd-bg align-content-between animation-element h-100">
                    <h4 class="card-title mt-3 mb-2">Faster Trading, Better Assets</h4>
                    <p class="card-text pb-3">The purpose of lorem ipsum is to create a natural looking block of text sentence.</p>
                    <div class="crypt-scroll mt-2">
                        <div class="crypt-scrolling scroll-right">
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/metamask.svg')}}">Metamask</div>
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/coinbase.svg')}}">Coinbase</div>
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/phantom.svg')}}">Phantom</div>
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/rainbow.svg')}}">Rainbow</div>
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/ibw.svg')}}">Install Bitget Wallet</div>
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/walletconnect.svg')}}">WalletConnect</div>
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/passkeys.svg')}}">Passkeys</div>
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/trustwallet.svg')}}">Trustwallet</div>
                            <div class="card-mordern wallet-card"><img class="me-2" alt="" style="width:32px;" src="{{asset('theme/images/icon/bitkeep.svg')}}">BitKeep</div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <img class="bottom-0" src="{{asset('theme/images/features/app.png')}}" alt="" width="364">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How to get started -->
    <section class="container mt-0 mt-sm-5 pt-0 pt-sm-4">
        <div class="row align-items-center animation-element">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-7 p-5 in-view">
                <div class="text-left pb-4">
                    <h2>How to Get Started</h2>
                    <p class="crypt-grayscale-500 mt-3">You can receive your payments in your digital wallet in crypto or
                        <br>in your bank account in fiat — it’s your choice.
                    </p>
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button fs-4 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                1. Create an account
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Pick one of 50 000+ supported currency pairs from the list.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed fs-4 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                2. Enter swap details
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Confirm details and send your assets to the generated address.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed fs-4 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                3. Trade your crypto
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Receive exchanged crypto with the best possible rate.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-5 in-view">
                <img class="grayscale-item" style="width:100%;" src="{{asset('theme/images/slider/crypt02.png')}}" alt="">
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="container animation-element mt-4 mt-sm-5 pt-0 pt-sm-4">
        <div class="text-center">
            <h2>Stay Updated with Our Blog</h2>
        </div>
        <div class="row pt-5">
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
    </section>
    <!-- Newsletter -->
    <section class="container animation-element mt-4 mt-sm-5 pt-0 pt-sm-4 pb-5 nl-bg">
        <div class="row newsletter justify-content-center" id="contact">
            <div class="d-flex flex-column text-center mb-4">
                <h2 class="text-center text-uppercase mb-2" id="news">Join Our 💌 Newsletter!</h2>
                <p class="text-center m-auto fs-6 crypt-grayscale-500 mt-2">
                    Get updates, insights, and reports on the latest industry trends.
                </p>
            </div>
            <div class="newsletter-form newsletter text-center mt-4 z-0">
                <p class="crypt-grayscale-400" id="distance">Don't be shy. You are <span id="distance_text">0</span> pixels away from hitting that button!</p>
                <form>
                    <input type="email" maxlength="50" id="exampleFormControlInput1" required="" placeholder="Enter your email address">
                    <button id="element" class="btn btn-lg shiny-cta signup-btn">Subscribe</button>
                </form>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center text-center gap-1 mt-3 mb-4">
                <svg width="24" height="24" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" fill="#339af0" fill-opacity="0.23"></path>
                    <path d="M6.75 9L8.25 10.5L11.25 7.5" stroke="#339af0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <h6 class="crypt-grayscale-500 mb-0">You are subscribing to all our networks <a class="text-info text-link" href="#!">Select networks</a></h6>
            </div>
        </div>
    </section>

    <!-- Create Futures Grid -->
    <div class="modal fade" id="createFuturesGrid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Create Futures Grid</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Create Form -->
                    <div class="card-bs p-2 bg-5">
                        <div class="input-group mt-2">
                            <label class="form-label fw-bold crypt-grayscale-300">1. Price Range
                                <span class="badge text-warning bg-warning bg-gradient bg-opacity-25">Trailing</span>
                            </label>
                        </div>
                        <div class="d-flex flex-row gap-2 align-items-center">
                            <div class="input-group">
                                <input class="form-control text-sm" type="text" placeholder="Lower">
                            </div>
                            <div class="mt-3">
                                <p class="crypt-grayscale-600">-</p>
                            </div>
                            <div class="input-group">
                                <input class="form-control text-sm" type="text" placeholder="Upper">
                            </div>
                        </div>
                        <div class="input-group mt-2">
                            <label class="form-label fw-bold crypt-grayscale-300">2. Number of Grids</label>
                        </div>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control text-sm" placeholder="2-169">
                            <div class="input-group-append input-group-text p-1">
                                <select class="form-select text-sm crypt-grayscale-400">
                                    <option selected="">Arithmetic</option>
                                    <option value="1">Geometric</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label crypt-grayscale-600 mt-1">Profit/grid(fees deducted): --</label>
                        <div class="input-group mt-2">
                            <label class="form-label fw-bold crypt-grayscale-300">3. Investment</label>
                            <label class="form-label ms-auto crypt-grayscale-600">Avbl <span class="text-primary">0.00 USDT</span></label>
                        </div>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control text-sm" placeholder="USDT">
                            <div class="input-group-append input-group-text p-1">
                                <select class="form-select text-sm crypt-grayscale-400">
                                    <option selected="">5x</option>
                                    <option value="1">1x</option>
                                    <option value="1">2x</option>
                                    <option value="1">3x</option>
                                    <option value="1">4x</option>
                                    <option value="1">5x</option>
                                    <option value="1">6x</option>
                                    <option value="1">7x</option>
                                    <option value="1">8x</option>
                                    <option value="1">9x</option>
                                    <option value="1">10x</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 text-sm">
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Qty/Order</p>
                            <p class="crypt-grayscale-500">0 USDT</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Total Investment</p>
                            <p class="crypt-grayscale-500">0.00 USDT</p>
                        </div>
                    </div>
                    <div class="d-grid mt-5 mb-3">
                        <a class="btn btn-warning" href="#!" role="button">Create (Neutral)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Buy/Sell Modal -->
    <div class="modal fade" id="buyCrypto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Fast Trade</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Tab -->
                    <div class="tab-content table-responsive justify-content-between mb-4 p-0">
                        <div class="d-flex flex-row nav nav-pills nav-justified card-bs-tabs p-1">
                            <button class="nav-link active fs-6" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy-tab-pane" type="button" aria-controls="buy-tab-pane">Buy</button>
                            <button class="nav-link fs-6" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell-tab-pane" type="button" aria-controls="sell-tab-pane">Sell</button>
                        </div>
                        <!--Buy Tabs -->
                        <div class="tab-pane fade show active pt-4" id="buy-tab-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                            <div class="input-group mb-3 P-1">
                                <div class="input-group-prepend input-group-text">Spend ≈</div>
                                <input class="form-control placeholder-text" type="text" placeholder="Enter amount">
                                <div class="input-group-append input-group-text p-1">
                                    <select class="form-select text-sm crypt-grayscale-500">
                                        <option selected="">USD</option>
                                        <option value="1">AED</option>
                                        <option value="2">AMD</option>
                                        <option value="3">AUD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend input-group-text">Receive</div>
                                <input class="form-control placeholder-text" type="text" placeholder="0">
                                <div class="input-group-append input-group-text p-1">
                                    <select class="form-select text-sm crypt-grayscale-500">
                                        <option selected="">USDT</option>
                                        <option value="1">BTC</option>
                                        <option value="2">BNB</option>
                                        <option value="3">ETH</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2 text-sm card-border p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Subtotal:</p>
                                    <p class="crypt-grayscale-600">0.00 USDT</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Trade Fee: <span class="crypt-grayscale-500">(0.1%)</span></p>
                                    <p class="crypt-grayscale-600">0.00 USDT</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Gas Fee:</p>
                                    <p class="text-primary">Free</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500 mb-0">Total:</p>
                                    <p class="crypt-grayscale-600 mb-0">0.00 USDT</p>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 text-sm">
                                <div class="d-flex flex-row">
                                    <label class="form-label text-light">Payment Method</label>
                                </div>
                                <a class="btn btn-editor btn-outline-primary d-flex flex-row align-items-center justify-content-between card-border p-2" href="#!" data-bs-toggle="" data-bs-target="">
                                    <div class="d-flex flex-row align-items-center crypt-grayscale-300 gap-2">
                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 15C4.06 15 3.19 15.33 2.5 15.88C1.58 16.61 1 17.74 1 19C1 19.75 1.21 20.46 1.58 21.06C2.27 22.22 3.54 23 5 23C6.01 23 6.93001 22.63 7.63 22C7.94 21.74 8.21 21.42 8.42 21.06C8.79 20.46 9 19.75 9 19C9 16.79 7.21 15 5 15ZM7.07001 18.57L4.94 20.54C4.8 20.67 4.60999 20.74 4.42999 20.74C4.23999 20.74 4.04999 20.67 3.89999 20.52L2.91 19.53C2.62 19.24 2.62 18.76 2.91 18.47C3.2 18.18 3.68 18.18 3.97 18.47L4.45 18.95L6.05 17.47C6.35 17.19 6.83 17.21 7.11 17.51C7.39 17.81 7.37001 18.29 7.07001 18.57Z" fill="currentColor"></path>
                                            <path opacity="0.4" d="M19.48 12.95H21.5V11.51C21.5 9.44001 19.81 7.75 17.74 7.75H6.25999C4.18999 7.75 2.5 9.44001 2.5 11.51V15.88C3.19 15.33 4.06 15 5 15C7.21 15 9 16.79 9 19C9 19.75 8.79 20.46 8.42 21.06C8.21 21.42 7.94 21.74 7.63 22H17.74C19.81 22 21.5 20.31 21.5 18.24V17.05H19.6C18.52 17.05 17.53 16.26 17.44 15.18C17.38 14.55 17.62 13.96 18.04 13.55C18.41 13.17 18.92 12.95 19.48 12.95Z" fill="currentColor"></path>
                                            <path d="M14.85 3.95012V7.75011H6.25999C4.18999 7.75011 2.5 9.44012 2.5 11.5101V7.84014C2.5 6.65014 3.23 5.59009 4.34 5.17009L12.28 2.17009C13.52 1.71009 14.85 2.62012 14.85 3.95012Z" fill="currentColor"></path>
                                            <path d="M22.5598 13.9702V16.0302C22.5598 16.5802 22.1198 17.0302 21.5598 17.0502H19.5998C18.5198 17.0502 17.5298 16.2602 17.4398 15.1802C17.3798 14.5502 17.6198 13.9602 18.0398 13.5502C18.4098 13.1702 18.9198 12.9502 19.4798 12.9502H21.5598C22.1198 12.9702 22.5598 13.4202 22.5598 13.9702Z" fill="currentColor"></path>
                                            <path d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z" fill="currentColor"></path>
                                        </svg>
                                        Pay with new card
                                        <svg width="50" height="17" viewbox="0 0 50 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9289 16.0671L19.5488 0.834256H23.6709L19.0508 16.0671H14.9289ZM13.0862 0.838415L9.37817 7.29564C8.43424 8.98682 7.88249 9.84103 7.61717 10.9098H7.56072C7.62638 9.55491 7.43741 7.89165 7.41959 6.95158L7.01016 0.838415H0.0713081L0 1.24814C1.7827 1.24814 2.83984 2.14365 3.13071 3.97537L4.48319 16.0671H8.75364L17.3884 0.838415H13.0862ZM45.1423 16.0671L45.0285 13.8016L39.8813 13.7974L38.8286 16.0668H34.3535L42.468 0.863076H47.9611L49.3353 16.0668H45.1423V16.0671ZM44.6696 7.08172C44.6239 5.95594 44.5856 4.42787 44.6622 3.50325H44.6013C44.3505 4.25941 43.2729 6.53027 42.799 7.64713L41.2653 10.9861H44.8794L44.6696 7.08172ZM27.9984 16.5C25.0882 16.5 23.1569 15.5769 21.778 14.7538L23.7417 11.7551C24.9794 12.4473 25.9513 13.2463 28.1874 13.2463C28.9064 13.2463 29.5993 13.0594 29.9927 12.3781C30.5661 11.3872 29.8605 10.8542 28.2501 9.94265L27.455 9.42567C25.068 7.7945 24.0355 6.24533 25.1592 3.54098C25.8782 1.81117 27.7747 0.5 30.9034 0.5C33.061 0.5 35.0838 1.43324 36.2624 2.34509L34.0049 4.99269C32.8548 4.06242 31.9014 3.59179 30.8104 3.59179C29.9404 3.59179 29.2796 3.92723 29.0514 4.37974C28.6221 5.23039 29.1902 5.81036 30.4446 6.5891L31.39 7.19046C34.2881 9.01832 34.9786 10.935 34.2522 12.7269C33.0031 15.8113 30.5572 16.5 27.9984 16.5Z" fill="#1434CB"></path>
                                        </svg>
                                        <svg width="30" height="19" viewbox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.8324 16.5755H10.9585V2.42493H18.8325L18.8324 16.5755Z" fill="#FF5F00"></path>
                                            <path d="M11.4577 9.49945C11.4577 6.62901 12.8017 4.07201 14.8946 2.42417C13.3104 1.175 11.3509 0.497029 9.33348 0.50001C4.36375 0.50001 0.335205 4.52914 0.335205 9.49945C0.335205 14.4698 4.36375 18.4989 9.33348 18.4989C11.351 18.5019 13.3105 17.8239 14.8947 16.5747C12.802 14.9272 11.4577 12.37 11.4577 9.49945Z" fill="#EB001B"></path>
                                            <path d="M29.4553 9.50067C29.4553 14.471 25.4268 18.5001 20.457 18.5001C18.4393 18.5031 16.4796 17.8251 14.895 16.576C16.9885 14.9281 18.3325 12.3713 18.3325 9.50067C18.3325 6.63009 16.9885 4.07323 14.895 2.42539C16.4795 1.17625 18.4392 0.498302 20.4569 0.50123C25.4266 0.50123 29.4552 4.53036 29.4552 9.50067" fill="#F79E1B"></path>
                                        </svg>
                                    </div>
                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.75 13.5L11.25 9L6.75 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="d-flex flex-row justify-content-between text-sm">
                                <p class="crypt-grayscale-500">Reference Price</p>
                                <p class="crypt-grayscale-300">1 USDT ≈ 1.05 USD</p>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-up" href="login.html" role="button">Buy USDT</a>
                            </div>
                        </div>
                        <!--Sell Tabs -->
                        <div class="tab-pane fade pt-4" id="sell-tab-pane" role="tabpanel" aria-labelledby="sell-tab" tabindex="0">
                            <div class="d-flex flex-row align-items-center justify-content-between px-1">
                                <label class="form-label text-sm text-light">I Want to Sell</label>
                                <label class="form-label text-sm crypt-grayscale-600">Funding Balance:
                                    <span class="crypt-grayscale-300">0.00 USDT</span>
                                </label>
                            </div>
                            <div class="input-group d-flex p-1">
                                <input type="email" class="form-control text-sm" placeholder="Enter amount">
                                <div class="input-group-append input-group-text p-1">
                                    <select class="form-select text-sm crypt-grayscale-500">
                                        <option selected="">USDT</option>
                                        <option value="1">BTC</option>
                                        <option value="2">BNB</option>
                                        <option value="3">ETH</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-4">
                                <label class="form-label text-sm text-light px-1">I Will Receive</label>
                            </div>
                            <div class="input-group d-flex p-1">
                                <input type="email" class="form-control text-sm" placeholder="0">
                                <div class="input-group-append input-group-text p-1">
                                    <select class="form-select text-sm crypt-grayscale-500">
                                        <option selected="">USD</option>
                                        <option value="1">AMD</option>
                                        <option value="2">AFN</option>
                                        <option value="3">AUD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4 text-sm card-border p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Subtotal:</p>
                                    <p class="crypt-grayscale-600">0.00 USDT</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Gas Fee:</p>
                                    <p class="text-primary">Free</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500 mb-0">Total:</p>
                                    <p class="crypt-grayscale-600 mb-0">0.00 USDT</p>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 text-sm">
                                <div class="d-flex flex-row">
                                    <label class="form-label text-light">Receive Method</label>
                                </div>
                                <a class="btn btn-editor btn-secondary d-flex flex-row align-items-center justify-content-between card-border p-2" href="#!" data-bs-toggle="" data-bs-target="">
                                    <div class="crypt-grayscale-300">
                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 15C4.06 15 3.19 15.33 2.5 15.88C1.58 16.61 1 17.74 1 19C1 19.75 1.21 20.46 1.58 21.06C2.27 22.22 3.54 23 5 23C6.01 23 6.93001 22.63 7.63 22C7.94 21.74 8.21 21.42 8.42 21.06C8.79 20.46 9 19.75 9 19C9 16.79 7.21 15 5 15ZM7.07001 18.57L4.94 20.54C4.8 20.67 4.60999 20.74 4.42999 20.74C4.23999 20.74 4.04999 20.67 3.89999 20.52L2.91 19.53C2.62 19.24 2.62 18.76 2.91 18.47C3.2 18.18 3.68 18.18 3.97 18.47L4.45 18.95L6.05 17.47C6.35 17.19 6.83 17.21 7.11 17.51C7.39 17.81 7.37001 18.29 7.07001 18.57Z" fill="currentColor"></path>
                                            <path opacity="0.4" d="M19.48 12.95H21.5V11.51C21.5 9.44001 19.81 7.75 17.74 7.75H6.25999C4.18999 7.75 2.5 9.44001 2.5 11.51V15.88C3.19 15.33 4.06 15 5 15C7.21 15 9 16.79 9 19C9 19.75 8.79 20.46 8.42 21.06C8.21 21.42 7.94 21.74 7.63 22H17.74C19.81 22 21.5 20.31 21.5 18.24V17.05H19.6C18.52 17.05 17.53 16.26 17.44 15.18C17.38 14.55 17.62 13.96 18.04 13.55C18.41 13.17 18.92 12.95 19.48 12.95Z" fill="currentColor"></path>
                                            <path d="M14.85 3.95012V7.75011H6.25999C4.18999 7.75011 2.5 9.44012 2.5 11.5101V7.84014C2.5 6.65014 3.23 5.59009 4.34 5.17009L12.28 2.17009C13.52 1.71009 14.85 2.62012 14.85 3.95012Z" fill="currentColor"></path>
                                            <path d="M22.5598 13.9702V16.0302C22.5598 16.5802 22.1198 17.0302 21.5598 17.0502H19.5998C18.5198 17.0502 17.5298 16.2602 17.4398 15.1802C17.3798 14.5502 17.6198 13.9602 18.0398 13.5502C18.4098 13.1702 18.9198 12.9502 19.4798 12.9502H21.5598C22.1198 12.9702 22.5598 13.4202 22.5598 13.9702Z" fill="currentColor"></path>
                                            <path d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z" fill="currentColor"></path>
                                        </svg>
                                        Enter Amount and select payment
                                    </div>
                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.75 13.5L11.25 9L6.75 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-down" href="login.html" role="button">Sell USDT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                <p class="mt-2"><strong>Hollo John! </strong>You have logged in your account from Windows Chrome 130.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <p class="crypt-grayscale-600 text-sm mb-0">1 hours ago</p>
                <a class="text-dark fs-6 fw-bold text-link" href="#!">📢 Announcement</a>
                <p class="mt-2">Notice on New Trading Pairs and Trading Bots Services.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <p class="crypt-grayscale-600 text-sm mb-0">2 hours ago</p>
                <a class="text-dark fs-6 fw-bold text-link" href="#!">🔖 Coupon Expire Soon</a>
                <p class="mt-2"><strong>Hollo John!</strong> Your Margin Interest-Free Coupon will expire in 9 hour(s).</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <!-- Transfer Modal -->
    <div class="modal fade" id="transferCrypto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Transfer</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Transfer Form -->
                    <div class="d-flex flex-column">
                        <label class="form-label text-sm text-light">Internal transfers are free on Crypt.</label>
                        <div class="card-bs p-2 bg-5">
                            <div class="input-group">
                                <label class="input-group-text">From</label>
                                <select class="form-select text-sm crypt-grayscale-300">
                                    <option disabled="">Options</option>
                                    <option selected="">Fiat and Spot</option>
                                    <option value="1">Funding</option>
                                    <option value="2">Isolated Margin</option>
                                    <option value="3">COIN-M Futures</option>
                                </select>
                            </div>
                            <div class="input-group justify-content-between p-2">
                                <img alt="" style="width:20px;" src="{{asset('theme/images/icon/arrow-down.svg')}}">
                                <a href="#!">
                                  <img alt="" style="width:24px;" src="{{asset('theme/images/icon/switch.svg')}}">
                                </a>
                            </div>
                            <div class="input-group">
                                <label class="input-group-text">To</label>
                                <select class="form-select text-sm crypt-grayscale-300">
                                    <option disabled="">Options</option>
                                    <option selected="">Cross Margin</option>
                                    <option value="1">USDⓈ-M Futures</option>
                                    <option value="2">Fiat and Spot</option>
                                    <option value="3">COIN-M Futures</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label text-sm text-light mt-4">Coin</label>
                        <div class="input-group mb-3">
                            <select class="form-select crypt-grayscale-300">
                                <option selected="">1INCH</option>
                                <option value="1">USDT</option>
                                <option value="2">AAVE</option>
                                <option value="3">ACE</option>
                                <option value="4">ALGO</option>
                                <option value="5">APE</option>
                                <option value="6">CELO</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend input-group-text">Amount ≈</div>
                            <input class="form-control placeholder-text" type="text" placeholder="Enter the transfer amount">
                            <a href="#" class="input-group-append input-group-text text-warning">MAX</a>
                        </div>
                        <div class="mt-2 text-sm">
                            <div class="d-flex flex-row justify-content-between">
                                <p class="crypt-grayscale-500">Max Transferrable:</p>
                                <p class="crypt-grayscale-600">0.00000000 USDT</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="crypt-grayscale-500">Avaliable:</p>
                                <p class="crypt-grayscale-600">0.00000000 USDT</p>
                            </div>
                        </div>
                        <div class="d-grid mt-5 mb-3">
                          <a class="btn btn-warning" href="#!" role="button">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Convert Modal -->
    <div class="modal fade" id="convertCrypto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Convert</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Convert Form -->
                    <div class="input-group d-flex mb-1">
                        <label class="form-label text-sm text-light">Wallet.</label>
                        <div class="d-flex gap-3 align-items-center ms-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked="">
                                <label class="form-check-label text-light">
                                Spot
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label text-light">
                                Funding
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-bs p-2 bg-5">
                        <div class="input-group">
                            <label class="form-label crypt-grayscale-600">From</label>
                            <label class="form-label ms-auto crypt-grayscale-600">Balance : <span class="text-primary">0 ADA</span></label>
                        </div>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control text-sm" placeholder="0.00">
                            <div class="input-group-append input-group-text p-1">
                                <select class="form-select text-sm crypt-grayscale-500">
                                    <option selected="">ADA</option>
                                    <option value="1">BTC</option>
                                    <option value="2">BNB</option>
                                    <option value="3">ETH</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label crypt-grayscale-600 mt-1">≈ $0.0</label>
                    </div>
                    <div class="input-group justify-content-center p-3">
                        <img alt="" style="width:32px;" src="{{asset('theme/images/icon/switch.svg')}}">
                    </div>
                    <div class="card-bs p-2 bg-5">
                        <div class="input-group">
                            <label class="form-label crypt-grayscale-600">To</label>
                            <label class="form-label ms-auto crypt-grayscale-600">Balance : <span class="text-primary">0 USDT</span></label>
                        </div>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control text-sm" placeholder="0.01 - 310000">
                            <div class="input-group-append input-group-text p-1">
                                <select class="form-select text-sm crypt-grayscale-500">
                                    <option selected="">USDT</option>
                                    <option value="1">BTC</option>
                                    <option value="2">BNB</option>
                                    <option value="3">ETH</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label crypt-grayscale-600 mt-1">≈ $0.0</label>
                    </div>
                    <div class="mt-2 text-sm">
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Rate: </p>
                            <p class="crypt-grayscale-500">1 ADA ≈ 0.728877 USDT</p>
                        </div>
                    </div>
                    <div class="d-grid mt-5 mb-3">
                        <a class="btn btn-info" href="#!" role="button">Preview</a>
                    </div>
                </div>
          </div>
      </div>
    </div>
    <!-- Offcanvas Convert -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header card-line">
            <div class="d-flex flex-row gap-3">
                <div>
                    <img alt="" style="width:32px;" src="{{asset('theme/images/coin/btc.svg')}}">
                </div>
                <h5 class="crypt-grayscale-300">Bitcoin <span class="crypt-grayscale-600">BTC</span></h5>
            </div>
            <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex flex-column">
                <h3 class="fw-bold crypt-grayscale-300">0.000000</h3>
                <h6 class="crypt-grayscale-600">≈ $0.00</h6>
                <a class="btn btn-editor btn-info mb-2" href="#" data-bs-toggle="modal" data-bs-target="#convertCrypto">Convert</a>
                <h6 class="fw-bold crypt-grayscale-400 mt-4">Asset Distribution</h6>
                <div class="row g-2 mt-1">
                    <div class="col-6">
                        <div class="card-bs card-border p-3 d-sm-flex flex-row align-items-center">
                            <div class="row justify-content-between">
                                <div class="d-flex flex-row gap-2">
                                    <div>
                                        <img alt="" style="width:20px;" src="{{asset('theme/images/icon/spot.svg')}}">
                                    </div>
                                    <p class="crypt-grayscale-300">Spot</p>
                                </div>
                                <h6 class="fw-bold crypt-grayscale-100">BTC/USDT</h6>
                                <div class="d-flex flex-row gap-2">
                                    <p class="crypt-grayscale-400">89259.95</p>
                                    <p class="text-down">-2.30%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-bs card-border p-3 d-sm-flex flex-row align-items-center">
                            <div class="row justify-content-between">
                                <div class="d-flex flex-row gap-2">
                                    <div>
                                        <img alt="" style="width:20px;" src="{{asset('theme/images/icon/earn.svg')}}">
                                    </div>
                                    <p class="crypt-grayscale-300">Earn</p>
                                </div>
                                <h6 class="fw-bold crypt-grayscale-100">BTC</h6>
                                <div class="d-flex flex-row gap-2">
                                    <p class="crypt-grayscale-400">APR up to</p>
                                    <p class="text-up">211.39%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- History -->
                <div class="table-responsive mt-1">
                    <h6 class="fw-bold crypt-grayscale-300 mt-4">History</h6>
                    <table class="table table-dark crypt-tab">
                        <tbody>
                            <tr>
                                <td class="no-orders text-center">
                                    <img src="{{asset('theme/images/empty.svg')}}" alt="no-orders">
                                    <p class="crypt-grayscale-600 pb-4 ">Data of last 6 months</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Stake Modal -->
    <div class="modal fade" id="stakeCrypto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Stake ETH</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Stake Form -->
                    <div class="input-group justify-content-center mb-4">
                        <div class="d-flex flex-row align-items-center gap-2 circles gd-bg px-3 py-1">
                            <label class="form-label text-light mb-0">1 ETH ≈ 0.94773528 WBETH</label>
                            <img alt="" width="24" src="{{asset('theme/images/icon/stake-change.svg')}}">
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="form-label crypt-grayscale-600">Stake Amount</label>
                        <label class="form-label ms-auto crypt-grayscale-600">Balance : <span class="text-primary">0 ETH</span></label>
                    </div>
                    <div class="input-group d-flex">
                        <input type="email" class="form-control text-sm" placeholder="Min 0.0001">
                        <div class="input-group-append input-group-text p-1">
                            <select class="form-select text-sm crypt-grayscale-500">
                                <option selected="">ETH</option>
                                <option value="1">BTC</option>
                                <option value="2">BNB</option>
                                <option value="3">USDT</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group justify-content-center p-3">
                        <img alt="" style="width:32px;" src="{{asset('theme/images/icon/stake-down.svg')}}">
                    </div>
                    <div class="card-bs p-2 bg-5">
                        <div class="input-group">
                            <label class="form-label crypt-grayscale-600">Receive</label>
                        </div>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="--" disabled="" readonly="">
                            <span class="input-group-text fw-bold text-info">WBETH</span>
                        </div>
                    </div>
                    <div class="alert alert-warning d-flex mt-3 mb-4 p-2" role="alert">
                        <svg class="flex-shrink-0 me-2" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                            <path d="M12 13.75C12.41 13.75 12.75 13.41 12.75 13V8C12.75 7.59 12.41 7.25 12 7.25C11.59 7.25 11.25 7.59 11.25 8V13C11.25 13.41 11.59 13.75 12 13.75Z" fill="currentColor"></path>
                            <path d="M12.92 15.6199C12.87 15.4999 12.8 15.3899 12.71 15.2899C12.61 15.1999 12.5 15.1299 12.38 15.0799C12.14 14.9799 11.86 14.9799 11.62 15.0799C11.5 15.1299 11.39 15.1999 11.29 15.2899C11.2 15.3899 11.13 15.4999 11.08 15.6199C11.03 15.7399 11 15.8699 11 15.9999C11 16.1299 11.03 16.2599 11.08 16.3799C11.13 16.5099 11.2 16.6099 11.29 16.7099C11.39 16.7999 11.5 16.8699 11.62 16.9199C11.74 16.9699 11.87 16.9999 12 16.9999C12.13 16.9999 12.26 16.9699 12.38 16.9199C12.5 16.8699 12.61 16.7999 12.71 16.7099C12.8 16.6099 12.87 16.5099 12.92 16.3799C12.97 16.2599 13 16.1299 13 15.9999C13 15.8699 12.97 15.7399 12.92 15.6199Z" fill="currentColor"></path>
                        </svg>
                        <p class="mb-0">
                            WBETH’s value increases over time as staking rewards accrue after launch. You will get back your initial ETH and earned rewards.
                        </p>
                    </div>
                    <div class="mt-2 text-sm card-border p-2">
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Conversion Ratio</p>
                            <p class="crypt-grayscale-500">1 ETH ≈ 0.94773528 WBETH</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Reference APR</p>
                            <p class="crypt-grayscale-500">2.82%</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Monthly Est. Reward</p>
                            <p class="text-up">0 ETH</p>
                        </div>
                    </div>
                    <div class="d-grid mt-5 mb-3">
                        <a class="btn btn-warning" href="" role="button">Stake</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal (Connect Wallet) -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <div>
                        <h5 class="crypt-grayscale-100 fw-bold mb-0">Connect a wallet</h5>
                        <p class="crypt-grayscale-500 mb-0">Choose your favourite wallet to log in.</p>
                    </div>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <small class="crypt-grayscale-500">Popular wallet</small>
                    <div class="flex mt-2">
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            Metamask
                            <img src="{{asset('theme/images/icon/metamask.svg')}}" alt="" width="32">
                        </a>
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            WalletConnect
                            <img src="{{asset('theme/images/icon/walletconnect.svg')}}" alt="" width="32">
                        </a>
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            Phantom
                            <img src="{{asset('theme/images/icon/phantom.svg')}}" alt="" width="32">
                        </a>
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            Coinbase Wallet
                            <img src="{{asset('theme/images/icon/coinbase.svg')}}" alt="" width="32">
                        </a>
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            Rainbow
                            <img src="{{asset('theme/images/icon/rainbow.svg')}}" alt="" width="32">
                        </a>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <a class="text-link fs-6 crypt-grayscale-500 fw-medium " href="login.html">
                            <svg width="25" height="25" viewbox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5 10.5V14.5H17.5C16.9696 14.5 16.4609 14.2893 16.0858 13.9142C15.7107 13.5391 15.5 13.0304 15.5 12.5C15.5 11.9696 15.7107 11.4609 16.0858 11.0858C16.4609 10.7107 16.9696 10.5 17.5 10.5H21.5ZM18 12.69C18.0149 12.6275 18.0149 12.5625 18 12.5C18.0008 12.4344 17.9879 12.3694 17.962 12.3091C17.9362 12.2489 17.898 12.1946 17.85 12.15C17.7565 12.0584 17.6309 12.0071 17.5 12.0071C17.3691 12.0071 17.2435 12.0584 17.15 12.15C17.102 12.1946 17.0638 12.2489 17.038 12.3091C17.0121 12.3694 16.9992 12.4344 17 12.5C16.9979 12.5658 17.0102 12.6312 17.0362 12.6916C17.0621 12.7521 17.1009 12.8062 17.15 12.85C17.1949 12.8978 17.2491 12.936 17.3093 12.962C17.3695 12.9881 17.4344 13.0015 17.5 13.0015C17.5656 13.0015 17.6305 12.9881 17.6907 12.962C17.7509 12.936 17.8051 12.8978 17.85 12.85C17.9154 12.8136 17.9679 12.7576 18 12.69Z" fill="#facc15"></path>
                                <path d="M18 12.5C18.0149 12.5625 18.0149 12.6275 18 12.69C17.9787 12.7524 17.9407 12.8078 17.89 12.85C17.8451 12.8978 17.7909 12.936 17.7307 12.962C17.6705 12.9881 17.6056 13.0015 17.54 13.0015C17.4744 13.0015 17.4095 12.9881 17.3493 12.962C17.2891 12.936 17.2349 12.8978 17.19 12.85C17.1336 12.8102 17.0872 12.7579 17.0542 12.6972C17.0213 12.6365 17.0027 12.569 17 12.5C16.9992 12.4344 17.0122 12.3694 17.038 12.3091C17.0638 12.2489 17.102 12.1947 17.15 12.15C17.2435 12.0584 17.3692 12.0071 17.5 12.0071C17.6309 12.0071 17.7566 12.0584 17.85 12.15C17.8981 12.1947 17.9362 12.2489 17.9621 12.3091C17.9879 12.3694 18.0008 12.4344 18 12.5Z" fill="currentColor"></path>
                                <path d="M18.5 20H5.5C4.83696 20 4.20107 19.7366 3.73223 19.2678C3.26339 18.7989 3 18.163 3 17.5V7.5C3 6.83696 3.26339 6.20107 3.73223 5.73223C4.20107 5.26339 4.83696 5 5.5 5H18.5C19.163 5 19.7989 5.26339 20.2678 5.73223C20.7366 6.20107 21 6.83696 21 7.5V10.5C21 10.6326 20.9473 10.7598 20.8536 10.8536C20.7598 10.9473 20.6326 11 20.5 11C20.3674 11 20.2402 10.9473 20.1464 10.8536C20.0527 10.7598 20 10.6326 20 10.5V7.5C20 7.10218 19.842 6.72064 19.5607 6.43934C19.2794 6.15804 18.8978 6 18.5 6H5.5C5.10218 6 4.72064 6.15804 4.43934 6.43934C4.15804 6.72064 4 7.10218 4 7.5V17.5C4 17.8978 4.15804 18.2794 4.43934 18.5607C4.72064 18.842 5.10218 19 5.5 19H18.5C18.8978 19 19.2794 18.842 19.5607 18.5607C19.842 18.2794 20 17.8978 20 17.5V14.5C20 14.3674 20.0527 14.2402 20.1464 14.1464C20.2402 14.0527 20.3674 14 20.5 14C20.6326 14 20.7598 14.0527 20.8536 14.1464C20.9473 14.2402 21 14.3674 21 14.5V17.5C21 18.163 20.7366 18.7989 20.2678 19.2678C19.7989 19.7366 19.163 20 18.5 20Z" fill="currentColor"></path>
                                <path d="M21.5 15.0001H17.5C16.837 15.0001 16.2011 14.7367 15.7323 14.2679C15.2634 13.799 15 13.1632 15 12.5001C14.9985 12.1706 15.0633 11.8441 15.1904 11.54C15.3175 11.2359 15.5044 10.9605 15.74 10.7301C15.9691 10.4961 16.243 10.3109 16.5455 10.1854C16.8479 10.06 17.1726 9.99694 17.5 10.0001H21.5C21.6326 10.0001 21.7598 10.0528 21.8536 10.1466C21.9473 10.2403 22 10.3675 22 10.5001V14.5001C22 14.6327 21.9473 14.7599 21.8536 14.8537C21.7598 14.9474 21.6326 15.0001 21.5 15.0001ZM17.5 11.0001C17.1038 11.0053 16.7253 11.165 16.4451 11.4452C16.1649 11.7254 16.0052 12.1039 16 12.5001C16 12.8979 16.1581 13.2795 16.4394 13.5608C16.7207 13.8421 17.1022 14.0001 17.5 14.0001H21V11.0001H17.5Z" fill="currentColor"></path>
                            </svg>
                            I don't have a wallet
                        </a>
                    </div>
                </div>
                <div class="modal-footer d-flex flex-column justify-content-center">
                    <p class="text-sm crypt-grayscale-400">By connecting your wallet you agree to the</p>
                    <a href="#" class="text-sm">Terms of Service</a>
                </div>
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
                            <a href="template-1.html">
                                <img src="{{asset('theme/images/logo-dark.svg')}}" alt="">
                            </a>
                        </div>
                        <div class="crypt-logo light">
                            <a href="template-1.html">
                                <img src="{{asset('theme/images/logo.svg')}}" alt="">
                            </a>
                        </div>
                        <p class="card-text mt-2">Cryptocurrency Will Make You Feel Better.<br>- It's Like Heaven!</p>
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

    <script src="{{asset('theme/npm/gsap%403.12.5/dist/gsap.min.js')}}"></script>
    <script src="{{asset('theme/npm/gsap%403.12.5/dist/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('theme/js/gsap.js')}}"></script>
    <script src="{{asset('theme/ajax/libs/jquery/3.7.1/jquery.min.js')}}"></script>
    <script src="{{asset('theme/ajax/libs/popper.js/2.11.8/umd/popper.min.js')}}"></script>
    <script src="{{asset('theme/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>

</body>
</html>
