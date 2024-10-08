<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TrainingCourseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TrainingCourseController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Danh sách khóa huấn luyện';
        $page_menu = 'training_course';
        $page_sub = null;
        $listData = TrainingCourseModel::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.training_course.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm khóa huấn luyện';
            $page_menu = 'training_course';
            $page_sub = null;
            return view('admin.training_course.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            $data = TrainingCourseModel::where('name',$request->get('name'))->first();
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
            if ($request->get('type') == 'on'){
                $type = 1;
                if ( $request->get('title') == ''){
                    toastr()->error('Vui lòng thêm tiêu đề trên header');
                    return back();
                }
            }else{
                $type = 0;
            }
            $new = new TrainingCourseModel([
                'title' => $request->get('title'),
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
                'describe' => $request->get('describe'),
                'why_choose1' => $request->get('why_choose1'),
                'why_choose2' => $request->get('why_choose2'),
                'why_choose3' => $request->get('why_choose3'),
                'age' => $request->get('age'),
                'education' => $request->get('education'),
                'foreign_language' => $request->get('foreign_language'),
                'health' => $request->get('health'),
                'content' => $request->get('content'),
                'display' => $display,
                'type'=>$type,
                'src' => $imagePath
            ]);
            $new->save();
            return redirect()->route('admin.training-course.index')->with(['success' => 'Tạo bài viết thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $new = TrainingCourseModel::find($id);
        $new->delete();
        return redirect()->route('admin.training-course.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $data = TrainingCourseModel::find($id);
            if (empty($data)) {
                return back()->with(['error' => 'Tin tức không tồn tại']);
            }
            $titlePage = 'Sửa khóa huấn luyện';
            $page_menu = 'training_course';
            $page_sub = null;
            return view('admin.training_course.edit', compact('titlePage', 'page_menu', 'page_sub', 'data'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $new = TrainingCourseModel::find($id);
            if (empty($new)){
                return back()->with(['error' => 'Đối tác không tồn tại']);
            }
            $data = TrainingCourseModel::where('name',$request->get('name'))->first();
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
            if ($request->get('type') == 'on'){
                $type = 1;
                if ( $request->get('title') == ''){
                    toastr()->error('Vui lòng thêm tiêu đề trên header');
                    return back();
                }
            }else{
                $type = 0;
            }
            $new->title = $request->get('title');
            $new->name = $request->get('name');
            $new->slug = Str::slug($request->get('name'));
            $new->describe = $request->get('describe');
            $new->why_choose1 = $request->get('why_choose1');
            $new->why_choose2 = $request->get('why_choose2');
            $new->why_choose3 = $request->get('why_choose3');
            $new->age = $request->get('age');
            $new->education = $request->get('education');
            $new->foreign_language = $request->get('foreign_language');
            $new->health = $request->get('health');
            $new->content = $request->get('content');
            $new->display = $display;
            $new->type = $type;
            $new->save();
            return redirect()->route('admin.training-course.index')->with(['success' => 'Cập nhật tin tức thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
