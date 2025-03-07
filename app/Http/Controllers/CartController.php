<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderMenu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function acashPayment(Request $request) {
        $cart = $request->cart;
    
        // Simpan order ke database
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => array_sum(array_column($cart, 'price')),
            'status' => 'paid', // Langsung paid karena cash
            'payment_method' => 'cash'
        ]);
    
        foreach ($cart as $item) {
            OrderMenu::create([
                'order_id' => $order->id,
                'product_name' => $item['name'],
                'price' => $item['price']
            ]);
        }
    
        return response()->json(['success' => true, 'order_id' => $order->id]);
    }
    
}
