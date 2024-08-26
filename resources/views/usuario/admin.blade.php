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
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="{{ asset('img/logosinfondo.png') }}" alt="" width="70px" height="63px">
            <a class="navbar-brand" href="#">Nharnnia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('inicio.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('armario.mostrar') }}">Armario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('carrito.mostrar') }}">Carrito</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Prendas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('prendas.index') }}">Todas las Prendas</a></li>
                            <li><a class="dropdown-item" href="{{ route('prendas.indexHombre') }}">Hombre</a></li>
                            <li><a class="dropdown-item" href="{{ route('prendas.indexMujer') }}">Mujer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Outfits
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('armario.mostrar_todos_outfits')}}">Mis outfits</a></li>
                            <li><a class="dropdown-item" href="{{ route('armario.generar_outfit') }}">Generar outfit</a></li>
                        </ul>
                    </li>
                    @auth
                        @if(Auth::user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('usuario.admin') }}">Panel Administrador</a>
                            </li>
                        @endif
                    @endauth
                </ul>
                <div class="contenedor-boton-sesion ms-auto">
                    @guest
                        <a class="btn btn-sm btn-light" href="{{ route('sesion.formulario-inicio-sesion') }}">Iniciar Sesión</a>
                    @else
                        <form action="{{ route('cerrar-sesion') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-light">Cerrar Sesión</button>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <h1 class="titulo-index">Panel de Administrador</h1>

    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-light boton-enlace me-2" href="{{route('usuario.index')}}">Usuarios</a>
            <a class="btn btn-light boton-enlace" href="{{route('usuario.indexPrendas')}}">Prendas</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>