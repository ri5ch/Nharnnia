<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nharnnia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleMostrarArmario.css') }}">
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
    <h1 class="titulo-mostrar">Tus prendas del armario</h1>
    <div class="container mt-5">
    @if ($prendas->isEmpty())
        <div class="contendor-imagen-vacio">
            <img src="{{ asset('img/logosinfondo.png') }}" class="img-fluid imagen-vacio" alt="">
        </div>
        <p class="text-center vacio">Tu armario está vacío.</p>
    @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-center">
            @php
                $prendasCount = count($prendas);
                $extraClass = '';

                if ($prendasCount <= 2) {
                    $extraClass = 'justify-content-center';
                }
            @endphp

            @foreach ($prendas as $prenda)
                <div class="col {{ $extraClass }}">
                    <div class="card h-100 d-flex flex-column">
                        <div class="card-header">
                            <img src="{{ $prenda->imagen }}" class="card-img" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ $prenda->nombre }}</h5>
                            <p class="card-text mb-3">{{ $prenda->estilo }}</p>
                            <form action="{{ route('armario.eliminar', $prenda->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm mt-auto">Eliminar del armario</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    </div>
    <!-- Footer -->
  <footer class="text-center text-lg-start bg-body-dark text-light">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Nharnnia
            </h6>
            <p>
            Descubre el estilo que te define con nuestra colección de moda exclusiva. Encuentra lo último en tendencias y prendas de calidad que realzarán tu estilo único. ¡Bienvenido a Nharnnia!
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Prendas
            </h6>
            <p>
              <a href="{{ route('prendas.index') }}" class="text-reset">Todas</a>
            </p>
            <p>
              <a href="{{ route('prendas.indexHombre') }}" class="text-reset">Hombre</a>
            </p>
            <p>
              <a href="{{ route('prendas.indexMujer') }}" class="text-reset">Mujer</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Links Útiles
            </h6>
            <p>
              <a href="{{ route('armario.mostrar') }}" class="text-reset">Armario</a>
            </p>
            <p>
              <a href="{{ route('armario.generar_outfit') }}" class="text-reset">Generar Outfit</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
            <p><i class="fas fa-home me-3"></i> Madrid, España</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              nharnnia@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 34 234 567 88</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="">Nharnnia.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


