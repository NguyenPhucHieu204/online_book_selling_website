<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;

class IndexController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        // Lấy 4 sản phẩm mới nhất
        $new_products = Product::orderBy('created_at', 'desc')->take(4)->get(); 
        // Lấy 4 sản phẩm ngẫu nhiên
        $hot_products = Product::inRandomOrder()->take(4)->get(); 

        return view('client.index', compact('new_products', 'hot_products', 'blogs'));
    }
}
