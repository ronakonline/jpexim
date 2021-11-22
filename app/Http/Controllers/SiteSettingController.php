<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function contact_setting()
    {
        $settings = SiteSetting::all()->first();
        return view('admin.sitesettings.contact_settings',compact('settings'));
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
        return redirect()->back()->with('success','Contact Settings Updated Successfully');
    }
}
