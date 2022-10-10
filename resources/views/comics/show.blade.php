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

  <section class="series container">

    <h4>{{ $comic['title'] }}</h4>

  </section>

@endsection