@extends('layouts.app')

@section('title', 'App' . " " . $app->name)

@section('content')
<div class="container  mt-3">

@if(session()->has('succes'))
<div class="alert alert-success">
    {{ session()->get('succes') }}
</div>
@endif

    <h1 class="text-center mb-4">{{$app->name}}</h1>
    <img class="w-100" src="/storage/{{ $app->url_image}}">

    <div class="description">
        <h2 class="my-3 text-primary">Description</h2>
        {{$app->description}}
    </div>
    
    <br>

    <p><span class="font-weight-bold text-primary">Category: </span>{{$app->category}}</p>
    <p><span class="font-weight-bold text-primary">Version: </span>{{$app->version}}</p>
    <p><span class="font-weight-bold text-primary">Price: </span>{{$app->price}}</p>

    @if(auth()->user()->type == 'developer')
    <div class="row">
        <div class="col d-flex justify-content-between">
            <form action="{{route('app.destroy', $app)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Delete app</button>
                <a class="btn btn-dark" href="{{route('app.edit', $app)}}">Edit App</a>
                @endif
            </form>
        </div>
    </div>
    <div class="container d-flex justify-content-end">
    <a class="btn btn-secondary mt-5" href="{{route('app.index')}}">Back to Apps</a>
    </div>
</div>
@endsection
