<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/styleRegistro.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="cuerpo">
    <div class="contenedor-titulo">
        <img src="{{ asset('img/logosinfondo.png') }}" class="logo-titulo" alt="">
        <h1 class="titulo">Nhaarnnia</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height:73vh;">
        <div class="contenedor-login">
            <div class="container">
                <h2 class="titulo-login">Registro</h2>
                @if ($errors->any())
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var myModal = new bootstrap.Modal(document.getElementById('errorModal'), {
                                keyboard: false
                            });
                            myModal.show();
                        });
                    </script>
                @endif
                <form action="{{ route('registro') }}" method="POST">
                    @csrf
                    <div class="contenedor-input">
                        <label for="name">Nombre:</label><br>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
                    </div>
                    <div class="contenedor-input">
                        <label for="email">Correo electrónico:</label><br>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
                    </div>
                    <div class="contenedor-input">
                        <label for="password">Contraseña:</label><br>
                        <input type="password" id="password" name="password"><br>
                    </div>
                    <div class="contenedor-input">
                        <label for="password_confirmation">Confirmar contraseña:</label><br>
                        <input type="password" id="password_confirmation" name="password_confirmation"><br>
                    </div>
                    <div class="contenedor-boton-login">
                        <button class="boton-login" type="submit">Registrarse</button>
                    </div>
                </form>
                <div class="contenedor-registrarse">
                    <p style="text-align:center; margin-top: 20px;">¿Ya tienes una cuenta?</p>
                    <a href="{{route ('sesion.formulario-inicio-sesion')}}">
                        <button class="boton-login">Iniciar sesión</button>
                    </a>
                </div> 
            </div>
        </div>
    </div>
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

