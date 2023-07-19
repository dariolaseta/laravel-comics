@extends('layouts.app')

@section('title', 'DC Comics')

@section('main-content')
<main>
    <div class="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbo img">
    </div>

    <div class="container">
        <button class="top-button">CURRENT SERIES</button>

        @foreach($cardData as $data)
        <div class="card">
            <img src="{{$data["thumb"]}}" alt="comic thumbnail">
            <p>{{$data["title"]}}</p>
        </div>
        @endforeach

        <button class="load-more">LOAD MORE</button>
    </div>
</main>
@endsection