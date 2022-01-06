<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\SiteSetting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            $settings = SiteSetting::first();
            $footer_blogs = Blog::orderBy('id', 'desc')->offset(0)->limit(2)->get();
            view()->share(['settings' => $settings, 'footer_blogs' => $footer_blogs]);
    }
}
