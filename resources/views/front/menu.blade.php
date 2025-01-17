<?php
$Categories = DB::table('categories')->get();
?>



<ul class="d-flex gap-4 align-items-center px-0 p-1 m-0">
    @foreach ($Categories as $categores)
    <!-- Dropdown (Landing Page) -->
    <li class="dropdown nav-item profile_menu">
        <a class="nav-link fw-medium" href="{{url('/')}}/researches/{{$categores->slung}}">
             {{$categores->title}}
        </a>
    </li>
    @endforeach


    <!-- Dropdown (Blog) -->
    <li class="nav-item dropdown profile_menu">
        <a class="nav-link fw-medium" href="{{url('/')}}/irl-meetups">
            IRL Meetups

        </a>

    </li>
</ul>
