<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user()->id;
        #i need return all orders, with user_id == $user
        $orders = Order::join('product', 'order.product_id', '=', 'product.id')
            ->where('order.user_id', $user)
            ->select('order.*', 'product.product_name')
            ->get();
        #return $orders;
        return view('user.orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Retrieve the input values from the request
        $productId = $request->input('product_id');
        $userId = $request->input('user_id');
        $orderQuantity = $request->input('order_quantity');
        $price = $request->input('price');
        $total = $price * $orderQuantity;
        //return $orderQuantity;
        //Create a new order record
        Order::create([
            'product_id' => $productId,
            'user_id' => $userId,
            'order_quantity' => $orderQuantity,
            'price' => $price,
            'total' => $total
        ]);
        //update the total items left for the product
        $product = Product::find($productId);
        $productItemsLeft = $product->quantity - $orderQuantity;
        //disable product if stocks is zero
        if ($productItemsLeft == 0) {
            $product->update([
                'quantity' => $productItemsLeft,
                'status' => 0,
            ]);
        } else {
            $product->quantity = $productItemsLeft;
            $product->update();
        }

        return back()->with('success', "Order placed.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
        #since the order is to be cancelled, the order quantity should be returned to the product's stock
        $product = Product::find($order->product_id);
        #update product quantity
        $stock = $product->quantity + $order->order_quantity;
        $product->quantity = $stock;
        $product->update();

        #delete order
        $order->delete();
        return back()->with('success', 'Order cancelled.');
    }
}
