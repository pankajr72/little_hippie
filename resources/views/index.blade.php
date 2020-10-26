@extends('layouts.templ')

@section('title', "Little Hippie")



@section('content')

@include('layouts.headerhero')

<!-- Featured Products -->
<br>
<div class="small-container">
    <h2 class="title">Featured Products</h2>

    <div class="row">
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
    

<!-- Testimonial -->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut nisl et odio dictum
                    viverra. Integer ornare lectus quis lorem congue, quis commodo ligula fringilla. Nullam a elit
                    id felis convallis rutrum ut ac turpis. In
                    porta eleifend lectus eget rutrum.</p>

                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <img src="images/user-1.png" alt="">
                <h3>Sean Parker</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut nisl et odio dictum
                    viverra. Integer ornare lectus quis lorem congue, quis commodo ligula fringilla. Nullam a elit
                    id felis convallis rutrum ut ac turpis. In
                    porta eleifend lectus eget rutrum.</p>

                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <img src="images/user-2.png" alt="">
                <h3>Mike Smith</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut nisl et odio dictum
                    viverra. Integer ornare lectus quis lorem congue, quis commodo ligula fringilla. Nullam a elit
                    id felis convallis rutrum ut ac turpis. In
                    porta eleifend lectus eget rutrum.</p>

                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <img src="images/user-3.png" alt="">
                <h3>Mabel Joe</h3>
            </div>
        </div>
    </div>
</div>

<!-- Brands -->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-pampers.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-comfort.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-chicco.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-johnson.png" alt="">
            </div>
            <div class="col-5">
                <img src="images/logo-metro.png" style="width: 100px !important" alt="">
            </div>
        </div>
    </div>
</div>

@endsection

