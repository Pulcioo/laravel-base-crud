<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>

<body>
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
</body>

</html>
