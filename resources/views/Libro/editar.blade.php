@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<a href="{{url('libro')}}" class="btn btn-success">Regresar</a>
<form action="{{url('libro/'.$libro -> id)}}" method="post" >
    @csrf
    {{method_field('PATCH')}}
    <label for="nombre"class="form-label"> Nombre </label>
    <input type="text" class="form-control" name="nombre" value="{{ $libro -> nombre}}" id="nombre">
    <br>
    <label for="categoria" class="form-label"> Categoria </label>
    <input type="text" class="form-control" name="categoria" value="{{ $libro -> categoria }}"  id="categoria">
    <br>
    <label for="stock" class="form-label"> Stock </label>
    <input type="number" class="form-control" name="stock"  value="{{ $libro -> stock}}"  id="stock">
    <br>
    <label for="precio" class="form-label"> Precio </label>
    <input type="number" class="form-control" name="precio" value="{{ $libro -> precio}}"  id="precio">
    <br>
    <label for="autor" class="form-label"> Autor </label>
    <input type="text" class="form-control" name="autor"  value="{{ $libro -> autor}}"  id="autor">
    <br>
    <label for="fecha_lanzamiento" class="form-label"> Fecha Lanzamiento </label>
    <input type="date" class="form-control" name="fecha_lanzamiento" value="{{ $libro -> fecha_lanzamiento}}"   id="fecha_lanzamiento">
    <br>
    <label for="resena" class="form-label"> Reseña </label>
    <input type="text" class="form-control" name="resena"  value="{{ $libro -> resena}}"  id="resena">
    <br>
    
    <img src="{{asset('storage').'/'.$libro->portada}}" width="100" alt="100">
    <input type="submit"  class="form-control" value="Editar">
</form>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


