@extends('layouts.app')

@section('page-title', 'Laravel Comics - Comics')

@section('content')
    <div class="main">

        <div class="container container-comics">
            <div class="comics-main">
                <div class="row d-flex flex-wrap">
                    @foreach ($comics as $key => $comic)
                        <div class="my-card">
                            <div class="img-box">
                                <a href="{{ route('comics.show', $key + 1) }}">
                                    <img src="{{ $comic['thumb'] }}" alt="">
                                </a>
                            </div>

                            <p class="text-white">{{ $comic['series'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="#nogo"><button>Load more</button></a>
        </div>
    </div>
    <section class="blue-banner">
        <div class="container">
            <ul class="d-flex list-unstyled justify-content-between align-items-center m-0">
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('/resources/images/buy-comics-digital-comics.png') }}" alt=""
                            class="logo-blue">
                        <span>Digital Comics</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('/resources/images/buy-comics-merchandise.png') }}" alt=""
                            class="logo-blue">
                        <span>Dc Merchandise</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('/resources/images/buy-comics-subscriptions.png') }}" alt=""
                            class="logo-blue">
                        <span>Subscription</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('/resources/images/buy-comics-shop-locator.png') }}" alt=""
                            class="logo-blue">
                        <span>Comic Shop Locator</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('/resources/images/buy-dc-power-visa.svg') }}" alt=""
                            class="logo-blue-svg">
                        <span>Dc Power Visa</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
