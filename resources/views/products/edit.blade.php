@extends('layouts.main')

@section('title','Edit Product')

@section('content')
    
<br><br>
    <div class="card">
        <div class="card-header">
            Edit Product
        </div>
        <div class="card-body">
            <form action="{{route('products.update',$product->id)}}" method="post">
            @csrf 
            @method('PUT')
                <div class="form-group">
                    <label for="">Category :</label>
                    <select name="category_id" class="form-control">
                        <option value="{{ $product->category_id }}">{{ $product->productCategory->category }}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Product Name :</label>
                    <input type="text" value="{{ $product->p_name}}" name="p_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Product Description :</label>
                    <textarea name="p_desc" class="form-control">{{ $product->p_desc }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Product Price :</label>
                    <input type="number" value="{{ $product->p_price }}" name="p_price" class="form-control">
                </div>

                <input type="submit" value="Update" class="btn btn-success btn-block">

            </form>
        </div>
    </div>

@endsection