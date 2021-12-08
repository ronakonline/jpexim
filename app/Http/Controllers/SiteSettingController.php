<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function contact_setting()
    {
        $settings = SiteSetting::all()->first();
        return view('admin.sitesettings.contact_settings', compact('settings'));
    }

    public function contact_setting_store(Request $request)
    {

        $settings = SiteSetting::all()->first();
        $settings->phone_no = $request->phone_no;
        $settings->phone_no1 = $request->phone_no1;
        $settings->email = $request->email;
        $settings->address = $request->address;
        $settings->facebook_url = $request->facebook_url;
        $settings->instagram_url = $request->instagram_url;
        $settings->save();
        return redirect()->back()->with('success', 'Contact Settings Updated Successfully');
    }

    public function site_settings()
    {
        $settings = SiteSetting::all()->first();
        return view('admin.sitesettings.site_settings', compact('settings'));
    }

    public function site_settings_store(Request $request)
    {
        //validate logo image
        $this->validate($request, [
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_light' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $settings = SiteSetting::all()->first();

        if ($request->hasFile('logo_light')) {
            //upload logo image
            $image = $request->file('logo_light');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/logo');
            $image->move($destinationPath, $image_name);

            if ($settings->logo_light != null) {
                $image_path = public_path() . '/uploads/logo/' . $settings->logo_light;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $settings->logo_light = $image_name;
        }
        //upload logo
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logo_name = $logo->getClientOriginalName();
            $logo_name = time() . $logo_name;
            $logo->move('uploads/logo', $logo_name);

            //remove old logo
            if ($settings->logo != null) {
                $image_path = public_path() . '/uploads/logo/' . $settings->logo;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $settings->logo = $logo_name;
        }


        $settings->save();
        return redirect()->back()->with('success', 'Site Settings Updated Successfully');
    }

    public function store_favicon(Request $request)
    {
        //validate logo image
        $this->validate($request, [
            'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'loader' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $settings = SiteSetting::all()->first();

        //upload logo
        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $favicon_name = $favicon->getClientOriginalName();
            $favicon_name = time() . $favicon_name;
            $favicon->move('uploads/logo', $favicon_name);

            //remove old logo
            if ($settings->favicon != null) {
                $image_path = public_path() . '/uploads/logo/' . $settings->favicon;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $settings->favicon = $favicon_name;
        }

        if($request->hasFile('loader')){
            $loader = $request->file('loader');
            $loader_name = $loader->getClientOriginalName();
            $loader_name = time() . $loader_name;
            $loader->move('uploads/logo', $loader_name);

            //remove old logo
            if ($settings->logo_loader != null) {
                $image_path = public_path() . '/uploads/logo/' . $settings->logo_loader;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $settings->logo_loader = $loader_name;
        }


        $settings->save();
        return redirect()->back()->with('success', 'Site Settings Updated Successfully');
    }
}
