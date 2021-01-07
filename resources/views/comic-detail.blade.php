@extends('layouts.main')

@section('content')
<main class="comic-main">
  {{-- Hero --}}
  <div class="hero" style="background-image: url({{ $comic['image-hero'] }});">
    <div class="container-small">
      <img src="{{ $comic['image-cover'] }}" alt="Cover home">
    </div>
  </div>
  <div class="container-small">
    {{-- Comic detail section --}}
    <section class="comic-detail">
      <h2>{{ $comic['title'] }}</h2>
      <div class="price">
        {{ $comic['price'] }}
      </div>
      <div class="description">
        {!! $comic['body'] !!}
      </div>
    </section>
    {{-- Advertisement --}}
    <div class="adv">
      <img src="{{ asset('images/adv.png') }}" alt="adv">
    </div>
  </div>
</main>
@endsection