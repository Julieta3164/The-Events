    <div class="btn">
        @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="">Panel Personal</a>
        @else
        <button  type="button" class="btn btn-danger btn-sm me-md-2">
            <a href="{{ route('login') }}" class="btn btn-danger btn-sm me-md-2">Inicia Sesión</a>
        </button>

            @if (Route::has('register'))
            <button type="button"  class="btn btn-danger btn-sm">
                <a href="{{ route('register') }}" class="btn btn-danger btn-sm">Regístrate</a>
            </button>
            @endif
        @endauth
        @endif
    </div>
