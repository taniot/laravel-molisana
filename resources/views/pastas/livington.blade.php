<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Livington</title>
</head>

<body>
    <h1>Prova pagina livington</h1>

    <ul>
        @foreach ($pastas as $pasta)
            <li>{{ $pasta->title }}</li>
        @endforeach
    </ul>


</body>

</html>
