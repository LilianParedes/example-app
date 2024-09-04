
@extends('my-layouts.my-app-layout') {{-- Extiende el layout base --}}

@section('title', 'Página Principal') {{-- Define el título de la página --}}

@section('sidebar')
    @parent {{-- Incluye el contenido de la sección sidebar definida en el layout base --}}
    <p>Esta es una adición al sidebar del layout maestro.</p>
@endsection

@section('content')
    <h1>Bienvenido a la Página Principal</h1>
    <p>Este es el contenido principal de la vista.</p>
@endsection
