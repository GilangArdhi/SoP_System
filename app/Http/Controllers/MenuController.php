<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index(){
        $pengguna = Auth::user();
        $data = DB::table('menus')->get();
        return view('cashier', ['data' => $data]);
    }
}
