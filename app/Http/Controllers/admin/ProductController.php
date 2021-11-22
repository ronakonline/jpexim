<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
       $products = Product::all();
        return view('admin.products.all_products', compact('products'));
    }

    public function create()
    {
        return view('admin.products.add_product');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required||integer',
            'images' =>  'bail|required',
            'images.*' => 'bail|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ],[
            'images.*.max' => 'Image size must be less than 4MB',
            'images.*.mimes' => 'Image type must be jpeg,png,jpg,gif,svg',
            'images.*.image' => 'Product Image must be an image',
        ]);


        $slug = Str::slug($request->title, '-');

        $product = new Product();
        $product->name = $request->title;
        $product->slug = $slug;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imageName = md5(rand(1000,10000)).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('/uploads'), $imageName);
                $product->images()->create(['image' => $imageName]);
            }
        }


        return back()->with('success', 'Product inserted successful');

    }

    public function view($slug){
        $product = Product::where('slug', $slug)->first();
        if(!$product){
            abort(404);
        }else{
            $images = ProductImage::where('product_id', $product->id)->get();
            return view('admin.products.view_product', compact('product', 'images'));
        }

    }
}
