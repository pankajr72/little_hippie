@extends('layouts.main')

@section('title','Products')

@section('content')
    <br>
    <a href="{{ route('productscategory.create') }}" class="btn btn-primary btn-block">Add Product Category</a><br>
    <table class="table dtable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Category</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productCategories as $productCategory)
                <tr>
                    <td>{{ $productCategory->id }}</td>
                    <td>{{ $productCategory->category }}</td>
                    <td>
                        <a href="{{route('productscategory.edit',$productCategory->id)}}" class="ddbtn">Edit</a>
                        <form style="display:inline-block;" action="{{route('productscategory.destroy',$productCategory->id)}}" method="post">
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