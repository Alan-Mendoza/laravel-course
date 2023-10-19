@extends('layouts.master')
@section('content')
<h1>Lista de productos</h1>
<a href="{{ route('products.create') }}" class="btn btn-success">Crear un Producto</a>
@empty($products)
    <div class="alert alert-warning">
        La lista esta vacia
    </div>
@else
<div class="table-responsive">
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->status }}</td>
                    <td>
                        <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-link">Ver</a>
                        <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-link">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endempty
@endsection
