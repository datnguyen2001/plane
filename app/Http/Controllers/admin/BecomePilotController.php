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
        $becomePilot = BecomePilotModel::first();
        if ($becomePilot){
            for ($i = 1; $i <= 6; $i++) {
                if ($request->hasFile("file$i")) {
                    $file = $request->file("file$i");
                    $imagePath = Storage::url($file->store('banner', 'public'));

                    $currentSrc = "src_$i";
                    if (isset($becomePilot->$currentSrc) && Storage::exists(str_replace('/storage', 'public', $becomePilot->$currentSrc))) {
                        Storage::delete(str_replace('/storage', 'public', $becomePilot->$currentSrc));
                    }

                    $becomePilot->$currentSrc = $imagePath;
                }
            }
            $becomePilot->name = $request->get('name');
            $becomePilot->title_one = $request->get('title_one');
            $becomePilot->title_two = $request->get('title_two');
            $becomePilot->title_three = $request->get('title_three');
            $becomePilot->title_four = $request->get('title_four');
            $becomePilot->content = $request->get('content');
            for ($i = 1; $i <= 6; $i++) {
                $becomePilot->{"name_$i"} = $request->get("name_$i");
                $becomePilot->{"content_$i"} = $request->get("content_$i");
            }
            $becomePilot->content_two = $request->get('content_two');
            $becomePilot->content_three = $request->get('content_three');
            $becomePilot->content_four = $request->get('content_four');
            $becomePilot->save();
        }else{
            $newData = [
                'name' => $request->get('name'),
                'title_one' => $request->get('title_one'),
                'title_two' => $request->get('title_two'),
                'title_three' => $request->get('title_three'),
                'title_four' => $request->get('title_four'),
                'content' => $request->get('content'),
                'content_two' => $request->get('content_two'),
                'content_three' => $request->get('content_three'),
                'content_four' => $request->get('content_four'),
            ];

            for ($i = 1; $i <= 6; $i++) {
                if ($request->hasFile("file$i")) {
                    $file = $request->file("file$i");
                    $newData["src_$i"] = Storage::url($file->store('banner', 'public'));
                }

                // Lấy tên và nội dung cho các mục nhỏ
                $newData["name_$i"] = $request->get("name_$i");
                $newData["content_$i"] = $request->get("content_$i");
            }

            $becomePilot = new BecomePilotModel($newData);
            $becomePilot->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}
