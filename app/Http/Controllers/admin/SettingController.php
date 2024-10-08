<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $titlePage = 'Cài đặt';
        $page_menu = 'setting';
        $page_sub = null;
        $data = SettingModel::first();

        return view('admin.setting.index',compact('titlePage','page_menu','page_sub','data'));
    }

    public function save(Request $request){
        $setting = SettingModel::first();
        if ($setting){
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($setting->logo) && Storage::exists(str_replace('/storage', 'public', $setting->logo))) {
                    Storage::delete(str_replace('/storage', 'public', $setting->logo));
                }
                $setting->logo = $imagePath;
            }

            if ($request->hasFile('img_logo')){
                $file = $request->file('img_logo');
                $imageQr = Storage::url($file->store('banner', 'public'));
                if (isset($setting->logo_footer) && Storage::exists(str_replace('/storage', 'public', $setting->logo_footer))) {
                    Storage::delete(str_replace('/storage', 'public', $setting->logo_footer));
                }
                $setting->logo_footer = $imageQr;
            }

            $setting->describe = $request->get('describe');
            $setting->address = $request->get('address');
            $setting->phone = $request->get('phone');
            $setting->facebook = $request->get('facebook');
            $setting->youtube = $request->get('youtube');
            $setting->twitter = $request->get('twitter');
            $setting->instagram = $request->get('instagram');
            $setting->iframe_facebook = $request->get('iframe_facebook');
            $setting->save();
        }else{
            $imagePath = null;
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
            }
            if ($request->hasFile('img_logo')){
                $file = $request->file('img_logo');
                $imageQr = Storage::url($file->store('banner', 'public'));
            }
            $setting = new SettingModel([
                'describe'=>$request->get('describe'),
                'address'=>$request->get('address'),
                'phone'=>$request->get('phone'),
                'facebook'=>$request->get('facebook'),
                'youtube'=>$request->get('youtube'),
                'twitter'=>$request->get('twitter'),
                'logo'=>$imagePath,
                'logo_footer'=>$imageQr,
                'instagram'=>$request->get('instagram'),
                'iframe_facebook'=>$request->get('iframe_facebook'),
            ]);
            $setting->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}
