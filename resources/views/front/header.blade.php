



 <!-- Header -->
 <header class="header-boxed border-bottom-0  mt-2">
    <div class="d-flex flex-row justify-content-between align-items-center">
          <!-- Logo -->
          <div class="crypt-logo dark">
                <a class="crypt-link" href="{{url('/')}}">
                    <h3>D.Y.O.R</h3>
                </a>
            </div>
            <div class="{{url('/')}}">
                <a class="crypt-link" href="#">
                    <h3>D.Y.O.R</h3>
                </a>
            </div>
        <!-- Menu item -->
        <div class="transparent-menu-bg flex hidesmscreen in-view">
            <div class="d-flex align-items-center gap-4">
                <ul class="d-flex gap-4 align-items-center px-0 p-1 m-0">
                    <!-- Dropdown (Landing Page) -->
                    <li class="dropdown nav-item profile_menu">
                        <a class="nav-link crypto-has-dropdown fw-medium" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Podcasts

                        </a>
                        <ul class="profile_menu dropdown-menu dropdown-menu-shows">
                            <li>
                                <a class="dropdown-item" href="#">
                                    @include('front.icon')
                                    Sample 1
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Sample 2</a></li>
                            <li><a class="dropdown-item" href="#">Sample 3</a></li>
                            <li><a class="dropdown-item" href="#">Sample 4</a></li>
                            <li><a class="dropdown-item" href="#">Sample 5</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown (Exchange) -->
                    <li class="nav-item dropdown profile_menu">
                        <a class="nav-link crypto-has-dropdown fw-medium" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            News & Analysis

                        </a>
                        <ul class="profile_menu dropdown-menu dropdown-menu-shows">
                            <li>
                                <a class="dropdown-item" href="#">
                                    @include('front.icon')
                                    &nbsp; &nbsp; Sample 1
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Sample 2</a></li>
                            <li><a class="dropdown-item" href="#">Sample 3</a></li>
                            <li><a class="dropdown-item" href="#">Sample 4</a></li>
                            <li><a class="dropdown-item" href="#">Sample 5</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown (Markets) -->
                    <li class="nav-item dropdown profile_menu">
                        <a class="nav-link crypto-has-dropdown fw-medium" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Newsletter

                        </a>
                        <ul class="profile_menu dropdown-menu dropdown-menu-shows">
                            <li>
                                <a class="dropdown-item" href="#">
                                    @include('front.icon')
                                    Sample 1
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Sample 2</a></li>
                            <li><a class="dropdown-item" href="#">Sample 3</a></li>
                            <li><a class="dropdown-item" href="#">Sample 4</a></li>
                            <li><a class="dropdown-item" href="#">Sample 5</a></li>
                        </ul>
                    </li>
                    <!-- Dropdown (Blog) -->
                    <li class="nav-item dropdown profile_menu">
                        <a class="nav-link crypto-has-dropdown fw-medium" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Airdrops and Tools

                        </a>
                        <ul class="profile_menu dropdown-menu dropdown-menu-shows">
                            <li>
                                <a class="dropdown-item" href="#">
                                    @include('front.icon')
                                    Sample 1
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Sample 2</a></li>
                            <li><a class="dropdown-item" href="#">Sample 3</a></li>
                            <li><a class="dropdown-item" href="#">Sample 4</a></li>
                            <li><a class="dropdown-item" href="#">Sample 5</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown (Blog) -->
                    <li class="nav-item dropdown profile_menu">
                        <a class="nav-link crypto-has-dropdown fw-medium" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            AI Agent

                        </a>
                        <ul class="profile_menu dropdown-menu dropdown-menu-shows">
                            <li>
                                <a class="dropdown-item" href="#">
                                    @include('front.icon')
                                    Sample 1
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Sample 2</a></li>
                            <li><a class="dropdown-item" href="#">Sample 3</a></li>
                            <li><a class="dropdown-item" href="#">Sample 4</a></li>
                            <li><a class="dropdown-item" href="#">Sample 5</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- Navigation menu / Button -->
        <div class="col-auto d-flex flex-row align-items-center">
            <div class="user-settings gap-2 gap-sm-3">

                <div class="flex">
                    <a class="btn btn-editor btn-primary" href="#!">Subscribe</a>
                </div>

                <div class="flex hide-mobile">
                    <a class="btn btn-lg shiny-cta signup-btn" href="#!"><img src="{{asset('theme/images/icon/checkmark.svg')}}" alt="" width="24"> Join DYOR</a>
                </div>

                <!-- Notification -->
                <div class="flex">
                    <a href="#!" class="notify" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNotify">
                        <div class="notification"></div>
                        <svg viewbox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.707 8.796c0 1.256.332 1.997 1.063 2.85.553.628.73 1.435.73 2.31 0 .874-.287 1.704-.863 2.378a4.537 4.537 0 01-2.9 1.413c-1.571.134-3.143.247-4.736.247-1.595 0-3.166-.068-4.737-.247a4.532 4.532 0 01-2.9-1.413 3.616 3.616 0 01-.864-2.378c0-.875.178-1.682.73-2.31.754-.854 1.064-1.594 1.064-2.85V8.37c0-1.682.42-2.781 1.283-3.858C7.861 2.942 9.919 2 11.956 2h.09c2.08 0 4.204.987 5.466 2.625.82 1.054 1.195 2.108 1.195 3.745v.426zM9.074 20.061c0-.504.462-.734.89-.833.5-.106 3.545-.106 4.045 0 .428.099.89.33.89.833-.025.48-.306.904-.695 1.174a3.635 3.635 0 01-1.713.731 3.795 3.795 0 01-1.008 0 3.618 3.618 0 01-1.714-.732c-.39-.269-.67-.694-.695-1.173z"></path>
                        </svg>
                    </a>
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
</header>
