@extends('layouts.app')

@section('title', 'Crear app')

@section('content')
<div class="container  mt-3">
<h2 class="text-center mb-5">Create aplication</h2>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
            <form action="{{route('app.store')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="categoy">Categoria</label>
                <select name="category" class="form-control">
                    <option value="">-- Select --</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Enterprise">Enterprise</option>
                    <option value="Education">Education</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Social Media">Social Media</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="number" name="price">
            </div>
     
            
            <div class="form-group">
                <label for="image">Image:</label>
                <input id="image" class="form-control" type="file" name="url_image">
            </div>

            <button class="btn btn-primary" type="submit">Send</button>
            </form>
    </div>
</div>



@endsection

