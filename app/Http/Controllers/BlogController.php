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
        $blogprev = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $blognext = Blog::where('id', '>', $blog->id)->orderBy('id')->first();
        if($blog) {
            return view('blog')->with('blog', $blog)->with('blogprev', $blogprev)->with('blognext', $blognext);
        } else {
            return redirect()->route('blogs');
        }
    }
}
