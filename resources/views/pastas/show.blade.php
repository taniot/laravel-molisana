<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dettaglio pasta</title>
</head>

<body>
    <h1>{{ $pasta->title }}</h1>
    <p>{{ $pasta->description }}</p>
    <a href="{{ route('pastas.index') }}">Torna alla home</a>
</body>

</html>
