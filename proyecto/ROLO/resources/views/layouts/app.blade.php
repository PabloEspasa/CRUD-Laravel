<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'RoloBurgers' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/cart.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="z-index: 999">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                    <i class="fa-solid fa-burger fa-bounce" style="color: #ffdb58;"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    @if (request()->is('/'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#productos" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#hamburguesas"> Hamburguesas</a></li>
                                <li><a class="dropdown-item" href="#bebidas"> Bebidas</a></li>
                                <li><a class="dropdown-item" href="#aderezos"> Aderezos</a></li>
                                <li><a class="dropdown-item" href="#guarnicion"> Guarniciones</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('quienes') }}">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactos') }}">Contactos</a>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        @if (request()->is('/') || request()->is('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-user"
                                        style="color: #ffdb58;"></i>
                                    {{ __('Iniciar sesión') }}</a>
                            </li>
                        @endif
                    @endif
                @else
                    @if (request()->is('products'))
                        <!-- no inserto HTML-->
                    @elseif (request()->is('/'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="cartDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-cart-shopping fa-lg" style="color: #ffdb58;"></i>
                                <span class="badge bg-danger cart-count">0</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="cartDropdown" id="cartItems">
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hola <b>{{ Auth::user()->name }}!</b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->cargo_id == 1)
                                <li>
                                    <a class="dropdown-item" href="{{ route('products.index') }}"><i
                                            class="fa-solid fa-boxes-stacked"></i> Inventario</a>
                                </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();clearCart()"><i
                                        class="fa-solid fa-door-open"></i>
                                    {{ __('Cerrar sesión') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-white text-center py-3">
        <p>&copy; Derechos Reservados MAD CAT</p>
    </footer>
</body>

</html>
