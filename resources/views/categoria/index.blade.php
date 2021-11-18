@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Categorias</h1>
@stop

@section('content')
<div class="container">
    <a href="categoria/create" class="btn btn-info mb-3">Añadir categoria</a>
<table id="categorias" class="table table-striped text-center" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre categoria</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{ $categoria-> id}}</td>
            <td>{{ $categoria-> nombre_categoria}}</td>
            <td>{{ $categoria-> descripcion}}</td>
            <td>
                <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST">
                <a href="/categoria/{{ $categoria-> id }}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Nombre categoria</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>
</div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>$(document).ready(function() {
        $('#categorias').DataTable();
    } );
    </script>
@stop
