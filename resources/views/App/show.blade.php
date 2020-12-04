@extends('layouts.app')

@section('title', 'App' . " " . $app->name)

@section('content')
    <div class="container  mt-3">

@if(session()->has('succes'))
<div class="alert alert-success">
    {{ session()->get('succes') }}
</div>
@endif
    <h1>Bienvenido a la aplicación {{$app->name}}</h1>
    <div class="row">
        <div class="col d-flex justify-content-between">
        <a class="btn btn-secondary" href="{{route('app.index')}}">Volver a Apps</a>
        <a class="btn btn-secondary" href="{{route('app.edit', $app)}}">Editar App</a>
        </div>
    </div>
    <img class="img-thumbnail" src="{{asset('/resource/img'.$app->image)}}">
    <p><strong>Categoria: </strong>{{$app->category}}</p>
    <p>Descripcion: {{$app->description}}</p>
    <p>Version: {{$app->version}}</p>
    <p>Precio: $ {{$app->price}}</p>
    <br>
    <form action="{{route('app.destroy', $app)}}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">Eliminar app</button>
    </form>
    </div>
@endsection
