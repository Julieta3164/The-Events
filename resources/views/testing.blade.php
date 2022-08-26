<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
        <link rel="stylesheet" type="text/css" href="{{asseet('css/estilo.css')}}">
=======
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
>>>>>>> develop
        <title>Laravel</title>

    </head>


<<<<<<< HEAD
    
    <body class="antialiased">
        <div class="buttons">
=======
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >
        
>>>>>>> marta3
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Panel Personal</a>
                    @else
<<<<<<< HEAD
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar Sección</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registro</a>
=======
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicia Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regístrate</a>
>>>>>>> develop
                        @endif
                    @endauth
                </div>
            @endif
<<<<<<< HEAD
        </div>
        
=======




           
                
          
            
                
          

>>>>>>> develop
    </body>
</html>
