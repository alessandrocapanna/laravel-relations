@extends('layout.app')
@section('content')
  <h1>sono show</h1>
  <p>Titolo: {{ $album->titolo}}</p>
  <p>Artista: {{ $album->artista}}</p>
  <p>Anno: {{ $album->anno}}</p>

  <h2>Lista canzoni:</h2>
  <ul>
    @foreach ($album->songs as $song)
      <li>{{ $song->titolo}}</li>
    @endforeach
  </ul>
@endsection
