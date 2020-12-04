@extends('layouts.app')

@section('title', 'Apps')

@section('content')
<div class="container">
    <div class="row align-items-center mt-3">
        <div class="col">
            <h1>Ultimas aplicaciones:</h1>
        </div>
        <div class="col-md-auto">
            <a class="btn btn-secondary" href="{{route('app.create')}}">Crea tu app</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <ul class="list-group">
            @foreach ($apps as $app)
            <li class="list-group-item list-group-item-action">
                <a href="{{route('app.show', $app->id)}}">{{$app->name}}</a>
            </li>       
            @endforeach
        </ul>
    </div>
    <div class="row justify-content-end pagination">
            {{$apps->links()}}
    </div>
</div>
@endsection 
