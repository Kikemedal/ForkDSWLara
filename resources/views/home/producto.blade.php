<!-- Vista que muestra la página "Producto/id" -->
<!-- Al importar el template que viene por defecto en laravel, podemos -->
<!-- editar ciertas secciones de la plantilla que tienen la directiva yield -->
<!-- con la directiva section. -->

<!-- Se usa como plantilla el layout desarrollado en app.blade.php -->
<!-- @ extends Nos permite usar plantillas que ya tienen bastante codigo html -->
@extends('layouts.app')

<!-- El titulo de esta pagina vendra de la informacion del array del controlador de Productos-->
@section('title', $vista['Titulo'])

<!-- Aqui sucede lo mismo que con la sección anterir -->
@section('subtitle', $vista['Subtitulo'])

<!-- Inyectamos html de manera que se vea la infromacion almacenada en el array creado en productos -->


