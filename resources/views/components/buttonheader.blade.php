<div class="btn-header">
        
        @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="">Bienvenido</a>
        @else


        <button  type="button" class="btn btn-danger btn-sm me-md-2 ">
            <a href="{{ route('login') }}">Inicia Sesión</a>
        </button>

            @if (Route::has('register'))


            <button type="button"  class="btn btn-danger btn-sm me-md-2 R">
                <a href="{{ route('register') }}">Regístrate</a>
            </button>



            @endif
        @endauth
        @endif
    </div>
