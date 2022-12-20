@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <section class="container home text-center">
        <h1 class="display-5 fw-bold mt-5"><a href="{{ route('comics.index') }}"> DC Comics </a></h1>
        <a href="{{ route('comics.create') }}">Carica il tuo Comic</a>
    </section>
@endsection
