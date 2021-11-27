<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\homeslider;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = homeslider::all();
        $data['products'] = Product::offset(0)->limit(2)->get();
        $data['blogs'] = Blog::offset(0)->limit(3)->get();
        return view('home')->with($data);
    }
}
