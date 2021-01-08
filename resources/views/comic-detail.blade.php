@extends('layouts.main')

@section('content')
<main class="comic-main">
  {{-- Hero --}}
  <div class="hero mb-3" style="background-image: url({{ $comic['image-hero'] }});">
    <div class="container-small">
      <img src="{{ $comic['image-cover'] }}" alt="Cover home">
    </div>
  </div>

  {{-- Comic detail section --}}
  <div class="container-small flex jc-between">
    <section class="comic-detail">
      <h2 class="mb-2">{{ $comic['title'] }}</h2>
      <div class="price flex mb-2">
        <div class="flex jc-between">
          <span>U.S. Price: ${{ $comic['price'] }}</span>
          <span>AVAILABLE ON 11/10</span>
        </div>
        <div>Check Availability</div>
      </div>
      <div class="description">
        {!! $comic['body'] !!}
      </div>
    </section>
    {{-- Advertisement --}}
    <div class="adv">
      <h4 class="text-right mb-1">ADVERTISEMENT</h4>
      <img src="{{ asset('images/adv.png') }}" alt="adv">
    </div>
  </div>

  {{-- Comic info section --}}
  <section class="comic-info">
    <div class="container-small flex jc-between">
      {{-- Talent info --}}
      <div class="info">
        <h3 class="mb-2">Talent</h3>
        <div class="info-box flex highlight">
          <h5>Art by:</h5>
          <span>Sandy Jarrell, Agnes Garbowska</span>
        </div>
        <div class="info-box flex highlight">
          <h5>Written by:</h5>
          <span>P.C. Morrisey, Heather Nuhfer</span>
        </div>
      </div>
      {{-- Specs info --}}
      <div class="info">
        <h3 class="mb-2">Specs</h3>
        <div class="info-box flex highlight">
          <h5>Series:</h5>
          <span>{{ $comic['title'] }}</span>
        </div>
        <div class="info-box flex">
          <h5>U.S. Price:</h5>
          <span>{{ $comic['price'] }}</span>
        </div>
        <div class="info-box flex">
          <h5>On Sale Date:</h5>
          <span>Nov 10 2020</span>
        </div>
      </div>
    </div>
  </section>
  
  {{-- shop navbar --}}
  <nav class="comic-shop-nav">
    <div class="container-small">
      <ul class="flex">
        <li>
          <a href="#">
            <span>DIGITAL COMICS</span>
            <div class="wrapper">
              <img src="{{ asset('images/digital.png') }}" alt="">
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <span>SHOP DC</span>
            <div class="wrapper">
              <img src="{{ asset('images/shop.png') }}" alt="">
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <span>COMIC SHOP LOCATOR</span>
            <div class="wrapper">
              <img src="{{ asset('images/locator.png') }}" alt="">
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <span>SUBSCRIPTIONS</span>
            <div class="wrapper">
              <img src="{{ asset('images/subscription.png') }}" alt="">
            </div>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</main>
@endsection