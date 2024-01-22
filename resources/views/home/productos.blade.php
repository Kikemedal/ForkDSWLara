<!-- Vista que muestra la página "Productos" -->

<!-- Se usa como plantilla el layout desarrollado en app.blade.php -->
@extends('layouts.app')

<!-- Titulo de la pagina del navegador -->
@section("title", $vista["Titulo"])

<!-- Titulo dentro del DOM (Visible) -->
@section('subtitle', $vista["Subtitulo"])


