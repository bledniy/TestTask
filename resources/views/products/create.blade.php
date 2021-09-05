@extends('layout.base')

@section('jumbotron')
    <h1>Add new product</h1>
@endsection
@section('content')
    <div class="col-md-6">
        @include('partials.errors')
        <form action="/products" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" id="slug" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea  name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
@endsection

