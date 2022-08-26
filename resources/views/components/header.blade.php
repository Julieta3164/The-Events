<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>header</title>
</head>
<body>
<header>
    <div>
        <img id="header" src="{{ asset('./img/logo.png') }}" />
    </div>

        @if (Route::has('login'))
            <div class="btg">
                @auth
                    <a href="{{ url('/dashboard') }}" class="">Panel Personal</a>
                @else
                <button  type="button" class="btn btn-primary">
                    <a href="{{ route('login') }}" class="btn btn-primary">Inicia Sesión</a>
                </button>

                    @if (Route::has('register'))
                    <button type="button"  class="btn btn-primary">
                        <a href="{{ route('register') }}" class="btn btn-primary">Regístrate</a>
                    </button>
                    @endif
                @endauth
            </div>
        @endif
    </header>

</body>
</html>                     
