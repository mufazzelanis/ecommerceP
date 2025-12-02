@extends('admin.layouts.app')

@section('title', 'View Product')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">Back</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Slug</th>
            <td>{{ $product->slug }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $product->price }}</td>
        </tr>
    </table>
</div>
@endsection
