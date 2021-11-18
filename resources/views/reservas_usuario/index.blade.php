@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Dispositivos reservados</h1>
@stop

@section('content')
<div class="container">
<table id="example" class="table table-striped text-center" style="width:100%">
    <thead>
        <tr>
            {{-- <th>Id</th> --}}
            <th>Fecha reservada</th>
            <th>Codigo</th>
            <th>Tipo</th>
            <th>Id usuarios</th>
            <th>Nombre</th>
            <th>Correo</th>
            {{-- <th>Acciones</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($dispositivosReservados as $dispositivoReservado)
        <tr>
            <td>{{ $dispositivoReservado-> fecha}}</td>
            <td>{{ $dispositivoReservado-> codigo}}</td>
            <td>{{ $dispositivoReservado-> tipo}}</td>
            <td>{{ $dispositivoReservado-> user_id}}</td>
            <td>{{ $dispositivoReservado-> name}}</td>
            <td>{{ $dispositivoReservado-> email}}</td>
   {{--          <td>
                <form action="{{ route('reservas_usuario.destroy', $dispositivoReservado->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            {{-- <th>Id</th> --}}
            <th>Fecha reservada</th>
            <th>Codigo</th>
            <th>Tipo</th>
            <th>Id usuarios</th>
            <th>Nombre</th>
            <th>Correo</th>
            {{-- <th>Acciones</th> --}}
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
