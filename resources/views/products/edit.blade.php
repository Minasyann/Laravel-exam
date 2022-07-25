@extends('layouts.app')
@section('title')
    Update Product
@endsection
@section('content')

    <div class="container">
        <a href="{{ route("products.index") }}" class="btn btn-primary mt-2">Back</a>


        <form action="{{ route("products.update", $product['id']) }}" class="w-50" method="post">
            @csrf
            @method("patch")

            <div class="mb-3">
                <label for="name" class="form-label">New Name</label>
                <input value="{{ $product['name'] }}" type="text" class="form-control" name="name" placeholder="New Name" id="name">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">New Price</label>
                <input value="{{ $product['price'] }}" type="text" class="form-control" name="price" placeholder="New Price" id="price">
            </div>

            <div class="mb-3">
                <label for="qt" class="form-label">New Quantity</label>
                <input value="{{ $product['qt'] }}" type="text" class="form-control" name="qt" placeholder="New Quantity" id="qt">
            </div>


            <button  class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
