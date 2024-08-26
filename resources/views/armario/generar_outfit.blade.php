<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nharnnia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleGenerarOutfit.css') }}">
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
    <div class="d-flex justify-content-center align-items-center" style="height:80vh;">
    <div class="container contenedor-formulario">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="titulo-formulario">Generar Outfit</h1>
                    
                <form id="outfitForm" action="{{ route('armario.outfit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="estilo">Estilo:</label>
                        <select name="estilo" id="estilo" class="form-control">
                            <option value="casual">Casual</option>
                            <option value="formal">Formal</option>
                            <option value="deportivo">Deportivo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="clima">Clima:</label>
                        <select name="clima" id="clima" class="form-control">
                            <option value="normal">Normal</option>
                            <option value="verano">Verano</option>
                            <option value="invierno">Invierno</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="genero">Género:</label>
                        <select name="genero" id="genero" class="form-control">
                            <option value="hombre">Masculino</option>
                            <option value="mujer">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" id="ubicacionCheckbox" name="ubicacion" class="form-check-input">
                            <label class="form-check-label" for="ubicacionCheckbox">Usar ubicación</label>
                        </div>
                    </div>
                    <div class="form-group" id="ubicacionGroup" style="display: none;">
                        <input type="hidden" id="latitud" name="latitud" class="form-control">
                        <input type="hidden" id="longitud" name="longitud" class="form-control">
                    </div>
                    <div class="contenedor-boton-formulario">
                        <button type="submit" class="btn btn-dark boton-formulario">Generar Outfit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
 
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:black;" id="errorModalLabel">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color:black;">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ubicacionCheckbox = document.getElementById('ubicacionCheckbox');
            const ubicacionGroup = document.getElementById('ubicacionGroup');
            const latitudInput = document.getElementById('latitud');
            const longitudInput = document.getElementById('longitud');

            ubicacionCheckbox.addEventListener('change', function () {
                if (ubicacionCheckbox.checked) {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function (position) {
                            latitudInput.value = position.coords.latitude;
                            longitudInput.value = position.coords.longitude;
                            ubicacionGroup.style.display = 'block';
                        }, function (error) {
                            alert('Error al obtener la ubicación: ' + error.message);
                            ubicacionCheckbox.checked = false;
                            ubicacionGroup.style.display = 'none';
                        });
                    } else {
                        alert('La geolocalización no es compatible con este navegador.');
                        ubicacionCheckbox.checked = false;
                        ubicacionGroup.style.display = 'none';
                    }
                } else {
                    latitudInput.value = '';
                    longitudInput.value = '';
                    ubicacionGroup.style.display = 'none';
                }
            });

            @if(session('error'))
                var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                var errorModalBody = document.querySelector('.modal-body');
                if (errorModalBody) {
                    errorModalBody.innerText = "{{ session('error') }}";
                    errorModal.show();
                    {{ session()->forget('error') }};
                } else {
                    console.error("No se encontró el cuerpo del modal");
                }
            @endif
        });
    </script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
