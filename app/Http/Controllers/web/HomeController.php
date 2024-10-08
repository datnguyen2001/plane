<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use App\Models\BannerModel;
use App\Models\BecomePilotModel;
use App\Models\CertificateModel;
use App\Models\ContactModel;
use App\Models\ImageAboutModel;
use App\Models\NewModel;
use App\Models\OneDayPilotModel;
use App\Models\PartnerModel;
use App\Models\RegisterInformationModel;
use App\Models\TrainingCourseModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $banner = BannerModel::where('display',1)->get();
        $partner = PartnerModel::where('display',1)->get();
        $new = NewModel::where('display',1)->orderBy('created_at','desc')->take(3)->get();
        $about = AboutModel::first();
        $oneDayPilot = OneDayPilotModel::first();
        $training = TrainingCourseModel::where('display',1)->orderBy('created_at','desc')->take(4)->get();

        return view('web.home.index',compact('banner','partner','new','about','oneDayPilot','training'));
    }

    public function about()
    {
        $image = ImageAboutModel::all();
        $about = AboutModel::first();
        $partner = PartnerModel::where('display',1)->get();
        $oneDayPilot = OneDayPilotModel::first();

        return view('web.about.index',compact('image','about','partner','oneDayPilot'));
    }

    public function certificate()
    {
        $data = CertificateModel::first();

        return view('web.certificate.index',compact('data'));
    }

    public function becomePilot()
    {
        $data = BecomePilotModel::first();

        return view('web.become_pilot.index',compact('data'));
    }

    public function onDayPilot()
    {
        $data = OneDayPilotModel::first();

        return view('web.on_day_pilot.index',compact('data'));
    }

    public function detailTrainingCourse($slug)
    {
        $data = TrainingCourseModel::where('slug',$slug)->first();
        $dataMore = TrainingCourseModel::where('slug','!=',$slug)->where('display',1)->orderBy('created_at','desc')->take(3)->get();

        return view('web.flight_attendant.index',compact('data','dataMore'));
    }

    public function news()
    {
        $listData = NewModel::where('display',1)->orderBy('created_at','desc')->paginate(22);

        return view('web.new.index',compact('listData'));
    }

    public function detailNew($slug)
    {
        $data = NewModel::where('slug',$slug)->first();
        $listData = NewModel::where('id','!=',$data->id)->where('display',1)->orderBy('created_at','desc')->take(3)->get();

        return view('web.new.detail',compact('data','listData'));
    }

    public function search(Request $request)
    {
        $keySearch = $request->get('key_search');
        $listData = NewModel::where('name','like','%'.$keySearch.'%')->where('display',1)->orderBy('created_at','desc')->paginate(22);

        return view('web.new.index',compact('listData'));
    }

    public function contact()
    {
        return view('web.contact.index');
    }

    public function saveContact(Request $request)
    {
        ContactModel::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'content' => $request->get('content'),
        ]);
        toastr()->success('Gửi thông tin thành công');
        return back();
    }

    public function saveInformation(Request $request)
    {
        RegisterInformationModel::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'course' => $request->get('course'),
        ]);
        toastr()->success('Đăng ký nhận thông tin thành công');
        return back();
    }

    public function trainingCourse()
    {
        $listData = TrainingCourseModel::where('display',1)->paginate(16);

        return view('web.training_course.index',compact('listData'));
    }

}
