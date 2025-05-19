<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminDashboard(){
        $pengguna = Auth::user();
        return view('dashboard');
    }

    public function getChartData(){
        $data = Order::selectRaw('MONTH(created_at) as month, COUNT(*) as jumlah_pembeli, SUM(total_price) as total_pendapatan')
                        ->groupBy('month')
                        ->orderBy('month')
                        ->get();
        return response()->json($data);
    }

    public function getWeeklyData(){
        $data = Order::selectRaw('DATE(created_at) as tanggal, COUNT(*) as jumlah_pembeli, SUM(total_price) as total_pendapatan')
                ->where('created_at', '>=', now()->subDays(6)) // 7 hari terakhir termasuk hari ini
                ->groupBy('tanggal')
                ->orderBy('tanggal')
                ->get();
        return response()->json($data);
    }

        
}
