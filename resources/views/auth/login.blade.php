@extends('layouts.app')

@section('content')

<div class="d-flex flex-row w-100">
    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center p-4">
        <div id="app">
            <nav class="navbar navbar-expand-md bg-transparent w-100">
                <div class="container">
                    <a href="{{ url('/') }}">
                        <img id="logo-principal-lenador" src="{{ asset('imagenes/logos/logo.png') }}" alt="Logo hotel leñador" style="width: 200px;">
                    </a>
                </div>
            </nav>
        </div>
        <div class="d-flex flex-column align-items-center text-center mt-5">
            <h3 id="login-title">Admin Fenevi</h3>
            <h5 id="login-subtitle">Ingresa tus credenciales para ingresar al portal</h5>

            <div class="mt-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3 d-flex flex-column">
                        <label for="email" class="label-login text-start">Correo Electrónico</label>

                        <div class="col-12">
                            <input id="email" type="email" class="input-login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <label for="password" class="label-login text-start">Contraseña</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="input-login @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    <div class="mb-2">
                            <button type="submit" class="button-login w-100">
                                {{ __('Login') }}
                            </button>
                    </div>

                </form>
            </div>
            {{--
            @guest
                @if (Route::has('login'))
                    <p class="">
                        <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </p>
                @endif

                @if (Route::has('register'))
                    <p class="">
                        <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </p>
                @endif
            @else
                <p class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    </p>
        @endguest
        --}}
        </div>
    </div>
    <div class="col-12 d-none d-lg-flex col-lg-6 p-2">
        <div id="imagen-login-container" class="w-100 rounded"></div>
    </div>

</div>
@endsection
