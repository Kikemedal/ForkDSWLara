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

    <div class="row">

        
    </div>


@endsection


