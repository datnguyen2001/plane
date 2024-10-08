<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OneDayPilotModel;
use Illuminate\Http\Request;

class OneDayPilotController extends Controller
{
    public function index()
    {
        $titlePage = 'Một ngày trở thành phi công';
        $page_menu = 'one_day_pilot';
        $page_sub = null;
        $data = OneDayPilotModel::orderBy('created_at', 'desc')->first();

        return view('admin.one_day_pilot.index', compact('titlePage', 'page_menu', 'page_sub', 'data'));
    }

    public function save(Request $request){
        $pilot = OneDayPilotModel::first();
        if ($pilot){
            $pilot->title = $request->get('title');
            $pilot->describe = $request->get('describe');
            $pilot->content = $request->get('content');
            $pilot->iframe = $request->get('iframe');
            $pilot->save();
        }else{
            $pilots = new OneDayPilotModel([
                'title'=>$request->get('title'),
                'describe'=>$request->get('describe'),
                'content'=>$request->get('content'),
                'iframe'=>$request->get('iframe'),
            ]);
            $pilots->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}
