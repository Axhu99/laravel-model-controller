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

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @forelse ($movies as $movie)
                    <div class="col-3 gy-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }} - Vote:
                                    {{ $movie->vote }}</h6>
                                <p class="card-text">Date: {{ $movie->date }} | Nationality: {{ $movie->nationality }}.
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <h3>Non ci sono film</h3>
                    </div>
                @endforelse
            </div>

        </div>
    </main>

</body>

</html>
