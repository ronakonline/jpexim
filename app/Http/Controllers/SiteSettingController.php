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

    public function site_settings(){
        $settings = SiteSetting::all()->first();
        return view('admin.sitesettings.site_settings',compact('settings'));
    }

    public function site_settings_store(Request $request){
        //validate logo image
        $this->validate($request,[
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $settings = SiteSetting::all()->first();
        //remove old logo
        if($settings->logo != null){
            $image_path = public_path().'/uploads/logo/'.$settings->logo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }
        //upload logo
        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logo_name = $logo->getClientOriginalName();
            $logo_name = time().$logo_name;
            $logo->move('uploads/logo',$logo_name);
        }
        //save logo name to database

        $settings->logo = $logo_name;
        $settings->save();
        return redirect()->back()->with('success','Site Settings Updated Successfully');
    }
}
