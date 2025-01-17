<!-- Products & Services -->
   <section class="container mt-5">
        <div class="row mt-5 pt-2 animation-element">
            <div class="text-center in-view">
                <h2>Explore Crypto <span class="gd-text">Great Reads</span></h2>
            </div>
        </div>
        <div class="row mt-5 pt-2">

            <?php
               $Pods = DB::table('blogs')->where('type','Videos')->limit(5)->get();
            ?>
            {{--  --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4">
                <h3 class="sec-heading">Videos</h1>
                @foreach ($Pods as $pods)
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 sec-img">
                            <img alt="{{$pods->title}}" src="{{$pods->image_one}}">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 sec-title-parent">
                                <a href="{{url('/')}}/research/{{$pods->slung}}" class="sec-title">{{$pods->title}}</a>
                                <p class="crypt-grayscale-600 sec-meta"><?php  echo estimateReadingTime($single->content);  ?> . <?php echo timeAgo($pods->created_at) ?></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{--  --}}

        <?php
            $Pods = DB::table('blogs')->where('type','HowTos')->limit(5)->get();
         ?>
         {{--  --}}
         <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4">
             <h3 class="sec-heading">How-Tos</h1>
             @foreach ($Pods as $pods)
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                 <div class="row">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-7 sec-img">
                         <img alt="{{$pods->title}}" src="{{$pods->image_one}}">
                     </div>
                     <div class="col-12 col-sm-12 col-md-12 col-lg-5 sec-title-parent">
                             <a href="{{url('/')}}/research/{{$pods->slung}}" class="sec-title">{{$pods->title}}</a>
                             <p class="crypt-grayscale-600 sec-meta"><?php  echo estimateReadingTime($single->content);  ?> . <?php echo timeAgo($pods->created_at) ?></span>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
         {{--  --}}

         <?php
            $Pods = DB::table('blogs')->where('type','Guides')->limit(5)->get();
         ?>
         {{--  --}}
         <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4">
             <h3 class="sec-heading">Guides</h1>
             @foreach ($Pods as $pods)
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                 <div class="row">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-7 sec-img">
                         <img alt="{{$pods->title}}" src="{{$pods->image_one}}">
                     </div>
                     <div class="col-12 col-sm-12 col-md-12 col-lg-5 sec-title-parent">
                             <a href="{{url('/')}}/research/{{$pods->slung}}" class="sec-title">{{$pods->title}}</a>
                             <p class="crypt-grayscale-600 sec-meta"><?php  echo estimateReadingTime($single->content);  ?> . <?php echo timeAgo($pods->created_at) ?></span>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
         {{--  --}}

         <?php
         $Pods = DB::table('blogs')->where('type','DeFi')->limit(5)->get();
      ?>
      {{--  --}}
      <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4">
          <h3 class="sec-heading">DeFi</h1>
          @foreach ($Pods as $pods)
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-7 sec-img">
                      <img alt="{{$pods->title}}" src="{{$pods->image_one}}">
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-5 sec-title-parent">
                          <a href="{{url('/')}}/research/{{$pods->slung}}" class="sec-title">{{$pods->title}}</a>
                          <p class="crypt-grayscale-600 sec-meta"><?php  echo estimateReadingTime($single->content);  ?> . <?php echo timeAgo($pods->created_at) ?></span>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
      {{--  --}}


        </div>
    </section>
