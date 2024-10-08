<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImageAboutModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageAboutController extends Controller
{
    public function index()
    {
        $titlePage = 'Danh sách hình ảnh về chúng tôi';
        $page_menu = 'about';
        $page_sub = 'image_about';
        $listData = ImageAboutModel::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.image_about.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm hình ảnh';
            $page_menu = 'about';
            $page_sub = 'image_about';
            return view('admin.image_about.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
            }else{
                return back()->with(['info'=>'Vui lòng thêm ảnh để tiếp tục']);
            }

            $banner = new ImageAboutModel([
                'src' => $imagePath
            ]);
            $banner->save();
            return redirect()->route('admin.image-about.index')->with(['success' => 'Tạo hình ảnh thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $banner = ImageAboutModel::find($id);
        if (isset($banner->src) && Storage::exists(str_replace('/storage', 'public', $banner->src))) {
            Storage::delete(str_replace('/storage', 'public', $banner->src));
        }
        $banner->delete();
        return redirect()->route('admin.image-about.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $banner = ImageAboutModel::find($id);
            if (empty($banner)) {
                return back()->with(['error' => 'Hình ảnh không tồn tại']);
            }
            $titlePage = 'Sửa hình ảnh';
            $page_menu = 'about';
            $page_sub = 'image_about';
            return view('admin.image_about.edit', compact('titlePage', 'page_menu', 'page_sub', 'banner'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $banner = ImageAboutModel::find($id);
            if (empty($banner)){
                return back()->with(['error' => 'Hình ảnh không tồn tại']);
            }
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($banner->src) && Storage::exists(str_replace('/storage', 'public', $banner->src))) {
                    Storage::delete(str_replace('/storage', 'public', $banner->src));
                }
                $banner->src = $imagePath;
            }
            $banner->save();
            return redirect()->route('admin.image-about.index')->with(['success' => 'Cập nhật hình ảnh thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
