@extends('adminlte::page')

@section('content_header')
    <h1>Añadir dispositivo</h1>
@stop

@section('content')
    <form action="/reserva" method="POST">
      @csrf
      <div class="mb-3">
          <label for="" class="form-label">Fecha</label>
          <input type="date" id="fecha" name="fecha" type="text" class="form-control">
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Cedula</label>
          <input type="number" id="cedula" name="cedula" type="text" class="form-control">
      </div>
      {{-- <div class="mb-3">
          <label for="" class="form-label">Id dispositivo</label>
          <input disabled id="id_dispositivos" name="id_dispositivos" type="text" class="form-control" value="{{ $dispositivo-> id }}">
      </div> --}}
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
@stop