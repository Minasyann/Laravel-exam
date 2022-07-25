@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <x-nav-bar />

    <a href="{{route("products.index")}}" class="btn btn-primary" style="margin-left: 10px;margin-top: 10px">Your Product List</a>
@endsection
