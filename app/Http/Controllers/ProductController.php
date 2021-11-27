<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products_list')->with('products', $products);
    }

    public function view($slug){
        $product = Product::where('slug', $slug)->first();
        if(!$product){
            abort(404);
        }else{
            return view('product')->with('product', $product);
        }
    }
}
