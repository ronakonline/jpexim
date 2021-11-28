<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class DashboardController extends Controller
{
    public function index()
    {
        $data['visitors'] = VisitLog::all()->count();
        $data['productscount'] = Product::all()->count();
        $data['blogscount'] = Blog::all()->count();
        return view('admin.dashboard')->with($data);
    }
}
