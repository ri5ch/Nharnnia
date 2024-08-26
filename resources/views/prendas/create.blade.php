<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleModificarUsuario.css') }}">
</head>
<body>
    <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
        <h3 class="titulo-index">Añadir una Prenda</h3>
        <form action="{{ route('prendas.store') }}" method="post">
            @csrf
            <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
            <label for="estilo">Estilo</label>
                <input type="text" class="form-control" id="estilo" name="estilo" required>
            </div>
            <div class="form-group">
            <label for="color1">Color1</label>
                <input type="text" class="form-control" id="color1" name="color1" required>
            </div>
            <div class="form-group">
            <label for="color2">Color2</label>
                <input type="text" class="form-control" id="color2" name="color2" required>
            </div>
            <div class="form-group">
            <label for="imagen">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen" required>
            </div>
            <div class="form-group">
            <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" required>
            </div>
            <div class="form-group">
            <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
            <label for="genero">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Crear Prenda</button>
        </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>