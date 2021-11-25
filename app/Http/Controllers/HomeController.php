<?php

namespace App\Http\Controllers;

use App\Models\homeslider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = homeslider::all();
        return view('home')->with($data);
    }
}
