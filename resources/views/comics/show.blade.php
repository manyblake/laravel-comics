@extends('layouts.app')

@section('content')
  <div class="hero">
    <img src={{asset('../img/jumbotron.jpg')}} />
  </div>

  <div class="comic__header">
    <div class="container">
    <img class="comic__preview" src="{{ $comic['thumb'] }}">
    </div>
  </div>

  <section class="comic__body">
    <div class="container">
      <div class="comic__grid">
        <div class="comic__description">
          <h4>{{ $comic['title'] }}</h4>
          <div class="comic__price">
            <p>U.S. Price: <span>{{ $comic['price'] }}</span></p>
            <div class="comic__available">
              <p>AVAILABLE</p>
              <p class="comic__check-avail">Check Availability</p>
            </div>
          </div>

          <p class="comic__text">{{ $comic['description'] }}</p>
        </div>
        <img src={{asset('../img/adv.jpg')}} />
      </div>
    </div>

    <div class="comic__details">
      <div class="container">

        <div class="comic__talent">
          <h4>Talent</h4>
          <div class="comic__art">
            <p class="comic__art-title">Art By:</p>
            <div class="comic__artists">
              @foreach ($comic['artists'] as $artist)
                <p class="comic__artist">{{$artist}} </p>
              @endforeach
            </div>
          </div>

          <div class="comic__authors">
            <p class="comic__writers-title">Written By:</p>
            <div class="comic__writers">
              @foreach ($comic['writers'] as $writer)
                <p class="comic__writer">{{$writer}} </p>
              @endforeach
            </div>
          </div>
        </div>

        <div class="comic__specs">
          <h4>Specs</h4>
          <div class="comic__serie">
            <p class="comic__specs-title">Series:</p>
            <p class="comic_serie-link">{{ $comic['series'] }}</p>
          </div>
          <div class="comic__price">
            <p class="comic__specs-title">U.S. Price:</p>
            <p>{{$comic['price']}}</p>
          </div>
          <div class="comic__sale-date">
            <p class="comic__specs-title">On Sale Date:</p>
            <p>{{$comic['sale_date']}}</p>
          </div>
        </div>


          <div class="comic_toolbar">

            <a href="#">
              <p>digital comics</p>
              <img src={{asset('../img/buy-comics-digital-comics.png')}}>
            </a>
            <a href="#">
              <p>shop dc</p>
              <img src={{asset('../img/buy-comics-digital-comics.png')}}>
            </a>
            <a href="#">
              <p>comic shop locator</p>
              <img src={{asset('../img/buy-comics-digital-comics.png')}}>
            </a>
            <a href="#">
              <p>subscriptions</p>
              <img src={{asset('../img/buy-comics-digital-comics.png')}}>
            </a>
          </div>



      </div>
    </div>
  </section>

@endsection