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
    <img class="img-thumbnail" src="{{asset('/resource/img'.$app->image)}}">
    <p><strong class="text-primary">Categoria: </strong>{{$app->category}}</p>
    <p><strong class="text-primary">Descripcion: </strong> {{$app->description}}</p>
    <p><strong class="text-primary">Version: </strong> {{$app->version}}</p>
    <p><strong class="text-primary">Precio: </strong> $ {{$app->price}}</p>
    <br>

    @if(auth()->user()->type == 'developer')
    <div class="row">
        <div class="col d-flex justify-content-between">
            <form action="{{route('app.destroy', $app)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Eliminar app</button>
                @endif
            </form>
            <a class="btn btn-dark" href="{{route('app.edit', $app)}}">Editar App</a>
        </div>
    </div>



        <a class="btn btn-secondary mt-5" href="{{route('app.index')}}">Volver a Apps</a>
        </div>
@endsection
