@extends('layouts.app')

@section('page-title', 'Laravel Comics')

@section('content')
    <section class="container my-5 bg-dark text-white">
        <form action="{{ route('comics.store') }}" method="POST" class="mx-auto text-center">
            @csrf

            <div>
                <label for="title">Titolo</label>
                <br>
                <input type="text" name="title" id="title" class="w-25">
            </div>

            <div>
                <label for="description">Descrizione</label>
                <br>
                <input type="text" name="description" id="description" class="w-25">
            </div>

            <div>
                <label for="thumb">Thumb</label>
                <br>
                <input type="text" name="thumb" id="thumb" class="w-25">
            </div>

            <div>
                <label for="piece">Prezzo</label>
                <br>
                <input type="text" name="price" id="piece" class="w-25">
            </div>

            <div>
                <label for="series">Serie</label>
                <br>
                <input type="text" name="series" id="series" class="w-25">
            </div>

            <div>
                <label for="sale_date">Data di uscita</label>
                <br>
                <input type="date" name="sale_date" id="sale_date" class="w-25">
            </div>

            <div>
                <label for="type">Tipo</label>
                <br>
                <input type="text" name="type" id="type" class="w-25">
            </div>

            <div>
                <label for="artists">Artista</label>
                <br>
                <input type="text" name="artists" id="artists" class="w-25">
            </div>

            <div>
                <label for="writers">Scrittore</label>
                <br>
                <input type="text" name="writers" id="writers" class="w-25">
            </div>

            <div>
                <input type="submit" value="Invia" class="bg-primary text-white my-4 rounded-3 w-25 text-center">
            </div>
        </form>

    </section>
@endsection
