<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nharnnia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleInicio.css') }}">
</head>
<body class="cuerpo">
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




    <section class="parallax-section">
        <div class="parallax-content">
            <img src="{{ asset('img/logosinfondo.png') }}" alt="" width="210px" height="200px">
            <h1>Bienvenido a Nharnnia</h1>
            <p>Tu tienda y generador de outfits</p>
        </div>
    </section>

    <section class="seccion-explica">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6 text-center">
                  <h1 class="titulo-explica">¿Qué Somos?</h1>
                  <p class="texto-explica">Nhaarnnia es una tienda de ropa emergente de gran variedad con una función única. Ayudar a sus usuarios a elegir sus conjuntos de ropa gracias a nuestro armario virtual y generador de outfits gratuito. Con nuestra oferta de gran variedad de estilos y tipos de ropa, podrás crear tus conjuntos en función al clima que haya en tu localización con la ropa adquirida de tu armario virtual y guardarlos por si te han gustado.</p>
              </div>
              <div class="col-md-6 text-center">
                  <div class="contenedor-img-explica">
                      <img src="{{ asset('img/img-explica.jpg') }}" alt="" class="img-fluid img-explica">
                  </div>
              </div>
          </div>
      </div>
    </section>


    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/img-carousel-1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="carousel-logo">
                        <img class="img-fluid img-carousel-logo" src="{{ asset('img/logo-carousel-1.png') }}" alt="">
                    </div>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/img-carousel-2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="carousel-logo">
                        <img class="img-fluid img-carousel-logo" src="{{ asset('img/logo-carousel-2.avif') }}" alt="">
                    </div>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/img-carousel-3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="carousel-logo">
                        <img class="img-fluid img-carousel-logo" src="{{ asset('img/logo-carousel-3.png') }}" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="seccion-pregunta">
      <h1 class="titulo-pregunta">¿Deseas iniciar sesión?</h1>
      <h3 class="subtitulo-pregunta">Si no te has creado una cuenta...</h3>
      <h5 class="texto-pregunta">¡Regístrate y disfruta del armario virtual y generador de outfits completamente gratuito!</h5>
      <div class="contenedor-boton-pregunta">
          <form action="{{ route('sesion.formulario-inicio-sesion') }}">
              <button type="submit" class="boton-pregunta button">Iniciar Sesión</button>
          </form>
          <form action="{{ route('sesion.formulario-registro') }}">
              <button type="submit" class="boton-pregunta button">Registrarse</button>
          </form>
      </div>
    </section>

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
