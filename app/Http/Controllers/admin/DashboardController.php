<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use App\Models\RegisterInformationModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $titlePage = 'Trang chủ';
        $page_menu = 'dashboard';
        $page_sub = null;
        return view('admin.index', compact('titlePage','page_menu','page_sub'));
    }

    public function contact()
    {
        $titlePage = 'Quản lý liên hệ';
        $page_menu = 'contact';
        $page_sub = null;
        $listData = ContactModel::orderBy('created_at','desc')->paginate(20);

        return view('admin.contact.index', compact('titlePage','page_menu','page_sub','listData'));
    }

    public function registerInformation()
    {
        $titlePage = 'Đăng ký nhận thông tin';
        $page_menu = 'register_information';
        $page_sub = null;
        $listData = RegisterInformationModel::orderBy('created_at','desc')->paginate(20);

        return view('admin.register_information.index', compact('titlePage','page_menu','page_sub','listData'));
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('userfiles'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('userfiles/'.$fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
