@extends('layouts.app')
@section('title')
@endsection
@section('content')
    <x-nav-bar  />

    <div class="container">
        <a href="{{route("products.create")}}" class="btn btn-primary mt-3">Create New Product</a>
        @if(session('success'))
            <div class="alert alert-success" style="margin-top: 13px">{{ session('success') }}</div>
        @endif
        <h2>Product List: {{count($products)}} </h2>
        @foreach($products as $product)
            <div class="card w-50">
                <div class="card-body">
                    <h2 class="card-title"> Name` {{ $product['name'] }}</h2>
                    <h2 class="card-title">Price` {{ $product['price'] }}</h2>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-outline-info">Options</a>
                </div>
            </div>
        @endforeach
    </div>


@endsection

