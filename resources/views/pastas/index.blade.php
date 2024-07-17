<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elenco paste</title>
</head>

<body>
    <h1>Tutte le paste</h1>
    <a href="{{ route('pastas.create') }}">Crea una nuova pasta</a>
    <ul>
        @foreach ($pastas as $pasta)
            <li><a href="{{ route('pastas.show', $pasta->id) }}">{{ $pasta->title }} - {{ $pasta->type }}</a> - <a
                    href="{{ route('pastas.edit', $pasta->id) }}">edit</a>-

                <form action="{{ route('pastas.destroy', $pasta->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>delete</button>
                </form>




            </li>
        @endforeach
    </ul>
</body>

</html>
