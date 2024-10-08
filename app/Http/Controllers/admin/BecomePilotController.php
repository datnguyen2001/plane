<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BecomePilotModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BecomePilotController extends Controller
{
    public function index()
    {
        $titlePage = 'Trở thành phi công';
        $page_menu = 'become_pilot';
        $page_sub = null;
        $data = BecomePilotModel::orderBy('created_at', 'desc')->first();

        return view('admin.become_pilot.index', compact('titlePage', 'page_menu', 'page_sub', 'data'));
    }

    public function save(Request $request){
        $certificate = CertificateModel::first();
        if ($certificate){
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($about->src) && Storage::exists(str_replace('/storage', 'public', $certificate->src))) {
                    Storage::delete(str_replace('/storage', 'public', $certificate->src));
                }
                $certificate->src = $imagePath;
            }
            $certificate->content = $request->get('content');
            $certificate->save();
        }else{
            $imagePath = null;
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
            }

            $certificate = new CertificateModel([
                'content'=>$request->get('content'),
                'src'=>$imagePath,
            ]);
            $certificate->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}
