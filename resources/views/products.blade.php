@extends('layouts.templ')

@section('title', "All Products | RedStore")

@section('content')

@include('layouts.header')

<div class="small-container">
    <div class="row row-2">
        <h2>All Products</h2>
        <select name="" id="">
            <option value="">Default Sorting</option>
            <option value="">Sort By Price</option>
            <option value="">Sort By Popularity</option>
            <option value="">Sort By Rating</option>
            <option value="">Sort By Rating</option>
            <option value="">Sort By Sale</option>
        </select>
    </div>
    <div class="row float-md-left">
    @foreach($products as $product)
        <div class="col-4">
            <img src="{{ $product->productImages->first()->img }}" alt="">
            <a href="{{ '/product/'. $product->slug }}"><h4>{{ $product->p_name }}</h4></a>
            <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                    class="fa fa-star"></i><i class="fa fa-star-o"></i></div>

            <p>Rs. {{ $product->p_price }}</p>
        </div>
    @endforeach
    </div>
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
    </div>
</div>

@endsection