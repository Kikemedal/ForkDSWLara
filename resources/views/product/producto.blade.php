<!-- Vista que muestra la página "Producto/id" -->
<!-- Al importar el template que viene por defecto en laravel, podemos -->
<!-- editar ciertas secciones de la plantilla que tienen la directiva yield -->
<!-- con la directiva section. -->

<!-- Se usa como plantilla el layout desarrollado en app.blade.php -->
<!-- @ extends Nos permite usar plantillas que ya tienen bastante codigo html -->
@extends('layouts.app')

<!-- El titulo de esta pagina vendra de la informacion del array del controlador de Productos-->
@section('title', $datos['vista']['Titulo'])

<!-- Aqui sucede lo mismo que con la sección anterior -->
@section('subtitle', $datos['vista']['Subtitulo'])

<!-- Inyectamos html de manera que se vea la infromacion almacenada en el array creado en productos -->
<!-- A la izquierda se coloca la imagen del producto y a la derecha la informacion acerca del producto -->

@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/img/'.$datos["producto"]["imagen"]) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $datos["producto"]["nombre"] }} ({{ $datos["producto"]["precio"] }} €)
        </h5>
        <p class="card-text">{{ $datos["producto"]["descripcion"] }}</p>
        <p class="card-text"><small class="text-muted">Add to Cart</small></p>
      </div>
    </div>
  </div>
</div>
@endsection


