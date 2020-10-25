@extends('layouts.main')

@section('title','Add New Product Image')

@section('content')
    
<br><br>
    <div class="card">
        <div class="card-header">
            Add New Product Image
        </div>
        <div class="card-body">
            <form action="{{route('productsimages.store')}}" method="post" enctype="multipart/form-data">
            @csrf 

                
                <div class="form-group">
                    <label for="">Select Product</label>
                    <select name="product_id" class="form-control">
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->p_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Image :</label>
                    <input type="file" name="img" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Image Title</label>
                    <input type="text" name="img_title" class="form-control">
                </div>

                <input type="submit" value="Add" class="btn btn-success btn-block">

            </form>
        </div>
    </div>

@endsection