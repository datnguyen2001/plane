@extends('web.index')
@section('title','Liên hệ')

@section('style_page')

@stop
{{--content of page--}}
@section('content')

    <section class="pageHeader">
        <div class="box-position" style="background-image:url({{asset('assets/frontend/image/bg.jpg')}});background-position: center;background-size: cover;"></div>
        <div class="container">
            <div class="heading text-center">
                <h1 class="uppercase">Liên hệ</h1>
            </div>
        </div>
    </section>

    <section class="lh1">
        <div class="lh2 container">
            <div class="lh5 row">
                <div class="lh6 col-md-4">
                    <div class="lh7 ">
                        <div class="lh8 chi-tiet-bai-viet">
                            <h2 id="mcetoc_1gd17g5aj0">HỌC VIỆN&nbsp;ĐÀO TẠO <br>HÀNG KHÔNG RAYA</h2>
                            <table style="width: 100%;" class="table table-bordered">
                                <tbody>
                                <tr style="border-style: unset">
                                    <td><p class="text-center"><img src="{{asset('assets/frontend/image/2.png')}}" alt="2" title="2" width="2000" height="2000"></p></td>
                                    <td>{{@$setting->address}}&nbsp;&nbsp;</td>
                                </tr>
                                <tr style="border-style: unset">
                                    <td><p class="text-center"><img src="{{asset('assets/frontend/image/1.png')}}" alt="1" title="1" width="2000" height="2000"></p></td>
                                    <td>Hotline: {{@$setting->phone}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="lh9 col-md-7 col-md-offset-1">
                    <div class="lh10 chi-tiet-bai-viet">
                        <h2 class="lh11 uppercase" style="">Gửi tin nhắn cho chúng tôi</h2>
                    </div>
                    <form class="lh12 " action="{{route('save-contact')}}" data-element="mail-to-admin" method="POST">
                        @csrf
                        <div class="lh13 form-group">
                            <input type="text" name="name" class="lh14 form-control name" placeholder="Họ và tên" required>
                        </div>
                        <div class="lh15 row">
                            <div class="lh16 col-md-6">
                                <div class="lh17 form-group">
                                    <input type="text" name="phone" class="lh18 form-control phone" placeholder="Số điện thoại" required>
                                </div>
                            </div>
                            <div class="lh19 col-md-6">
                                <div class="lh20 form-group">
                                    <input type="email" name="email" class="lh21 form-control email" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="lh22 form-group ">
                            <textarea type="text" name="content" rows="3" class="lh23 form-control" placeholder="Nội dung" required></textarea>
                        </div>
                        <div class="lh24 form-group text-center">
                            <button class="lh27 btn btn-my btn-send-mail" type="submit">Gửi tin nhắn</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="lh29 p-0">
        <div class="lh30 google-maps p-0" style="height: 500px"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.8904287069884!2d105.80568130835337!3d21.041452696497856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abe7e9fe8641%3A0xd3441dd1744ace56!2zSMOyYSBCw6xuaCBidWlsZGluZw!5e0!3m2!1svi!2s!4v1663267563015!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>

@stop
@section('script_page')

@stop
