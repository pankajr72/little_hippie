@extends('layouts.main')

@section('title','Products')

@section('content')
    <br>
    <a href="{{ route('products.create') }}" class="btn btn-primary btn-block">Add Product</a><br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><img src="{{ $product->productImages->first() ? $product->productImages->first()->img : ''}}" width="80px"></td>
                    <td>{{ $product->p_name }}</td>
                    <td>{{ $product->p_desc }}</td>
                    <td>{{ $product->p_price }}</td>
                    <td>{{ $product->productCategory->category }}</td>
                    <td>
                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-light">Edit</a>
                            <form style="display:inline-block;" action="{{route('products.destroy',$product->id)}}" method="post">
                            @csrf 
                            @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection