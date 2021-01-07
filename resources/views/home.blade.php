@extends('layouts.main')

@section('content')
<main class="home-main">
  {{-- Hero --}}
  <div class="hero">
    <div class="container-small">
      <img src="{{ asset('images/cover-home.jpg') }}" alt="Cover home">
    </div>
  </div>
  <div class="container">
    <ul class="comic-list flex f-wrap">
      @foreach($comics as $comic)
      <li class="comic-item">
        <a href="{{ route('comic', $comic['id']) }}">
            <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
          <h3>{{ $comic['title'] }}</h3>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</main>
@endsection