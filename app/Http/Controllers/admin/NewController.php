<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Danh sách tin tức';
        $page_menu = 'news';
        $page_sub = null;
        $listData = NewModel::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.new.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm tin tức';
            $page_menu = 'new';
            $page_sub = null;
            return view('admin.new.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            $data = NewModel::where('name',$request->get('name'))->first();
            if ($data){
                toastr()->error('Bài viết đã tồn tại');
                return back();
            }
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
            $new = new NewModel([
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
                'describe' => $request->get('describe'),
                'content' => $request->get('content'),
                'display' => $display,
                'src' => $imagePath
            ]);
            $new->save();
            return redirect()->route('admin.news.index')->with(['success' => 'Tạo tin tức thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $new = NewModel::find($id);
        if (isset($new->src) && Storage::exists(str_replace('/storage', 'public', $new->src))) {
            Storage::delete(str_replace('/storage', 'public', $new->src));
        }
        $new->delete();
        return redirect()->route('admin.news.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $new = NewModel::find($id);
            if (empty($new)) {
                return back()->with(['error' => 'Tin tức không tồn tại']);
            }
            $titlePage = 'Sửa tin tức';
            $page_menu = 'news';
            $page_sub = null;
            return view('admin.new.edit', compact('titlePage', 'page_menu', 'page_sub', 'new'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $new = NewModel::find($id);
            if (empty($new)){
                return back()->with(['error' => 'Đối tác không tồn tại']);
            }
            $data = NewModel::where('name',$request->get('name'))->first();
            if ($data && $data->id != $id){
                toastr()->error('Bài viết đã tồn tại');
                return back();
            }
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($new->src) && Storage::exists(str_replace('/storage', 'public', $new->src))) {
                    Storage::delete(str_replace('/storage', 'public', $new->src));
                }
                $new->src = $imagePath;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $new->name = $request->get('name');
            $new->slug = Str::slug($request->get('name'));
            $new->describe = $request->get('describe');
            $new->content = $request->get('content');
            $new->display = $display;
            $new->save();
            return redirect()->route('admin.news.index')->with(['success' => 'Cập nhật tin tức thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
