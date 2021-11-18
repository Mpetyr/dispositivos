@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center">Reservar Dispositivo</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
@stop

@section('content')
<div class="container">
    <button type="button" class="btn btn-info mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Reservar
      </button>
    
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Reserve el dispositivo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/reserva" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha</label>
                        <input type="date" id="fecha" name="fecha" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Correo</label>
                        <br>
                        <select name="email" id="">
                            @foreach ($usuario as $user)
                                <option value="{{ $user->user_id }}">{{$user->email}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="number" id="cedula" name="email" type="text" class="form-control" value="{{ $usuario->id }}"> --}}
                    </div>
    {{--                                 <div class="mb-3">
                        <label for="" class="form-label">Id dispositivo</label>
                        <input id="dispositivos" name="dispositivos" type="number" class="form-control" value="{{ $dispositivo-> id }}">
                    </div> --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Codigo dispositivo</label>
                        <select name="dispositivos" class="form-control">
                            <option value="" selected disabled>Seleccione una codigo...</option>
                            @foreach ($dispositivos as $dispositivo)
                                <option value="{{$dispositivo->id}}">{{$dispositivo->codigo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>

<table id="example" class="table table-striped text-center" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Codigo dispositivo</th>
            <th>Tipo</th>
            <th>Codigo categoria</th>
            <th>Marca</th>
            <th>Modelo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dispositivos as $dispositivo)
        <tr>
            <td>{{ $dispositivo-> id}}</td>
            <td>{{ $dispositivo-> codigo}}</td>
            <td>{{ $dispositivo-> tipo}}</td>
            <td>{{ $dispositivo-> nombre_categoria}}</td>
            <td>{{ $dispositivo-> marca}}</td>
            <td>{{ $dispositivo-> modelo}}</td>
            <td>
                {{-- <a href="/reserva/create" class="btn btn-info">Reservar</a> --}}
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
        </tr>
    </tfoot>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
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
