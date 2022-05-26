<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Comics</title>
</head>

<body>
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
    </main>
</body>

</html>
