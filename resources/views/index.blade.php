<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="vh-100 pt-3 bg-dark ">
        <h1 class="text-center mb-2 text-white">Film disponibili:</h1>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card my-3">
                            <div class="card-header text-center ">
                                {{ $movie->title }}
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Titolo originale: {{ $movie->original_title }}</h6>
                                <p class="card-text">
                                </p>
                                {{-- <p class="card-text">Data di uscita: {{ date('d/m/Y', strtotime($movie->date)) }}
                                </p> --}}
                                <a href="{{ route('show_details', ['id' => $movie->id]) }}"
                                    class="btn btn-outline-danger btn-sm">Vedi dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>