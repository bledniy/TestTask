@extends('layout.base')

@section('jumbotron')
    <h1>{{$product->title}}</h1>
@endsection
@section('content')
    <div class="col-md-12">
        <h3>Price:{{$product->price}}</h3>
        <h5>Description:{{$product->description}}</h5>
    </div>
@endsection
