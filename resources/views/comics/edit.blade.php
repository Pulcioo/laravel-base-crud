@extends('layout.app')

@section('edit')
    <main>
        <h1>CREATE NEW COMIC</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="box">
                <label for="title">Add Title:</label>
                <input type="text" name="title" value="{{ $comic->title }}">
            </div>
            <div class="box">
                <label for="description">Add Description:</label>
                <textarea name="description">{{ $comic->description }}</textarea>
            </div>
            <div class="box">
                <label for="thumb">Add Image URL:</label>
                <input type="text" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="box">
                <label for="price">Add Price:</label>
                <input type="text" name="price" value="{{ $comic->price }}">
            </div>
            <div class="box">
                <label for="series">Add Series:</label>
                <input type="text" name="series" value="{{ $comic->series }}">
            </div>
            <div class="box">
                <label for="sale_date">Add Sale date:</label>
                <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="box">
                <label for="type">Add Type:</label>
                <input type="text" name="type" value="{{ $comic->type }}">
            </div>

            <button class="create-btn" type="submit">INVIA</button>
        </form>
    </main>
@endsection
