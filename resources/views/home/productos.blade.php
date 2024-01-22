<!-- Vista que muestra la página "Productos" -->
<!-- Al importar el template que viene por defecto en laravel, podemos -->
<!-- editar ciertas secciones de la plantilla que tienen la directiva yield -->
<!-- con la directiva section. -->

<!-- Se usa como plantilla el layout desarrollado en app.blade.php -->
<!-- @ extends Nos permite usar plantillas que ya tienen bastante codigo html -->
@extends('layouts.app')

<!-- Titulo de la pagina del navegador accediendo a la variable que nos pasamos desde el controlador-->
@section('title', $datos['vista']['Titulo'])

<!-- Titulo dentro del DOM (Visible) -->
@section('subtitle', $datos['vista']['Subtitulo'])

<!-- Inyectamos la lista de productos recorriendo el array de los productos del controlador -->

@section('content') 

    <div class="row">
    @foreach($datos['productos'] as $producto)
        <?php $imagen=$producto['imagen']; ?>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset("/img/$imagen") }}" class="img-fluid rounded">
        </div>
    @endforeach
    </div>

@endsection




