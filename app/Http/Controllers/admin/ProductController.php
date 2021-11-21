<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
       $products = Product::all();
        return view('admin.all_products', compact('products'));
    }

    public function create()
    {
        return view('admin.add_product');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required||integer'
        ]);

        $slug = Str::slug($request->title, '-');


        $product = new Product();
        $product->name = $request->title;
        $product->slug = $slug;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return back()->with('success', 'Product inserted successful');

    }
}
