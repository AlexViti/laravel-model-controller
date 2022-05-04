<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Movies</title>

    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <main>
        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie->title }}</h2>
                @if ($movie->title != $movie->original_title)
                    <h3>Titolo originale: {{ $movie->original_title }}</h3>
                @endif
                <div class="info">
                  <div>Produzione: {{ str_replace("british", "britannica", str_replace("american", "americana", $movie->nationality)) }}</div>
                  <div>Data di uscita: {{ date("d/m/Y", strtotime($movie->date)) }}</div>
                  <div class="rating">
                    @for ($i= 0; $i < floor($movie->vote); $i++)
                      &#11088;
                    @endfor
                  </div>
                </div>
            </div>
        @endforeach
    </main>
</body>
</html>
