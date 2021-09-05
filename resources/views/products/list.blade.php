@extends('layout.base')

@section('jumbotron')
    <h1>Products-list</h1>
    <p>Here you can use CRUD!!!</p>
    <a href="/products/create" class="btn btn-success">Add Product</a>
@endsection

@section('content')
    @foreach($products as $product)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                    <p>{{$product->title}}</p>
                    <p class="card-text">Price: <strong>{{$product->price}}</strong></p>
                    <p class="card-text">Description: {{$product->description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/products/{{$product->slug}}/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <a href="/{{$product->slug}}" class="btn btn-sm btn-outline-secondary">View</a>
                            <form action="/products/{{$product->slug}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-outline-secondary">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

