@extends('adminlte::page')

@section('title', 'Dashboard')
@section( 'plugins.Sweetalert2',true)
@section('content_header')
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>localidad</th>
            <th>codigopostal</th>
            <th>pais</th>
            <th>telefono</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $confirmarcompras as $confirmarcompra)
        <tr>
            <td>{{$confirmarcompra -> id}}</td>
            <td>{{$confirmarcompra -> nombre}}</td>
            <td>{{$confirmarcompra -> apellidos}}</td>
            <td>{{$confirmarcompra -> localidad}}</td>
            <td>{{$confirmarcompra -> codigopostal}}</td>
            <td>{{$confirmarcompra -> pais}}</td>
            <td>{{$confirmarcompra -> telefono}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>Swal.fire(
  'ATENCION',
  'No comparta informacion del panel!!!',
  'error'
)
 </script>
@stop