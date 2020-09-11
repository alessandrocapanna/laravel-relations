@extends('layout.app')
@section('content')
  <h1>sono show</h1>
  <p>Titolo: {{ $album->titolo}}</p>
  <p>Anno: {{ $album->anno}}</p>
  <span>ARTIST: </span>
  <ul>
    @foreach ($album->artists as $artist)
      <li>{{ $artist->nome}}</li>
    @endforeach
  </ul>

  <h2>Lista canzoni:</h2>
  <ul>
    @foreach ($album->songs as $song)
      <li>{{ $song->titolo}}</li>
    @endforeach
  </ul>
@endsection
