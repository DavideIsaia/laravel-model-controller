<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Movie DB</title>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
  <h1>Movies Database</h1>
  <div class="container">
    <ul>
      {{-- {{ dd($movies) }} --}}
      @foreach ($movies as $movie)
          <li>
              <h2>{{ $movie->title }}</h2>
              <h3>Titolo originale: {{ $movie->original_title }}</h3>
              <h4>Nazionalità: {{ $movie->nationality }}</h4>
              <div>Uscito nelle sale il {{\Carbon\Carbon::parse($movie->date)->format('d/M/Y')}}</div>
              <div>Voto: {{ $movie->vote }}/10</div>
          </li>
      @endforeach
    </ul>  
  </div>
</body>
</html>