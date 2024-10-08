<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Về chúng tôi';
        $page_menu = 'news';
        $page_sub = null;
        $data = AboutModel::orderBy('created_at', 'desc')->first();

        return view('admin.about.index', compact('titlePage', 'page_menu', 'page_sub', 'data'));
    }

    public function save(Request $request){
        $about = AboutModel::first();
        if ($about){
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($about->src1) && Storage::exists(str_replace('/storage', 'public', $about->src1))) {
                    Storage::delete(str_replace('/storage', 'public', $about->src1));
                }
                $about->src1 = $imagePath;
            }

            if ($request->hasFile('img_logo')){
                $file = $request->file('img_logo');
                $imageQr = Storage::url($file->store('banner', 'public'));
                if (isset($about->src2) && Storage::exists(str_replace('/storage', 'public', $about->src2))) {
                    Storage::delete(str_replace('/storage', 'public', $about->src2));
                }
                $about->src2 = $imageQr;
            }

            $about->name = $request->get('name');
            $about->describe = $request->get('describe');
            $about->stewardess = $request->get('stewardess');
            $about->pilot = $request->get('pilot');
            $about->content = $request->get('content');
            $about->save();
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
            $setting = new AboutModel([
                'describe'=>$request->get('describe'),
                'name'=>$request->get('name'),
                'content'=>$request->get('content'),
                'stewardess'=>$request->get('stewardess'),
                'pilot'=>$request->get('pilot'),
                'src1'=>$imagePath,
                'src2'=>$imageQr,
            ]);
            $setting->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }

}
