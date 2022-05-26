@extends('layout.app')

@section('index')
    <main>
        {{-- @dump($comics) --}}
        <h1>COMICS</h1>

        <table class="list">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->price }}$</td>
                        <td><a href="{{ route('comics.show', $comic->id) }}"> + </a></td>
                    </tr>
                @empty
                    <tr>
                        <td>Non ci sono fumetti!</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
        <a href="{{ route('comics.create') }}">ADD ELEMENT</a>
    </main>
@endsection
