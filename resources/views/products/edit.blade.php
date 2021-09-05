@extends('layout.base')

@section('jumbotron')
    <h1>Update product</h1>
@endsection
@section('content')
    <div class="col-md-6">
        <div class="alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>

        <form action="/products/{{$product->slug}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{$product->title}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" id="slug" value="{{$product->slug}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" value="{{$product->price}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea  name="description" id="description"  class="form-control">{{$product->description}}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
@endsection

