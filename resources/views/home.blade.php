@extends('layouts.main')

@section('content')
<main class="home-main">
  <div class="container">
    <ul class="comic-list flex f-wrap">
      @foreach($comics as $comic)
      <li class="comic-item">
        <a href="#">
            <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
          <h3>{{ $comic['title'] }}</h3>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</main>
@endsection