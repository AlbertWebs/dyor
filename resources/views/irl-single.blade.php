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


    @foreach ($Single as $single)

      <!-- Main Content -->
      <section class="container-fluid animation-element hero-wrapper pt-5">
        <div class="container">
            <div class="row mt-5 pt-2">
                <!-- Breadcrumb -->
                <ul class="bs-breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" class="title-link">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/')}}/irl-meetups" class="title-link">IRL Meetups</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$single->title}}</li>
                </ul>
                <!-- Blog Details -->
                <div class="col-12 col-lg-9 col-xl-8 col-xxl-8" style="margin:0 auto">
                    <div class="card-bs p-4 mb-3 crypt-light">
                        <p class="post-meta pb-1">
                            <a href="#"> <img src="{{$single->image_one}}" alt="nbc" class="author"> <span class="author-name title-link">D.Y.O.R</span></a>
                        </p>
                        <h3 class="fw-bold">{{$single->title}}</h3>
                        <div class="bs-thumb mt-4" style="background-image: url('{{$single->image_one}}');"></div>

                        <div class="bs-article">
                            <h5 class="mt-2">{!!html_entity_decode($single->meta)!!}</h5>
                            <hr>
                            <p class="mt-4">
                                {!!html_entity_decode($single->content)!!}
                            </p>

                            <div class="d-flex flex-row gap-1 mt-4">
                             {{--  --}}
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <?php $Images = DB::table('images')->where('meetup_id',$single->id)->get(); ?>
                    <div class="row mt-4">
                        {{-- Iterate this --}}
                        @foreach ($Images as $images)
                        <div class="col-12 col-md-4 mb-4">
                            <a target="new" href="{{$images->path}}" class="blog-card">
                                <div class="thumb" style="background-image: url('{{$images->path}}');"></div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                    {{--  --}}
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
