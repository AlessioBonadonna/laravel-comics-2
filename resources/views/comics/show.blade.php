@extends('layouts.app')

@section('page-title', 'Laravel Comics')

@section('content')

    <div>
        <div class="blue"></div>
        <div class="container">
            <div class="box-single-img">
                <span class="comic">comic book</span>
                <img src="{{ $comics->thumb }}" alt="" class="img-single">
                <span class="view text-center">view gallery</span>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="text-uppercase mb-4">{{ $comics->title }}</h1>
        <div class="d-flex">
            <div class="col-8">
                <div class="container-available d-flex">
                    <p class="available-price"> U.S. Price: <span class="price">{{ $comics->price }}</span></p>
                    <div class="status">
                        <p class="text-uppercase available me-4">avaible</p>
                        <span class="check ms-2">Check Availability</span>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="description">{{ $comics->description }}</p>
                </div>
            </div>
            <div class="ms-5 adv">
                <span class="d-flex justify-content-end text-uppercase fw-bold">advertisement</span>
                <img src="{{ Vite::asset('/resources/images/addiv.jpg') }}" alt="">
            </div>
        </div>


        <a href="{{ route('comics.edit', $comics->id) }}">
            <button type="submit" class='btncancella mt-3 btn btn-success'>modifica</button>
        </a>


    </div>

@endsection
