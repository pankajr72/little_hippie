<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index',['products' => $products]);
    }

    public function show()
    {
        $products = Product::all();
        return view('products',['products' => $products]);
    }

    public function details($slug)
    {
        $product = Product::where('slug', '=' , $slug)->first();
        return view('product-details',['product' => $product]);
    }

    public function addToCart($id,Request $request)
    {
        $product = Product::find($id);

        $cart = session()->get('cart');

        if(!$cart)
        {
            $cart = [
                $product->id => [
                    'p_name' => $product->p_name,
                    'p_price' => $product->p_price,
                    'img' => $product->productImages->first()->img,
                    'size' => $request->size,
                    'qty' => $request->qty
                ]
            ];
            session()->put('cart',$cart);
        }

        else if(isset($cart[$product->id])){
            $cart[$product->id]['qty']++;
        }

        else{
            $cart[$product->id] =[
                    'p_name' => $product->p_name,
                    'p_price' => $product->p_price,
                    'img' => $product->productImages->first()->img,
                    'size' => $request->size,
                    'qty' => $request->qty
            ];

            session()->put('cart',$cart);
        }
       
        return redirect()->route('cart')->with('success','Added To Cart');
    }

    public function cart()
    {
        return view('cart');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart',$cart);
        }

        return redirect()->back()->with('success','Removed From Cart');
    }
}
