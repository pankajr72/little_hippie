@extends('layouts.main')

@section('title','Add New Product')

@section('content')
    
<br><br>
    <div class="card">
        <div class="card-header">
            Add New Product
        </div>
        <div class="card-body">
            <form action="{{route('products.store')}}" method="post">
            @csrf 

                <div class="form-group">
                    <label for="">Category :</label>
                    <select name="category_id" class="form-control">
                        @foreach($productCategories as $productCategory)
                            <option value="{{ $productCategory->id }}">{{ $productCategory->category }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Product Name :</label>
                    <input type="text" name="p_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Product Description :</label>
                    <textarea name="p_desc" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Product Price :</label>
                    <input type="number" name="p_price" class="form-control">
                </div>

                <input type="submit" value="Add" class="btn btn-success btn-block">

            </form>
        </div>
    </div>

@endsection