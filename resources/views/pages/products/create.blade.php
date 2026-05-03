@extends('layouts.app')

@section('content')

<h3>Add Product</h3>

<form method="POST" action="/products">
    @csrf

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" class="form-control">
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control">
    </div>

    <button class="btn btn-success">Save</button>
</form>

@endsection