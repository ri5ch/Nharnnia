<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styleModificarUsuario.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="titulo-index">Edit Prenda</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('prendas.update', $prenda->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{ $prenda->nombre }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="estilo">Estilo</label>
                <input type="text" name="estilo" value="{{ $prenda->estilo }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="color1">Color 1</label>
                <input type="text" name="color1" value="{{ $prenda->color1 }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="color2">Color 2</label>
                <input type="text" name="color2" value="{{ $prenda->color2 }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="text" name="imagen" value="{{ $prenda->imagen }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" value="{{ $prenda->tipo }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" value="{{ $prenda->precio }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="genero">Género</label>
                <input type="text" name="genero" value="{{ $prenda->genero }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-dark">Update</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>