@extends('layouts.app')
@section('title')
    New List
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back</a>

        <form action="{{ route('products.store') }}" class="w-50" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" placeholder="Product Name" id="name">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="text" class="form-control" name="price" placeholder="Product Price" id="price">
            </div>

            <div class="mb-3">
                <label for="qt" class="form-label">Product Quantity</label>
                <input type="text" class="form-control" name="qt" placeholder="Product Quantity" id="qt">
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
