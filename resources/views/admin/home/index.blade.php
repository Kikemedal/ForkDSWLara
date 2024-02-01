@extends('layouts.admin')  <!-- Esto coge la plantilla de administrador que hay en layouts -->
@section('title', $datos["Titulo"])  <!-- Esto recoge el dato que se envia desde el controlador y lo añade al titulo de la plantilla-->
@section('content')  <!-- Esto edita la directiva content de la plantilla admin. -->
<div class="card">
  <div class="card-header">
    Página principal del panel de control
  </div>
  <div class="card-body">
    Bienvenido/a al panel de control. Utiliza el menú lateral para navegar entre las diferentes opciones.
  </div>
</div>
@endsection