@extends('layouts.default')
@section("page-title", "DC-COMICS PRODOTTI")
@section('content')

<div class="background-main">
  <div class="img-prodotto">
    <img src="{{$singoloFumetto['thumb']}}" alt="">
  </div>
</div>

<div class="bg-blue1"></div>

<div class="container py-5">
  <div class="row">
    <div class="col-8">
      <h1>{{ $singoloFumetto['title'] }}</h1>
      <div class="d-flex">
        <h5>U.S. Price: {{ $singoloFumetto['price'] }}</h5>
        <h5>AVAILABLE</h5>
      </div>
      <div>
        <h5>CHECK AVAIBILITY</h5>
      </div>
      <div>
        <p>{{ $singoloFumetto['description'] }}</p>
      </div>
    </div>
    
  
 
    <div class="col-4">
      <img src="{{ asset('/images/adv.jpg') }}" alt="">
    </div>
  </div>
</div>

<div class="container-add">
  <div class="container">
    <div class="row pb-5">
      <div class="col-6">
        <h4 class="py-4">Talent</h4>

        <div class="py-4 container-art">
          <div class="row">
            <div class="col-3">
              <h5 class="pe-3">Art by:</h5>
            </div>
            <div class="col-9 d-flex text-color">
              @foreach ($singoloFumetto['artists'] as $item)
              {{  $item }},
              @endforeach
            </div>
          </div>
        </div>
        <div class="py-4 container-write">
          <div class="row">
            <div class="col-3">
              <h5 class="pe-3">Written by:</h5>
            </div>

            <div class="col-9 d-flex text-color">
              @foreach ($singoloFumetto['writers'] as $item)
              {{  $item }},
              @endforeach
            </div>
          </div>
        </div>
      </div>


      <div class="col-6">
        <h4 class="py-4">Specs</h4>

        <div class="py-2 container-art">
          <div class="row">
            <div class="col-3">
              <h5 class="pe-3">Series:</h5>
            </div>
            <div class="col-9 d-flex text-color">
              <p>{{ $singoloFumetto['series'] }}</p>
            </div>
          </div>
        </div>

        <div class="py-2 container-write">
          <div class="row">
            <div class="col-3">
              <h5 class="pe-3">U.S. Price:</h5>
            </div>
            <div class="col-9 d-flex">
              <p>{{ $singoloFumetto['price'] }}</p>
            </div>
          </div>
        </div>

        <div class="py-2 container-write">
          <div class="row">
            <div class="col-3">
              <h5 class="pe-3">On Sale Date:</h5>
            </div>
            <div class="col-9 d-flex">
              <p>{{ $singoloFumetto['sale_date'] }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
    <div class="container-object">
      <div class="container">
        <div class="row row-cols-5">

          <div class="col container-col">
            <h6>DIGITAL COMICS</h6>
            <img class="img-object" src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="">
          </div>

          <div class="col container-col">
            <h6>DIGITAL COMICS</h6>
            <img class="img-object" src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="">
          </div>

          <div class="col container-col ">
            <h6>DIGITAL COMICS</h6>
            <img class="img-object" src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="">
          </div>

          <div class="col container-col">
            <h>DIGITAL COMICS</h>
            <img class="img-object" src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="">
          </div>

          <div class="col container-col">
            <h6>DIGITAL COMICS</h6>
            <img class="img-object" src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  
</div>
{{-- @php
dump($singoloFumetto);
@endphp --}}
@endsection