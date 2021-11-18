@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1 class="text-center">Categoria</h1>
@stop

@section('content')

<form action="/categoria" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre categoria</label>
        <input type="text" id="nombre" name="nombre_categoria" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" type="text" class="form-control">
    </div>
    <a href="/categoria" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop