@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Destinatarios</h1>
@stop

@section('content')
<div class="container">
    <a href="destinatario/create" class="btn btn-info mb-3">Añadir destinatario</a>
    <a href="reserva" class="btn btn-info mb-3">Reservar dispositivo</a>
<table id="example" class="table table-striped text-center" style="width:100%">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($destinatarios as $destinatario)
        <tr>
            <td>{{ $destinatario-> id}}</td>
            <td>{{ $destinatario-> nombre_destinatario}}</td>
            <td>{{ $destinatario-> apellido}}</td>
            <td>{{ $destinatario-> email}}</td>

            <td>
                <form action="{{ route('destinatario.destroy', $destinatario->id) }}" method="POST">
                <a href="/destinatario/{{ $destinatario-> id }}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                {{-- <a href="/dispositivo/{{ $destinatario-> id }}/edit" class="btn btn-info">Editar</a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
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
