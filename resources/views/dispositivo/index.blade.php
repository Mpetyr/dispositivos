@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dispositivos</h1>
@stop

@section('content')
<div class="container">
    <a href="dispositivo/create" class="btn btn-primary mb-3">Añadir dispositivo</a>
    <a href="categoria/create" class="btn btn-primary mb-3">Añadir categoria</a>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Codigo dispositivo</th>
            <th>Tipo</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dispositivos as $dispositivo)
        <tr>
            <td>{{ $dispositivo-> id}}</td>
            <td>{{ $dispositivo-> codigo}}</td>
            <td>{{ $dispositivo-> tipo}}</td>
            <td>{{ $dispositivo-> nombre}}</td>
            <td>{{ $dispositivo-> marca}}</td>
            <td>{{ $dispositivo-> modelo}}</td>
            <td>
                <form action="{{ route('dispositivo.destroy', $dispositivo->id) }}" method="POST">
                <a href="/dispositivo/{{ $dispositivo-> id }}/edit" class="btn btn-info">Editar</a>
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
            <th>Codigo dispositivo</th>
            <th>Tipo</th>
            <th>Codigo categoria</th>
            <th>Marca</th>
            <th>Modelo</th>
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
        $('#example').DataTable();
    } );
    </script>
@stop
