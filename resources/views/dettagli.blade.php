@extends('layout.app');

@section('titolo','dettaglio contenuto');


@section('content')
<div class="dettaglio">
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    <h1>{{ $comic['title'] }}</h1>
    <p>{{ $comic['description'] }}</p>
    <h3>{{ $comic['price'] }}</h3>
    <h3>{{ $comic['series'] }}</h3>
    <h3>{{ $comic['sale_date'] }}</h3>
    <h3>{{ $comic['type'] }}</h3>
</div>
@endsection