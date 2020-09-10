@extends('layout.app')
@section('content')

  <h1>Ecco la lista degl'album</h1>
  <div class="container">
    @foreach ($albums as $album)
      <div class="album">
        <img src="{{ $album->covers->url}}" alt="{{ $album->title }}">
        <span>Titolo: {{ $album->titolo }}</span>
        {{-- <span>{{ $album->artists}}</span> --}}
        <span>Articolo: {{ $album->artista }}</span>
        <span>Anno: {{ $album->anno }}</span>
        <a href="{{ route('album.show' , $album)}}"> dettagli</a>
      </div>
    @endforeach
  </div>
@endsection
