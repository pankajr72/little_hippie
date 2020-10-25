@extends('layouts.main')

@section('title','Add New Product')

@section('content')
    
<br><br>
    <div class="card">
        <div class="card-header">
            Add New Product Category
        </div>
        <div class="card-body">
            <form action="{{route('productscategory.store')}}" method="post">
            @csrf 

                <div class="form-group">
                    <label for="">Product Category :</label>
                    <input type="text" name="category" class="form-control">
                </div>
                <br>
                <input type="submit" value="Add" class="btn btn-success btn-block">
                

            </form>
        </div>
    </div>

@endsection