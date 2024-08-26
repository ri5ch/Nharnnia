<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleIndexUsuario.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="titulo-index">Lista de Prendas</h1>
        <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-light" href="{{route('prendas.create')}}">Añadir Prenda</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Estilo</th>
                    <th>Color 1</th>
                    <th>Color 2</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Género</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prendas as $prenda)
                    <tr>
                        <td><img src="{{ $prenda->imagen }}" alt="Imagen de {{ $prenda->nombre }}" style="width: 100px; height: 100px; object-fit: cover;"></td>
                        <td>{{ $prenda->nombre }}</td>
                        <td>{{ $prenda->estilo }}</td>
                        <td>{{ $prenda->color1 }}</td>
                        <td>{{ $prenda->color2 }}</td>
                        <td>{{ $prenda->tipo }}</td>
                        <td>{{ $prenda->precio }}</td>
                        <td>{{ $prenda->genero }}</td>
                        <td>
                            <a href="{{ route('prendas.show', $prenda->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('prendas.edit', $prenda->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('prendas.destroy', $prenda->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta prenda?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-light" href="{{route('usuario.admin')}}">Volver</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
