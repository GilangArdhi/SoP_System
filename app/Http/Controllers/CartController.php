<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderMenu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function paymentTransaction(Request $request)
    {
        // dd($request->all());
        try {
            $cart = $request->input('cart');
            if (empty($cart)) {
                return response()->json(['error' => 'Keranjang kosong!'], 400);
            }

            // Simpan ke database
            $order = Order::create([
                'user_id' => 1, // Data dummy untuk debugging
                'total_price' => array_sum(array_column($cart, 'price')),
                'payment_method' => "cash",
                'status' => 'paid'
            ]);

            return response()->json([
                'success' => true,
                'order_id' => $order->id
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan saat memproses pembayaran',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    
}
