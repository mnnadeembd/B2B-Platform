@extends('layouts.app')

@section('content')

<h3>Products</h3>

<a href="/products/create" class="btn btn-primary mb-3">Add Product</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Action</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="/products/{{ $product->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

            <form action="/products/{{ $product->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection