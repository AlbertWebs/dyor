 <!-- Offcanvas Navbar -->
        <nav class="navbar py-0 navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar">
                    <!-- Header -->
                    <div class="offcanvas-header card-line">
                        <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">D.Y.O.R</h5>
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
                            <?php
                                $Categories = DB::table('categories')->get();
                            ?>

                            @foreach ($Categories as $categores)
                            <!-- Dropdown (Landing Page) -->
                            <li class="dropdown nav-item">
                                <a class="nav-link fw-medium" href="{{url('/')}}/researches/{{$categores->slung}}">
                                    {{$categores->title}}
                                </a>
                            </li>
                            @endforeach

                            <!-- Dropdown (Blog) -->
                            <li class="dropdown nav-item">
                                <a class="nav-link fw-medium" href="{{url('/')}}/irl-meetups">
                                    IRL Meetups
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
