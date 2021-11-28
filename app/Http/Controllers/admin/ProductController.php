<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Crypt;
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
            'price' => 'required||numeric',
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

    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        $product = Product::find($id);
        if(!$product){
            abort(404);
        }else{

        $productimages = $product->images()->get();
        foreach ($productimages as $image) {
            unlink(public_path('/uploads/'.$image->image));
        }

        $product->delete();
        return back()->with('success', 'Product deleted successful');
        }
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $product = Product::find($id);
        if(!$product){
            abort(404);
        }else{
            return view('admin.products.edit_product', compact('product'));
        }
    }

    public function update(Request $request, $id)
    {
        $id = Crypt::decrypt($id);
        $product = Product::find($id);
        if(!$product){
            abort(404);
        }else{
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'price' => 'required||numeric',
            ]);

            $product->name = $request->title;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->save();

            return back()->with('success', 'Product updated successful');
        }
    }
}
