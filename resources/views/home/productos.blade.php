<!-- Vista que muestra la página "Productos" -->
<!-- Al importar el template que viene por defecto en laravel, podemos -->
<!-- editar ciertas secciones de la plantilla que tienen la directiva yield -->
<!-- con la directiva section. -->

<!-- Se usa como plantilla el layout desarrollado en app.blade.php -->
<!-- @ extends Nos permite usar plantillas que ya tienen bastante codigo html -->
@extends('layouts.app')

<!-- Titulo de la pagina del navegador accediendo a la variable que nos pasamos desde el controlador-->
@section('title', $vista['Titulo'])

<!-- Titulo dentro del DOM (Visible) -->
@section('subtitle', $vista['Subtitulo'])

<!-- Inyectamos la lista de productos -->

@section('content') 

    <div class="row">
        
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset("/img/movil.png") }}" class="img-fluid rounded">
        </div>
    </div>

@endsection




