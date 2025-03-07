<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use App\Models\Order;

class MidtransController extends Controller
{
    public function __construct()
    {
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function createTransaction(Request $request)
    {
        try {
            // 🔹 Validasi request tetap diperlukan
            $validated = $request->validate([
                'total_price' => 'required|numeric|min:1000'
            ]);
    
            // 🔹 Gunakan data dummy untuk user
            $dummyUser = [
                'id' => 999, // ID user fiktif
                'name' => 'Test User',
                'email' => 'testuser@example.com'
            ];
    
            $order = Order::create([
                'user_id' => $dummyUser['id'],
                // 'user_id' => auth()->id(),
                'total_price' => $validated['total_price'],
                'status' => 'pending'
            ]);
    
            $transaction_details = [
                'order_id' => $order->id,
                'gross_amount' => $order->total_price
            ];
    
            $customer_details = [
                // 'first_name' => auth()->user()->name,
                // 'email' => auth()->user()->email,
                // 'phone' => '08123456789'
                'first_name' => $dummyUser['name'],
                'email' => $dummyUser['email'],
                'phone' => '08123456789' // Dummy phone number
            ];
    
            $payload = [
                'transaction_details' => $transaction_details,
                'customer_details' => $customer_details
            ];
    
            $snapToken = Snap::getSnapToken($payload);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal membuat transaksi', 'message' => $e->getMessage()], 500);
        }
    }

    public function notificationHandler(Request $request)
    {
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            $order = Order::where('id', $request->order_id)->first();

            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                $order->update(['status' => 'paid']);
            } elseif ($request->transaction_status == 'cancel' || $request->transaction_status == 'expire') {
                $order->update(['status' => 'failed']);
            }
        }

        return response()->json(['message' => 'OK']);
    }
}
