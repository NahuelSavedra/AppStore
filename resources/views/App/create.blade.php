@extends('layouts.app')

@section('title', 'Crear app')

@section('content')
<div class="container  mt-3">
    <h1>En esta pagina podras crear y subir tu aplicacion</h1>
    <form action="{{route('app.store')}}" method="POST">

        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">User Id</label>
            <div class="col-sm-10">
            <input class="form-control" type="number" name="user_id">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" name="name">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" name="category">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
            <input class="form-control" type="float" name="price">
            </div>
        </div>        
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10">
            <input class="form-control" type="text" name="url_imagen">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Enviar formulario</button>
    </form>
</div>

@endsection

