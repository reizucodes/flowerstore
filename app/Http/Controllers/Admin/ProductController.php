<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.products.index')->with('products', $products);
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
        //
        try {
            Product::create([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'status' => 1, #default status is active
            ]);
            return redirect()->back()->with('success', 'Product added.');
        } catch (Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::find($id);
        return view('admin.products.show')->with('product', $product);
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
        $product = Product::find($id);
        #return $product->status;
        #return $request->status;
        try {
            //this is for product status change
            if ($request->update == "statusChange") {
                $product->status = ($request->input('status'));
                $product->update();
                return back()->with('success', "Status Updated");
            } else {
                //if quantity is 0, disable product
                if ($request->quantity == 0) {
                    $product->update([
                        'product_name' => $request->product_name,
                        'product_description' => $request->product_description,
                        'price' => $request->price,
                        'quantity' => $request->quantity,
                        'status' => 0,
                    ]);
                } else {
                    $product->update([
                        'product_name' => $request->product_name,
                        'product_description' => $request->product_description,
                        'price' => $request->price,
                        'quantity' => $request->quantity,
                    ]);
                }
                return back()->with('success', 'Product updated.');
            }
        } catch (Exception $exception) {
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return back()->with('success', 'Product deleted.');
    }
}
