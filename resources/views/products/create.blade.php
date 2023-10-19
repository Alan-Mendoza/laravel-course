@extends('layouts.master')
@section('content')
<h1>Crear un producto</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-row">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" required>
    </div>
    <div class="form-row">
        <label for="description">Description</label>
        <input class="form-control" type="text" name="description" id="description" required>
    </div>
    <div class="form-row">
        <label for="price">Price</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" id="price" required>
    </div>
    <div class="form-row">
        <label for="stock">Stock</label>
        <input class="form-control" type="number" min="0" name="stock" id="stock" required>
    </div>
    <div class="form-row">
        <label for="price">Status</label>
        <select name="status" id="status" class="custom-select" required>
            <option value="" selected>Select...</option>
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
        </select>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">Crear Producto</button>
    </div>
</form>
@endsection
