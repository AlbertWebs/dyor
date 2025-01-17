 <!-- Header -->
 <header class="fixed-top">
    <div class="container-fluid mt-3">
        <!-- Body -->
        <div class="header-boxed md-escape">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <!-- Logo -->
                {{-- <div class="crypt-logo dark">
                    <a class="crypt-link" href="{{url('/')}}">
                        <h3>D.Y.O.R</h3>
                    </a>
                </div> --}}
                <div class="{{url('/')}}">
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

