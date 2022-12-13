@extends('adminlte::page')

@section('title', 'Dashboard')
@section( 'plugins.Sweetalert2',true)
@section('content_header')
<a href="{{url('libro/create')}}" class="btn btn-success">Registrar</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Portada</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Autor</th>
            <th>Fecha Lanzamiento</th>
            <th>Reseña</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $libros as $libro)
        <tr>
            <td>{{$libro -> id}}</td>
            <td>{{$libro -> nombre}}</td>
            <td>{{$libro -> categoria}}</td>
            <td>{{$libro -> stock}}</td>
            <td>{{$libro -> precio}}</td>
            <td>{{$libro -> autor}}</td>
            <td>{{$libro -> fecha_lanzamiento}}</td>
            <td>{{$libro -> resena}}</td>
            <td>
                <img src="{{asset('storage').'/'.$libro->portada}}" width="100" height="100">
            </td>
            <td> <a href="{{ url('libro/'.$libro -> id. '/edit')}}" class="btn btn-success">Editar</a> 
            <form action="{{ url('libro/'.$libro -> id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" anclick="return confirm('¿Seguro que quieres borrar el libro?')" value="Borrar">
            </form>
            </td>
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
  'Advertencia',
  'Intenta actualizar productos si es necesario',
  'warning'
)
 </script>
@stop