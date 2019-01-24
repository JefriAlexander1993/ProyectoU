<nav class=" navbar navbar-expand border-bottom" style="background-color:#38338A;">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="color:#fff">
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{route('principal')}}" style="color:#fff">
                Inicio
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{route('catalogo')}}" style="color:#fff">
                Catalogo
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="#" style="color:#fff">
                Quienes  somos
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="#" style="color:#fff">
                Contactanos
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            @if (Route::has('login'))
                
                    @if (Auth::check())
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="{{ url('/home') }}" style="color:#fff">
                    {{ Auth::user()->name }}
                </a>
            </li>
            @else
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="{{ url('/login') }}" style="color:#fff">
                    Login
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="{{ url('/register') }}" style="color:#fff">
                    Register
                </a>
            </li>
            @endif
                
            @endif
        </li>
    </ul>
</nav>
