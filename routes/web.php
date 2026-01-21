<?php

use Illuminate\Support\Facades\Route;

// الصفحة الرئيسية
Route::get('/', function () {
    return view('welcome');
});

// صفحة من نحن
Route::get('/about', function () {
    return view('about');
});

// صفحة الاتصال
Route::get('/contact', function () {
    return view('contact');
});

// صفحة المجموعة
Route::get('/collection', function () {
    return view('collection');
});
use App\Models\Product;

Route::get('/', function () {
    // Only pass the first 3 products for the home page featured section
    $featured = Product::take(3)->get();
    return view('welcome', ['featuredProducts' => $featured]);
});

Route::get('/collection', function () {
    // Pass all products to the collection page
    $allProducts = Product::all();
    return view('collection', ['products' => $allProducts]);
});