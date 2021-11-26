<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs_list')->with('blogs', $blogs);
    }

    public function view($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if($blog) {
            return view('blog')->with('blog', $blog);
        } else {
            return redirect()->route('blogs');
        }
    }
}
