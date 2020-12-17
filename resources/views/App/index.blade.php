@extends('layouts.app')

@section('title', 'Apps')

@section('content')
<div class="container">
    <div class="row align-items-center mt-3">
        <div class="col">
            <h1 class="text-center">Ultimas aplicaciones</h1>
        </div>
        @if(auth()->user()->type == 'developer')
        <div class="col-md-auto">
            <a class="btn btn-secondary" href="{{route('app.create')}}">Crea tu app</a>
        </div>
        @endif
    </div>

    <div class="containter">
        <div class="row row-cols-3">    
             @foreach ($apps as $app)
             <div class="col mt-3">
                <div class="card border-secondary" style="height: 25rem;">
                    <img src="{{asset('/resource/img'.$app->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-center">{{$app->name}}</h5>
                        <p class="card-text">{{$app->description}}</p>
                        <a href="{{route('app.show', $app->id)}}" class="btn btn-primary">Ver app</a>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="mt-5 justify-content-end pagination">
         <div class="w-75 m-auto"> {{$apps->onEachSide(5)->links()}} </div>
    </div>
</div>
@endsection 
