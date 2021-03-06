@extends('layout.base')

@section('jumbotron')
    <h1>Products</h1>
    <p>Here you can choose something cool!!!</p>
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
                </div>
            </div>
        </div>
    @endforeach

@endsection
