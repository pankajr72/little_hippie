<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;   

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $params = [
            'amount' => $request->amount,
            'productinfo' => 'Test Product',
            'firstname' => 'Test',
            'email' => 'test@gmail.com',
            'phone' => '1234567890'
        ];

        $order = Indipay::prepare($params);
        return Indipay::process($order);
    }

    public function response(Request $request)
    {
        $response = Indipay::response($request);
        
        if($response['status'] === 'success')
        {
            return redirect()->route('products')->with('success','Order Placed');
        }
    }
}
