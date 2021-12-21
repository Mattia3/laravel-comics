@extends('layouts.default')
@section("page-title", "DC-COMICS")
@section('content')
<main>
  <div class="background-main"></div>
  <div class="main-container">
    <div class="container position-relative">
      <button class="button-current"><h3><a href="#">CURRENT SERIES</a></h3></button>
      <div class="row row-cols-6 ">
        
        @foreach($chiave as $card)
        <div class="col pb-5">
          <a href="{{ route('prodotto', ["id" => $card['id']]) }}"><div class="my-card">
            <div class="container-img">
              <img src="{{ $card['thumb'] }}" alt="">
            </div>
          </a>
          <h5 class="text-uppercase text-white">{{ $card['series'] }}</h5>
          </div>
      
        </div>
      @endforeach
      </div>

      <div class="container-button-load">
        <button class="button-load">LOAD MORE</button>
      </div>
    </div>
  </div>
    
  <div class="brand-container">
    <div class="brand">
      <ul class="m-0">
        <li><img src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt=""><a href="#">DIGITAL COMICS</a></li>
        <li><img src="{{ asset('/images/buy-comics-merchandise.png') }}" alt=""><a href="#">DIGITAL COMICS</a></li>
        <li><img src="{{ asset('/images/buy-comics-subscriptions.png') }}" alt=""><a href="#">DIGITAL COMICS</a></li>
        <li><img src="{{ asset('/images/buy-comics-shop-locator.png') }}" alt=""><a href="#">DIGITAL COMICS</a></li>
        <li><img src="{{ asset('/images/buy-dc-power-visa.svg') }}" alt=""><a href="#">DIGITAL COMICS</a></li>
      </ul>
    </div>
  </div>
  
</main>
@endsection