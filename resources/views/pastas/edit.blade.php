<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifica pasta</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <h1>
            Modifica pasta: {{ $pasta->title }}
        </h1>
        <a href="{{ route('pastas.index') }}">Torna all'elenco</a>

        <form action="{{ route('pastas.update', $pasta->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="text" class="form-control" name="id" value="{{ old('id', $pasta->id) }}">
            </div>


            <div class="mb-3">
                <label class="form-label">Nome pasta</label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $pasta->title) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Tempo di cottura</label>
                <input type="number" class="form-control" name="cooking_time"
                    value="{{ old('cooking_time', $pasta->cooking_time) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Peso</label>
                <input type="number" class="form-control" name="weight" value="{{ old('weight', $pasta->weight) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                {{-- <select name="type" class="form-select">
                    <option>Lunga</option>
                    <option>Corta</option>
                    <option>Cortissima</option>
                </select> --}}

                <input type="text" class="form-control" name="type" value="{{ old('type', $pasta->type) }}">

            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control" rows="3" name="description"> {{ old('description', $pasta->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control" name="image" value="{{ old('image', $pasta->weight) }}">
            </div>
            <button class="btn btn-primary">Modifica Pasta</button>
        </form>
    </div>


</body>

</html>
