<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $products = Product::where('status', 1)
            ->orderBy('product_name', 'asc')
            ->get();
        return view('user.dashboard')->with('products', $products);
    }
}
