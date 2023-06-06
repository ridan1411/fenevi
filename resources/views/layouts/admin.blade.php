<!doctype html>
{{--  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Admin | Hotel leñador</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">

</head>

<body class="d-flex">
    @auth
    <nav id="admin-sidebarMenu" class="bg-light p-3 m-2">
        <div class="d-flex flex-column">
            <div class="d-flex justify-content-center mb-3">
                <img id="admin-logo" src="{{ asset('imagenes/logos/lenador_cafe.png') }}" alt="logo hotel leñador">
            </div>

            <ul id="admin-menu-list" class="nav flex-column border">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">
                        <i class="bi bi-house-door"></i>
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Route::currentRouteName() == 'galleries.index' ? 'active' : '' }}"
                        href="{{ route('galleries.index') }}"> --}}
                        <i class="bi bi-images"></i>
                        Galería
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Route::currentRouteName() == 'room_types.index' ? 'active' : '' }}"
                        href="{{ route('room_types.index') }}"> --}}
                        <i class="bi bi-layers"></i>
                        Tipos de Habitación
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Route::currentRouteName() == 'seasons.index' ? 'active' : '' }}"
                        href="{{ route('seasons.index') }}"> --}}
                        <i class="bi bi-calendar3-range"></i>
                        Temporadas
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Route::currentRouteName() == 'rooms.index' ? 'active' : '' }}"
                        href="{{ route('rooms.index') }}"> --}}
                        <i class="bi bi-door-open-fill"></i>
                        Habitaciones
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Route::currentRouteName() == 'satisfaction.index' ? 'active' : '' }}"
                        href="{{ route('satisfaction.index') }}"> --}}
                        <i class="bi bi-ui-checks"></i>
                        Encuestas
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Route::currentRouteName() == 'items.index' ? 'active' : '' }}"
                        href="{{ route('items.index') }}"> --}}
                        <i class="bi bi-boxes"></i>
                        Objetos
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    @endauth
    <div id="admin-wrapper" class="d-flex flex-column flex-grow-1">
        <header id="admin-header" class="navbar navbar-dark flex-md-nowrap p-3 shadow m-2">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Admin Panel</a>
            @auth
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <div class="d-flex alignm-items-center">
                            <a class="nav-link text-white d-flex align-items-center">
                                <img id="admin-nav-user-img" class="me-2" src="{{ asset('imagenes/logos/lenador_blanco.png') }}" alt="Imagen {{ Auth::user()->name }}">
                                {{ Auth::user()->name }}
                            </a>
                            <a class="nav-link px-3 d-flex align-items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            @endauth
        </header>

        <main class="p-3 m-2 d-flex flex-column flex-grow-1">
            @yield('content')
        </main>
    </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
@yield('js')

</html>
