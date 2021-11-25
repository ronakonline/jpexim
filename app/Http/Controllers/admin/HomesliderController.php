<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\homeslider;
use Illuminate\Support\Facades\Storage;

class HomesliderController extends Controller
{
    public function create(){

        $images = homeslider::all();

        return view('admin.sitesettings.homeslider')->with('images',$images);
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/home_slider');
        $image->move($destinationPath, $input['imagename']);
        $path = Storage::url('uploads/home_slider/'.$input['imagename']);

        $homeslider = new homeslider;
        $homeslider->image = $input['imagename'];
        $homeslider->path = $path;
        $homeslider->save();

        return back()->with('success', 'Image Upload successful');

    }

    public function destroy($id){

        $homeslider = homeslider::find($id);
        $image_path = public_path().'/uploads/home_slider/'.$homeslider->image;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $homeslider->delete();
        return back()->with('success', 'Image deleted successfully');
    }
}
