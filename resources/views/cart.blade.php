@extends('layouts.templ')

@section('title','Cart')

@section('content')

    @include('layouts.header')

    
    <div class="small-container cart-page">

        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            @php 
                    $total = 0;
                    $subtotal = 0;
            @endphp
            @if(session('cart'))

            @foreach(session('cart') as $id => $product)

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="{{ $product['img'] }}">
                        <div>
                            <p>{{ $product['p_name'] }}</p>
                            <small>Price: Rs. {{ $product['p_price'] }}</small><br>
                            <small>Size: {{ $product['size'] }}</small><br>
                            <a href="{{ route('removefromcart',$id) }}">Remove</a>
                        </div>
                    </div>
                </td>
                <td>{{ $product['qty'] }}</td>
                <td>Rs. {{ $product['p_price'] * $product['qty'] }}</td>
            </tr>

            @php 
                $subtotal += $product['p_price'] * $product['qty'];
            @endphp

            @endforeach
            @endif
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rs. @php echo $subtotal @endphp</td>
                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td>Rs. 40</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rs. @php $total = $subtotal+40;
                            echo $total; @endphp</td>
                </tr>
                <tr>
                    <td colspan=2>
                        <form action="{{ route('pay') }}" method="post">
                        @csrf
                            <input type="hidden" name='amount' value="{{ $total }}">
                            <button type="submit" class="btn bpay">Proceed To Pay</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>

@endsection