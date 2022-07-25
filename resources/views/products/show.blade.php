@extends('layouts.app')
@section('title')
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back</a>
        <div class="card w-50 mt-2">
            <div class="card-body">
                <h2 class="card-title">{{$product['name']}}</h2>
                <h2 class="card-title">{{$product['price']}}</h2>
                <h2 class="card-title">{{$product['qt']}}</h2>
            </div>
        </div>
        <div style="display: flex">
        <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-success" style="margin-top: 10px">Edit</a>
        <form action="{{ route('products.destroy', $product['id']) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="margin-top: 10px;margin-left: 5px">Delete</button>
        </form>
        </div>
    </div>
@endsection
