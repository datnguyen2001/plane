<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Danh sách đối tác';
        $page_menu = 'partner';
        $page_sub = null;
        $listData = PartnerModel::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.partner.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm đối tác';
            $page_menu = 'partner';
            $page_sub = null;
            return view('admin.partner.create', compact('titlePage', 'page_menu', 'page_sub'));
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
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $partner = new PartnerModel([
                'link' => $request->get('link'),
                'display' => $display,
                'src' => $imagePath
            ]);
            $partner->save();
            return redirect()->route('admin.partner.index')->with(['success' => 'Tạo đối tác thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $banner = PartnerModel::find($id);
        if (isset($banner->src) && Storage::exists(str_replace('/storage', 'public', $banner->src))) {
            Storage::delete(str_replace('/storage', 'public', $banner->src));
        }
        $banner->delete();
        return redirect()->route('admin.partner.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $banner = PartnerModel::find($id);
            if (empty($banner)) {
                return back()->with(['error' => 'Đối tác không tồn tại']);
            }
            $titlePage = 'Sửa đối tác';
            $page_menu = 'partner';
            $page_sub = null;
            return view('admin.partner.edit', compact('titlePage', 'page_menu', 'page_sub', 'banner'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $banner = PartnerModel::find($id);
            if (empty($banner)){
                return back()->with(['error' => 'Đối tác không tồn tại']);
            }
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($banner->src) && Storage::exists(str_replace('/storage', 'public', $banner->src))) {
                    Storage::delete(str_replace('/storage', 'public', $banner->src));
                }
                $banner->src = $imagePath;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $banner->link = $request->get('link');
            $banner->display = $display;
            $banner->save();
            return redirect()->route('admin.partner.index')->with(['success' => 'Cập nhật đối tác thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
