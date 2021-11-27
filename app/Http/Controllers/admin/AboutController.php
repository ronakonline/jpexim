<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.pages.about')->with('about', $about);
    }

    public function update(Request $request){
        $about = About::first();
    if ($about) {
        $about->description = $request->description;
        $about->save();
    }else{
        $about = new About;
        $about->description = $request->description;
        $about->save();
    }
        return redirect()->back()->with('success', 'About page updated successfully');
    }
}
