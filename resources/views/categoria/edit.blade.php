@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Editar</h1>
@stop

@section('content')

<form action="/categoria/{{ $categoria->id }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre_categoria" type="text" class="form-control" value="{{ $categoria-> nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">descripcion</label>
        <input type="text" id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $categoria-> descripcion}}">
    </div>
    <a href="/categoria" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
