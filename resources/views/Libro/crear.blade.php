@extends('adminlte::page')

@section('title', 'Dashboard')
@section( 'plugins.Sweetalert2',true)
@section('content_header')
<a href="{{url('libro')}}">Regresar</a>
<form action="{{ url('libro')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nombre"> Nombre </label>
        <input type="text" class="form-control" name="nombre"  id="nombre">
    </div>
    <br>
    <div class="mb-3">
        <label for="categoria"> Categoria </label>
        <input type="text" class="form-control" name="categoria"   id="categoria">
    </div>
    <br>
    <div class="mb-3">
        <label for="stock"> Stock </label>
        <input type="number" class="form-control"  name="stock"    id="stock">
    </div>
    <br>
    <div class="mb-3">
        <label for="precio"> Precio </label>
        <input type="number"  class="form-control" name="precio"   id="precio">
    </div>
    <br>
    <div class="mb-3">
        <label for="autor"> Autor </label>
        <input type="text" class="form-control" name="autor"    id="autor">
    </div>
    <br>
    <div class="mb-3">
        <label for="fecha_lanzamiento"> Fecha Lanzamiento </label>
        <input type="date" class="form-control" name="fecha_lanzamiento"    id="fecha_lanzamiento">
    </div>
    <br>
    <div class="mb-3">
        <label for="resena"> Reseña </label>
        <input type="text" class="form-control" name="resena"    id="resena">
    </div>
    <br>
    <div class="mb-3">
        <label for="portada"> Portada </label>
        <input class="form-control" type="file"  name="portada" id="formFile">
    </div>
    <br>
    <input  type="submit" value="Guardar" >
</form>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>Swal.fire(
  'Buenos dias Luis!',
  'Presiona para avanzar!',
  'success'
) </script>
@stop