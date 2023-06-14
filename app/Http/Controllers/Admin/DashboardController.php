<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.dashboard')->with('products', $products);
    }
}
