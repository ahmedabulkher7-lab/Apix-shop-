<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
   public function index()
   {
              $categories =Category::with('products')->limit(4)->get();;
              $products =Product::limit(4)->get();
        return view('welcome', compact('categories', 'products'));
   }
}
