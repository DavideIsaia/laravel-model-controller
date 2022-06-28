<h1>Movies Database</h1>
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