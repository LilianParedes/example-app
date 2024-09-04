<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> {{-- Sección para el título de la página --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="sidebar">
        @section('sidebar')
            <p>This is the master sidebar.</p>
        @show {{-- Muestra la sección del sidebar, permitiendo que se extienda en otras vistas --}}
    </div>

    <div class="content">
        @yield('content') {{-- Sección para el contenido de la página --}}
    </div>

    <footer>
        <p>&copy; 2024 Mi Aplicación</p>
    </footer>
</body>
</html>
