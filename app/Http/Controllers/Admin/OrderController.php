<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::join('product', 'order.product_id', '=', 'product.id')
            ->join('users', 'order.user_id', '=', 'users.id')
            ->select('order.*', 'product.product_name', 'users.first_name', 'users.last_name')
            ->get();
        #return $orders;
        return view('admin.orders.index')->with('orders', $orders);
    }
}
