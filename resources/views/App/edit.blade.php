@extends('layouts.app')

@section('title', 'Crear app')

@section('content')
<div class="container  mt-3">
<h2 class="text-center mb-5">Edit your App</h2>
<div class="row justify-content-center mt-5">

    <div class="col-md-8">
        <form action="{{route('app.update', $app)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

<!--                <div class="form-group">
                    <label>User ID</label>
                    <input class="form-control" type="number" name="user_id" value="{{old('user_id',$app->user_id)}}" >
                </div>
-->
                <div class="form-group">
                    <label>Version</label>
                    <input class="form-control" type="text" name="version" value="{{old('version',$app->version)}}" >
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" type="number" name="price" value="{{old('price',$app->price)}}">
                </div>
                <div class="form-group">
                    <label>Image</label>
                        <input class="form-control" type="file" name="url_image" value="{{$app->url_image}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" rows="6">{{$app->description}}</textarea>
                </div>

            <button class="btn btn-primary" type="submit">Update app</button>
        </form>
        </div>
    </div>
</div>
@endsection

