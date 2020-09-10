@extends('layout.app')
@section('content')

  <h1>Ecco la lista degl'album</h1>
  <div class="container">
    @foreach ($albums as $album)
      <div class="album">
        <img src="{{ $album->covers->url}}" alt="{{ $album->title }}">

        @foreach ($album->artists as $artist)
          <p>{{ $artist->nome}}</p>
        @endforeach

        <span>Articolo: {{ $album->artista }}</span>
        <span>Anno: {{ $album->anno }}</span>
        <a href="{{ route('album.show' , $album)}}"> dettagli</a>
      </div>
    @endforeach
  </div>
@endsection
