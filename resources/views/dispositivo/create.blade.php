@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Añadir dispositivo</h1>
@stop

@section('content')
    <form action="/dispositivo" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo dispositivo</label>
            <input type="text" id="codigo" name="codigo" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tipo</label>
            <input type="text" id="tipo" name="tipo" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Codigo categoria</label>
            <select name="categoria" class="form-control">
                <option value="" selected disabled>Seleccione una categoría...</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Marca</label>
            <input type="text" id="marca" name="marca" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modelo</label>
            <input type="text" id="modelo" name="modelo" type="text" class="form-control">
        </div>
        <a href="/dispositivo" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
@stop