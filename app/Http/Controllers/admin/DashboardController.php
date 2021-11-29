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
        $data['vistorsbymonth'] = VisitLog::all()->groupBy(function ($item) {
            return $item->created_at->format('F');
        });
        //count visitorsbymonth
        $data['visitorsbymonth'] = $data['vistorsbymonth']->map(function ($item) {
            return $item->count();
        });
        //months array from visitorsbymonth
        $data['months'] = $data['visitorsbymonth']->keys()->toArray();
        //views array from visitorsbymonth
        $data['views'] = $data['visitorsbymonth']->values()->toArray();

        $data['visitors'] = VisitLog::all()->count();
        $data['productscount'] = Product::all()->count();
        $data['blogscount'] = Blog::all()->count();
        return view('admin.dashboard')->with($data);
    }
}
