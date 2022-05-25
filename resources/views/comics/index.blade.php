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
        <h1>Fumetti</h1>
        @forelse ($comics as $comic)
            <div>
                <h2>{{ $comic->title }}</h2>
                <img src="{{ $comic->thumb }}" alt="">
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->series }}</p>
                <p>{{ $comic->type }}</p>
                <p>{{ $comic->sales_date }}</p>
                <p>{{ $comic->price }}$</p>
            </div>
        @empty
            <p>Non ci sono fumetti!</p>
        @endforelse

    </main>
</body>

</html>
