<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->get();
        return view('Store.products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('Store.product', compact('product'));
    }
}
