@extends('layouts.app')

@section('title', 'Apps')

@section('content')
<div class="container">
    <div class="row align-items-center mt-3">
        <div class="col">
            <h1 class="text-center text-uppercase mt5 mb-4">Latest Apps</h1>
        </div>
        @if(auth()->user()->type == 'developer')
        <div class="col-md-auto">
            <a class="btn btn-secondary" href="{{route('app.create')}}">Create your app</a>
        </div>
        @endif
    </div>

    <div class="containter">
        <div class="row">    
             @foreach ($apps as $app)
             <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="/storage/{{ $app->url_image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-center"><a href="{{route('app.show', $app->id)}}">{{$app->name}}</a></h5>
                        <p class="card-text"> {{ Str::words( $app->description , 20) }}</p>
                        <p> <span class="font-weight-bold">Price: </span>${{$app->price}}</p>
                        <a href="{{route('app.show', $app->id)}}" class="btn btn-primary d-block">Go app</a>
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

