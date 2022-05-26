@extends('layout.app')

@section('create')
    <main>
        <h1>CREATE NEW COMIC</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="box">
                <label for="title">Add Title:</label>
                <input type="text" name="title">
            </div>
            <div class="box">
                <label for="description">Add Description:</label>
                <textarea name="description"></textarea>
            </div>
            <div class="box">
                <label for="thumb">Add Image URL:</label>
                <input type="text" name="thumb">
            </div>
            <div class="box">
                <label for="price">Add Price:</label>
                <input type="text" name="price">
            </div>
            <div class="box">
                <label for="series">Add Series:</label>
                <input type="text" name="series">
            </div>
            <div class="box">
                <label for="sale_date">Add Sale date:</label>
                <input type="date" name="sale_date">
            </div>
            <div class="box">
                <label for="type">Add Type:</label>
                <input type="text" name="type">
            </div>

            <button class="create-btn" type="submit">INVIA</button>
        </form>
    </main>
@endsection
