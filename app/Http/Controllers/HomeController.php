<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\homeslider;
use App\Models\Product;
use Illuminate\Http\Request;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class HomeController extends Controller
{
    public function index()
    {
        $visitlog = VisitLog::save();
        $data['sliders'] = homeslider::all();
        $data['products'] = Product::offset(0)->limit(2)->get();
        $data['blogs'] = Blog::orderBy('id', 'desc')->offset(0)->limit(3)->get();
        return view('home')->with($data);
    }
}
