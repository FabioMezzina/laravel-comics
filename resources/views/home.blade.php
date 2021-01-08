@extends('layouts.main')

@section('content')
<main class="home-main">
  {{-- Hero --}}
  <div class="hero">
    <div class="container-small">
      <img src="{{ asset('images/cover-home.jpg') }}" alt="Cover home">
    </div>
  </div>
  {{-- comic list --}}
  <div class="container">
    <ul class="comic-list flex f-wrap">
      @foreach($comics as $comic)
      <li class="comic-item">
        <a href="{{ route('comic', $comic['slug']) }}">
          <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}" class="mb-1">
          <h3>{{ $comic['title'] }}</h3>
        </a>
      </li>
      @endforeach
    </ul>
    <button class="btn btn-load-more">LOAD MORE</button>
  </div>
  {{-- shop navbar --}}
</main>
<nav class="main-shop-nav">
  <div class="container">
    <ul class="flex jc-evenly ai-center">
      <li>
        <a href="#">
          <div class="wrapper">
            <img src="{{ asset('images/digital-comics.png') }}" alt="">
          </div>
          <span>DIGITAL COMICS</span>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="wrapper">
            <img src="{{ asset('images/merchandise.png') }}" alt="">
          </div>
          <span>DC MERCHANDISE</span>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="wrapper">
            <img src="{{ asset('images/subscriptions.png') }}" alt="">
          </div>
          <span>SUBSCRIPTION</span>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="wrapper">
            <img src="{{ asset('images/shop-locator.png') }}" alt="">
          </div>
          <span>COMIC SHOP LOCATOR</span>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="wrapper">
            <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000svg" x="0" y="0" viewBox="0 0 79.5 50.9" xml:space="preserve"><style>.st0{fill:none;stroke:#fff;stroke-width:1.7732;stroke-miterlimit:10}</style><path class="st0" d="M73.9 49.6H5.3c-2.1 0-3.8-1.7-3.8-3.8V5.4c0-2.1 1.7-3.8 3.8-3.8h68.6c2.1 0 3.8 1.7 3.8 3.8v40.3c0 2.1-1.7 3.9-3.8 3.9zM1.5 15.4h76.2"/><path fill="#fff" stroke="#fff" stroke-width=".998" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M50.1 22.1l-9.7 1.4 5.1-16.4L29 30.2l9.3-1.3L34.4 44z"/></svg>

          </div>
          <span>DC POWER VISA</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
@endsection