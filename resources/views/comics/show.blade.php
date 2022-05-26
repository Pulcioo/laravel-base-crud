@extends('layout.app')

@section('show')
    <main>
        <h1>DETAILS</h1>
        <div class="details">
            <h2>Title: {{ $comic->title }}</h2>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <p><b>Type:</b> {{ $comic->type }}</p>
            <p><b>Price:</b> {{ $comic->price }}$</p>
            <p><b>Sale date:</b> {{ $comic->sale_date }}</p>
            <p><b>Description:</b> {{ $comic->description }}</p>
        </div>
        <a href="{{ route('comics.index') }}">BACK</a>
    </main>
@endsection
