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
    @foreach ($Single as $single)
    <!-- Primary Meta Tags -->
    <title>{{$single->title}} -  Do Your Own Research Podcasts Podcasts</title>
    <meta name="description" content="Discover the latest top-notch stories from the worldwide community, quality informative podcasts, and verified creators.">
    <meta name="keywords" content="{{$single->title}} <?php $Cat = DB::table('categories')->get(); ?> @foreach ($Cat as $cat)
    {{$cat->title}}
    @endforeach">
    <meta name="author" content="{{$single->title}} -  Do Your Own Research Podcasts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{url('/')}}/research/{{$single->slung}}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$single->title}} -  Do Your Own Research Podcasts">
    <meta property="og:description" content="Discover the latest top-notch stories from the worldwide community, quality informative podcasts, and verified creators.">
    <meta property="og:url" content="{{url('/')}}/research/{{$single->slung}}">
    <meta property="og:site_name" content="{{$single->title}} -  Do Your Own Research Podcasts">
    <meta property="og:image" content="{{url('/')}}/og-image.jpg"> <!-- Replace with your image URL -->

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{$single->title}} -  Do Your Own Research Podcasts">
    <meta name="twitter:description" content="Discover the latest top-notch stories from the worldwide community, quality informative podcasts, and verified creators.">
    <meta name="twitter:url" content="{{url('/')}}/research/{{$single->slung}}">
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
    "name": "{{$single->title}} -  Do Your Own Research Podcasts",
    "url": "{{url('/')}}/research/{{$single->slung}}",
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
    @endforeach
    {{--  --}}
</head>
<body class="crypt-dark">

    <!-- Hero/Header -->
    <section class="container-fluid">
        <!-- Header -->
        @include('front.headers-page')

    </section>
    <!-- Features -->


    @foreach ($Single as $single)
        <?php
            $Category = \App\Models\Category::find($single->category)
        ?>
      <!-- Main Content -->
      <section class="container-fluid animation-element hero-wrapper pt-5">
        <div class="container">
            <div class="row mt-5 pt-2">
                <!-- Breadcrumb -->
                <ul class="bs-breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" class="title-link">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/')}}/researches/{{$Category->slung}}" class="title-link">{{$Category->title}}</a></li>
                    <li class="breadcrumb-item"><a href="#" class="title-link">{{$single->type}}</a></li>

                    <li class="breadcrumb-item active" aria-current="page">{{$single->title}}</li>
                </ul>
                <!-- Blog Details -->
                <div class="col-12 col-lg-9 col-xl-8 col-xxl-8">
                    <div class="card-bs p-4 mb-3 crypt-light">
                        <p class="post-meta pb-1">
                            <a href="#"> <img src="{{$single->image_one}}" alt="nbc" class="author"> <span class="author-name title-link">D.Y.O.R</span></a>
                            <a href="#" class="badge text-bg-light ms-2">TradingView</a>
                        </p>
                        <h3 class="fw-bold">{{$single->title}}</h3>
                        @if($single->type == "Videos")
                            <iframe class="yt-frames" id="player" type="text/html"
                                src="https://www.youtube.com/embed/{{$single->whitepaper_link}}"
                                frameborder="0">
                            </iframe>
                        @else
                           <div class="bs-thumb mt-4" style="background-image: url('{{$single->image_one}}');"></div>
                        @endif
                        <div class="bs-article">
                            <p class="mt-4 crypt-grayscale-500">In this article:</p>
                            <div class="d-sm-flex flex-row gap-2 mt-3">
                                {{-- <a href="#" class="bs-badgedata badge-dark mb-3">MSFT <span class="text-danger">-3.27%</span></a> --}}
                                <a href="#" class="bs-badgedata badge-dark ml-md-2 mb-3">{{$single->type}} </a>
                                <a href="#" class="bs-badgedata badge-dark ml-md-2 mb-3">{{$Category->title}} </a>
                                {{-- <a href="#" class="bs-badgedata badge-dark ml-md-2 mb-3">AMZN <span class="text-danger">-1.85%</span></a> --}}
                            </div>
                            <h5 class="mt-2">{!!html_entity_decode($single->meta)!!}</h5>
                            <hr>
                            <p class="mt-4">
                                {!!html_entity_decode($single->content)!!}
                            </p>

                            <div class="d-flex flex-row gap-1 mt-4">
                                <a href="#" class="badge text-bg-light">{{$single->type}}</a>
                                <a href="#" class="badge text-bg-light">{{$Category->title}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Stories -->
                <div class="col-12 col-lg-3 col-xl-4 col-xxl-4">
                    <div class="row p-3 card-bs bg-gradient">
                        <h4>Related Reads</h4>
                        <?php
                            $Related = DB::table('blogs')->where('category', $single->category)->get();
                        ?>
                        @foreach ($Related as $related)
                            @if($related->id == $single->id)

                            @else
                            <div class="d-flex flex-row blog-card-divider align-items-center gap-4 mt-4">
                                <div class="blog-card-content">
                                    <div class="d-flex flex-row gap-2 align-items-center">
                                        <div class="tag">
                                            <span class="badge text-bg-light">{{$related->type}}</span>
                                        </div>
                                    </div>
                                    <a href="{{url('/')}}/research/{{$related->slung}}"><h5 class="title-link">{{$related->title}}</h5></a>
                                    <p>
                                        {!!html_entity_decode($single->meta)!!}
                                    </p>
                                    <div class="meta">
                                        <p>
                                            {{date('D M d Y', strtotime($related->updated_at))}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
      </section>
    @endforeach


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
