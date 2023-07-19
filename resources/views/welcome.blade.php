@extends('layouts.app')

@section('title', 'Hello World')

@section('main-content')
<main>
    <div class="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbo img">
    </div>

    <div class="container">
        <button class="top-button">CURRENT SERIES</button>

        <div class="card">
            <img src="" alt="test">
            <p>test</p>
        </div>

        <button class="load-more">LOAD MORE</button>
    </div>
</main>
@endsection