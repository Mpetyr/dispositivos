@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')

<form action="/destinatario/{{ $destinatario->id }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="" class="form-label">Cedula</label>
        <input type="text" name="id" type="text" class="form-control" value="{{ $destinatario-> id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="nombre" type="text" class="form-control" value="{{ $destinatario-> nombre}}">
    </div>
{{--         <div class="mb-3">
        <label for="" class="form-label">Codigo categoria</label>
        <input type="text" id="" name="" type="text" class="form-control" tabindex="3">
    </div> --}}
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" name="apellido" type="text" class="form-control" value="{{ $destinatario-> apellido}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input type="text" name="email" type="text" class="form-control" value="{{ $destinatario-> email}}">
    </div>
    <a href="/destinatario" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
