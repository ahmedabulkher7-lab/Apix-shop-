<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/cart', function () {
    return view('Store.cart');
})->name('cart');