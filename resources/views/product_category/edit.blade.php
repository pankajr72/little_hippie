@extends('layouts.main')

@section('title','Edit Product')

@section('content')
    
<br><br>
    <div class="card">
        <div class="card-header">
            Edit Product Category
        </div>
        <div class="card-body">
            <form action="{{ route('productscategory.update',$productCategory->id) }}" method="post">
            @csrf 
            @method('PUT')

                <div class="form-group">
                    <label for="">Product Category :</label>
                    <input type="text" value="{{ $productCategory->category }}" name="category" class="form-control">
                </div>
                <br>
                <input type="submit" value="Add" class="btn btn-success btn-block">
                

            </form>
        </div>
    </div>

@endsection