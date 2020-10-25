@extends('layouts.templ')

@section('title',"$product->p_name")

@section('content')

    @include('layouts.header')

    <!-- Single Product -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{ $product->productImages->first()->img }}" id="product-img">

                <div class="small-img-row">
                @foreach($product->productImages as $productImage)
                    <div class="small-img-col">
                        <img src="{{ $productImage->img }}" width="100%" class="small-img">                       
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-2">
                <p>Home / {{ $product->productCategory->category }}</p>
                <h1>{{ $product->p_name}}</h1>
                <h4>Rs. {{ $product->p_price }}</h4>
                <form action="{{ route('addtocart',$product->id) }}" method="post" style="display:inline-block; margin:0;padding:0">          
                @csrf          
                    <select name="size" id="">
                        <option value="">Select Size</option>
                        <option value="XXL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="S">S</option>
                    </select>
                    <input type="number" name="qty" value="1" class="">
                    <button type="submit" class="btn badd">Add To Cart</button>
                </form>
                <br><br>
                <h3>Product Details <i class="fa fa-indent"></i> </h3><br>
                <p>
                {{ $product->p_desc}}
                </p>
            </div>
        </div>
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View more</p>
        </div>
    </div>

    <div class="small-container">
        
        <div class="row">            
            <div class="col-4">
                <img src="{{ URL::asset('images/product-10.jpg')}}" alt="">
                <h4>Sports Shoes</h4>
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>

                <p>$99.99</p>
            </div>
            <div class="col-4">
                <img src="{{ URL::asset('images/product-11.jpg')}}" alt="">
                <h4>Casual Shoes</h4>
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>

                <p>$19.99</p>
            </div>
            <div class="col-4">
                <img src="{{ URL::asset('images/product-12.jpg')}}" alt="">
                <h4>Track Pants</h4>
                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>

                <p>$79.99</p>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

<script>
        var productImg = document.getElementById("product-img");
        var smallImg = document.getElementsByClassName("small-img");

        smallImg[0].onclick = function()
        {
            productImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function()
        {
            productImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function()
        {
            productImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function()
        {
            productImg.src = smallImg[3].src;
        }

    </script>


@endsection