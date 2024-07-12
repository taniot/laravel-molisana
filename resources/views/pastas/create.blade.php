<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crea una nuova pasta</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <h1>
            Inserisci nuova pasta
        </h1>

        <form action="{{ route('pastas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome pasta</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Tempo di cottura</label>
                <input type="number" class="form-control" name="cooking_time">
            </div>
            <div class="mb-3">
                <label class="form-label">Peso</label>
                <input type="number" class="form-control" name="weight">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <select name="type" class="form-select">
                    <option>Lunga</option>
                    <option>Corta</option>
                    <option>Cortissima</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control" name="image">
            </div>
            <button class="btn btn-primary">Crea Pasta</button>
        </form>
    </div>


</body>

</html>
