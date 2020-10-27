@extends('layouts.main')

@section('title','Products Images')

@section('content')
    <br>
    <a href="{{ route('productsimages.create') }}" class="btn btn-primary btn-block">Add Product Image</a><br>
    <table class="table dtable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Image Title</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productImages as $productImage)
                <tr>
                    <td>{{ $productImage->id }}</td>
                    <td>{{ $productImage->product->p_name }}</td>
                    <td>{{ $productImage->img_title }}</td>
                    <td><img src="{{ $productImage->img}}" width="100px"></td>
                    <td>
                        <a href="{{route('productsimages.edit',$productImage->id)}}" class="ddbtn">Edit</a>
                            <form style="display:inline-block;" action="{{route('productsimages.destroy',$productImage->id)}}" method="post">
                            @csrf 
                            @method('DELETE')

                                <button type="submit" class="ddbtn">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection