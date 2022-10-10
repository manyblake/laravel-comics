@extends('layouts.app')


@section('content')
  <div class="hero">
      <img src={{asset('../img/jumbotron.jpg')}} />
    </div>

    <section class="series container">
      <h3>Current Series</h3>

      <ul class="card-list">
        @foreach ($comics as $comic)
          <li>
            <div class="card">
              <a href="{{ route('comic', $loop->index) }}">
                <img src="{{ $comic['thumb'] }}">
                <h4>{{ $comic['series'] }}</h4>
              </a>
            </div>
          </li>
        @endforeach
      </ul>

      <button>Load More</button>
    </section>

    @include('partials.toolbar')
@endsection
