<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Publisher;
use App\Models\Category;

class ProductController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        $publishers = Publisher::all();
        $categories = Category::all();
       
        return view('client.shop',compact('products','publishers','categories'));
    }

    public function shopByPublisher($id)
    {
        $products = Product::where('publisher_id', $id)->get();
        $publishers = Publisher::all();
        $categories = Category::all();
        return view('client.shop', compact('products', 'publishers', 'categories'));
    }

    public function shopByCategory($id)
    {
        $products = Product::where('category_id', $id)->get();
        $publishers = Publisher::all();
        $categories = Category::all();
        return view('client.shop', compact('products', 'publishers', 'categories'));
    }

    public function shopdetail($id)
    {
        // Fetch the shop or product details from the database using the provided ID
        $shopDetail =  Product::find($id);


        $publisher = Publisher::find($shopDetail->publisher_id);
        $publisherName = $publisher ? $publisher->name : 'Unknown Publisher';
    
        // Check if the shop or product exists
        if (!$shopDetail) {
            return redirect()->back()->with('error', 'Shop or product not found.');
        }
    
        // Return the view with the shop or product details using compact    
        return view('client.shopdetail', compact('shopDetail','publisherName'));
    }
    

}