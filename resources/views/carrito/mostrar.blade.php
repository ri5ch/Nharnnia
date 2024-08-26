<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nharnnia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleMostrarCarrito.css') }}">
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
    <h1 class="text-center mt-3 titulo-carrito">Carrito de Compras</h1>
    @if (!isset($carrito->prendas) || $carrito->prendas->isEmpty())
        <div class="contendor-imagen-vacio">
            <img src="{{ asset('img/logosinfondo.png') }}" class="img-fluid imagen-vacio" alt="">
        </div>
        <p class="text-center vacio">Tu carrito está vacío.</p>
    @else
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach ($carrito->prendas as $prenda)
                        <li class="list-group-item d-flex justify-content-between align-items-center prenda-item">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset($prenda->imagen) }}" alt="{{ $prenda->nombre }}" class="prenda-img me-3">
                                <div class="prenda-info">
                                    <h5 class="mb-0">{{ $prenda->nombre }}</h5>
                                    <span>Precio: ${{ $prenda->precio }}</span>
                                </div>
                            </div>
                            <div>
                                <form action="{{ route('carrito.eliminar', $prenda->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark btn-sm">Eliminar del carrito</button>
                                </form>
                            </div> 
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="text-center mt-3">
            <p class="total">Total: ${{ $total }}</p>
            <form action="{{ route('carrito.comprar') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light">Comprar</button>
            </form>
        </div>
    @endif
    <div class="text-center mt-3">
        <a href="{{ route('prendas.index') }}" class="btn btn-light">Seguir comprando</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
