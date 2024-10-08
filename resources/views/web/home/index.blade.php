@extends('web.index')
@section('title','Trang chủ')

@section('style_page')

@stop
{{--content of page--}}
@section('content')

    @if(isset($banner))
        <div id=slider class="r1 inspiro-slider dots-creative " data-ratio-width="1920" data-ratio-height="790"
             data-autoplay=true data-autoplay-timeout=3000>
            @foreach($banner as $banners)
                <a href="" class="r2 slide"
                   style="background-image:url({{asset($banners->src)}});background-position: center; background-size:cover;">
                    <div class="r3 container">
                        <div class="r4 slide-captions">
                            <div class="r5 ">
                                <h2 class="r6 ">{{@$banners->title}}</h2>
                                <p class="r7 ">{{@$banners->describe}}</p>
                                <p class="r8 "></p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif

    @if(isset($about))
        <section class="r17"
                 style="background-image:url({{asset('assets/frontend/image/BG-01.png')}});background-size: cover;background-position: center;">
            <div class="r18 container">
                <div class="r19 row">
                    <div class="r20 col-md-6">
                        <div class="r21 ">
                            <p class="r22 "><img
                                    src="{{asset($about->src1)}}">
                            </p>
                            <p class="r23 "><img
                                    src="{{asset($about->src2)}}">
                            </p>
                        </div>
                    </div>
                    <div class="r24 col-md-6">
                        <div class="r25 heading">
                            <h2 class="r26 ">{{$about->name}} </h2>
                        </div>
                        <p class="r27 ">{{$about->describe}}</p>
                        <div class="r28 row">
                            <div class="r29 col-xs-4">
                                <p class="r30 ">{{$about->stewardess}}</p>
                                <p class="r31 ">Tiếp viên</p>
                            </div>
                            <div class="r32 col-xs-4">
                                <p class="r33 ">{{$about->pilot}}</p>
                                <p class="r34 ">Phi công</p>
                            </div>
                            <div class="r35 col-xs-4">
                                <p class="r36 ">Bạn mong muốn <br>là người tiếp theo?</p>
                                <p class="r37 "><a href="#dangky" class="scroll-to">Đăng ký ngay</a></p>
                            </div>
                        </div>
                        <p class="r38 "><a href="{{route('about')}}" class="r39 btn btn-my">Xem chi tiết <i
                                    class="r40 fa fa-angle-right"></i></a></p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($training)>0)
        <section class="r41 " id=""
                 style="background-image:url({{asset('assets/frontend/image/BG-03.png')}});background-size: cover;background-position: bottom;">
            <div class="r42 container">
                <div class="r43 heading">
                    <h2 class="r44 ">Chương Trình Huấn Luyện</h2>
                    <p class="r45 "></p>
                </div>
                <div class="r46 row">
                    @foreach($training as $trainings)
                        <div class="r47 r55 col-md-3">
                            <div class="r48 r56 ">
                                <a class="r49 r57 " href="{{route('detail-training-course',$trainings->slug)}}">
                                    <p class="r50 r58 "><img
                                            src="{{asset($trainings->src)}}"></p>
                                    <p class="r51 r59 matchHeight">{{$trainings->name}}</p>
                                    <p class="r52 r60 ">
                                        <button class="r53 r61 btn btn-my">Xem chi tiết <i
                                                class="r62 fa fa-angle-right"></i>
                                        </button>
                                    </p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="r63 " id=""
             style="background-image:url({{asset('assets/frontend/image/Trial.png')}});background-size: cover;background-position: center;">
        <div class="r64 container">
            <div class="heading">
                <p class="r65 "></p>
                <h2 class="r66 ">{{@$oneDayPilot->title}}</h2>
            </div>
            <p class="r67 ">{{@$oneDayPilot->describe}}</p>
            <p class="r68 "><a href="{{route('one-day-pilot')}}" class="r69 btn btn-my">Xem chi tiết <i
                        class="r70 fa fa-angle-right"></i></a></p>
        </div>
    </section>

    <section class="r71 " id=""
             style="background-image:url({{asset('assets/frontend/image/BG-05.png')}});background-size: cover;background-position: bottom;">
        <div class="r72 container">
            @if(isset($partner))
                <div class="r73 doitac-section">
                    <div class="r74 heading heading-center">
                        <p class="r75 ">ĐỐI TÁC CỦA RAYA</p>
                    </div>
                    <div class="r77 shop">
                        <div class="r78 row">
                            @foreach($partner as $partners)
                                <div class="col-md-2-5">
                                    <a @if($partners->link) href="{{$partners->link}}" @endif>
                                <span
                                    style="background-image: url({{asset($partners->src)}});background-size: contain; background-position: center; background-repeat: no-repeat;">&nbsp;</span>
                                        <p class="r79 "></p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if(isset($new))
                <div class="r80 heading">
                    <h2 class="r81 ">Tin Tức & Sự Kiện</h2>
                </div>
                <div class="r82 row">
                    @foreach($new as $news)
                        <div class="r83 col-md-4">
                            <div class="r84 ">
                                <a class="r85 "
                                   href="{{route('detail-new',$news->slug)}}">
                                    <p class="r86 "><img src="{{asset($news->src)}}"></p>
                                    <p class="r87 matchHeight">{{$news->name}}</p>
                                    <p class="r88 ">{{$news->describe}}</p>

                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    @include('web.home.partials.contact')

@stop
@section('script_page')

@stop
