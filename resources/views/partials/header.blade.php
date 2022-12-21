<?php
$links = config('navlink.navbar');
?>


<div class="bg-primary   flex-end ">
    <div class="container">
        <ul class=" text-white d-flex list-unstyled">
            <li class="me-3">DC POWER ^SM VISA &copy;</li>
            <li>Additional dc site</li>
        </ul>
    </div>

</div>
<header class="bg-white container d-flex align-items-center">
    <div>

        <a href="{{ route('home') }}">

            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
        </a>

    </div>
    <nav class="navbar-nav container ">
        <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
            @foreach ($links as $list)
                <li>
                    <a class="text-capitalize text-decoration-none text-black"
                        href="{{ $list['url'] }}">{{ $list['text'] }}</a>
                </li>
            @endforeach

        </ul>
    </nav>


</header>
