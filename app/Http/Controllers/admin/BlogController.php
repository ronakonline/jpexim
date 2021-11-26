<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    protected $img_path;

    public function __construct()
    {
        $this->img_path = public_path('/uploads/blogs');
    }

    public function add()
    {
        return view('admin.blogs.add_blog');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'author' => 'required',
            'title' => 'required|max:255|unique:blogs,title,except,id',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move($this->img_path, $image_name);
        }else{
            $image_name = 'no_image.png';
        }

        $blog = new Blog();
        $blog->slug = Str::slug($request->title, '-');
        $blog->author = $request->author;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $image_name;
        $blog->save();

        return redirect()->route('admin.blogs.add')->with('success', 'Blog added successfully');
    }
}
