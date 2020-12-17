@extends('layouts.app')

@section('title', 'Crear app')

@section('content')
<div class="container  mt-3">
    <h1>Completa los campos que deseas actualizar</h1>
    <form action="{{route('app.update', $app)}}" method="POST">
            @csrf
            @method('put')

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Version</label>
                <div class="col-sm-10">
                <input class="form-control" type="text" name="name" value="{{$app->version}}" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                <input class="form-control" type="float" name="price" value="{{$app->price}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Imagen</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="url_imagen" value="{{$app->url_image}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$app->description}}</textarea>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Actualizar aplicación</button>
    </form>
</div>
@endsection

