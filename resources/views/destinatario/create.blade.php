@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Añadir destinatario</h1>
@stop

@section('content')
    <form action="/destinatario" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Cedula</label>
            <input type="text" name="id" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" name="nombre_destinatario" type="text" class="form-control">
        </div>
    {{--         <div class="mb-3">
            <label for="" class="form-label">Codigo categoria</label>
            <input type="text" id="" name="" type="text" class="form-control" tabindex="3">
        </div> --}}
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input type="text" name="apellido" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Correo</label>
            <input type="text" name="email" type="text" class="form-control">
        </div>
        <a href="/destinatario" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
@stop