@extends('layouts.default')

@section('content')
    <h1 class="text-center mb-2 text-white">Film disponibili:</h1>
    <div class="container">
        <div class="row justify-content-center">
            {{-- Ciclo l'array dei film e mostro una card per ogni film contenuto nel db, con titolo, titolo originale e un bottone che rimanda ai dettagli del film  --}}
            @foreach ($movies as $movie)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card my-3">
                        <div class="card-header text-center ">
                            {{ $movie->title }}
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Titolo originale: {{ $movie->original_title }}</h6>
                            <p class="card-text">
                            </p>
                            <a href="{{ route('show_details', ['id' => $movie->id]) }}"
                                class="btn btn-outline-danger btn-sm">Vedi dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
