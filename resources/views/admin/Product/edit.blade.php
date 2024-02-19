@extends('layouts.admin')
@section('title', $datos["producto"]->nombre)
@section('content')
<div class="card mb-4">
  <div class="card-header">
    Modificar Producto
  </div>
  <div class="card-body">
    <form method="POST" action="{{route('admin.producto.update', ['id'=>$datos['producto']->id])}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="name" value="{{$datos['producto']->nombre}}" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Precio:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="price" value="{{$datos['producto']->precio}}" type="number" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Imagen </label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="imagen" type="file" class="form-control">
              <br>
              <img style="width:250px;height:250px" src="{{ asset('storage/img/'.$datos["producto"]["imagen"]) }}">
            </div>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" name="description" rows="3">{{$datos['producto']->descripcion}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
</div>