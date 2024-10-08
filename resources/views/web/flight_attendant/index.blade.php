@extends('web.index')
@section('title',$data->name)

@section('style_page')

@stop
{{--content of page--}}
@section('content')

    <section class="p0" id=""
             style="background-image:url({{asset('assets/frontend/image/banner-tv.jpg')}});background-size: auto 100%;background-position: left;">
        <span class="p0x"></span>
        <div class="p1 container">
            <div class="p2 row">
                <div class="p3 col-md-6 col-md-offset-6">
                    <div class="p4 heading">
                        <h1 class="p5 ">{{$data->name}}</h1>
                    </div>
                    <p class="p6 ">{{$data->describe}}</p>
                    <p class="p7 "><a href="#dangky" class="p8 btn btn-my scroll-to">Đăng ký ngay <i
                                class="p9 fa fa-angle-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="p10 ">
        <div class="p11 container">
            <div class="p12 heading">
                <h2 class="p13 ">tại sao nên chọn raya</h2>
            </div>
            <div class="p14 row">
                @if($data->why_choose1)
                    <div class="p15 col-md-4">
                        <p class="p16 "><img class="p17 " src="{{asset('assets/frontend/image/sao.png')}}"></p>
                        <p class="p18 ">{{$data->why_choose1}}</p>
                    </div>
                @endif
                @if($data->why_choose2)
                    <div class="p15 col-md-4">
                        <p class="p16 "><img class="p17 " src="{{asset('assets/frontend/image/sao.png')}}"></p>
                        <p class="p18 ">{{$data->why_choose2}}</p>
                    </div>
                @endif
                @if($data->why_choose3)
                    <div class="p15 col-md-4">
                        <p class="p16 "><img class="p17 " src="{{asset('assets/frontend/image/sao.png')}}"></p>
                        <p class="p18 ">{{$data->why_choose3}}</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section id="" class="p27 ">
        <div class="p28 container">
            <div class="p29 heading">
                <h2 class="p30 ">YÊU CẦU XÉT TUYỂN</h2>
            </div>
            <div class="p31 row">
                @if($data->age)
                    <div class="p32 col-md-3 matchHeight" style="height: 137.45px;">
                        <p class="p33 "><i class="p34 fa fa-user"></i> Tuổi đời</p>
                        <div class="p35 ">{{$data->age}}</div>
                    </div>
                @endif
                @if($data->education)
                    <div class="p32 p36 col-md-3 matchHeight" style="height: 137.45px;">
                        <p class="p33 p37 "><i class="p34 p38 fa fa-graduation-cap"></i> Học vấn</p>
                        <div class="p35 p39 ">{{$data->education}}</div>
                    </div>
                @endif
                @if($data->foreign_language)
                    <div class="p40 p32 col-md-3 matchHeight" style="height: 137.45px;">
                        <p class="p41 p33 "><i class="p34 p42 fa fa-language"></i> Ngoại ngữ</p>
                        <div class="p43 p35 ">{{$data->foreign_language}}</div>
                    </div>
                @endif
                @if($data->health)
                    <div class="p44 p32  col-md-3 matchHeight" style="height: 137.45px;">
                        <p class="p45 p33  "><i class="p34 p46 fa fa-heart"></i> Sức khoẻ</p>
                        <div class="p47 p35  ">{{$data->health}}</div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section id="" class="p69  background-grey ">
        <div class="p70 container">
            <div class="p71 heading">
                <h2 class="p72 ">CHƯƠNG TRÌNH ĐÀO TẠO</h2>
            </div>
            <div class="p73 chi-tiet-bai-viet">
                {!! $data->content !!}
            </div>

        </div>
    </section>

    @include('web.home.partials.contact')

    @if(count($dataMore)>0)
    <section class="p121 r41 " id=""
             style="background-image:url({{asset('assets/frontend/image/BG-03.png')}});background-size: cover;background-position: bottom;">
        <div class="p122 r42 container">
            <div class="p123 r43 heading">
                <h2 class="p124 r44 ">Có thể bạn quan tâm</h2>
            </div>
            <div class="p126 r46 row">
                @foreach($dataMore as $item)
                <div class="p127 r47 col-md-4">
                    <div class="p128 r48 ">
                        <a class="p129 r49 " href="{{route('detail-training-course',$item->slug)}}">
                            <p class="p130 r50 "><img class="p131 " src="{{asset($item->src)}}"></p>
                            <p class="p132 r51 matchHeight" style="height: 36px;">{{$item->name}}</p>
                            <p class="p133 r88 matchHeight2" style="height: 156.8px;"><b></b>{{$item->describe}}<b></b></p>
                            <p class="p134 r52 ">
                                <button class="p135 r53 btn btn-my">Xem chi tiết <i
                                        class="p136 r54 fa fa-angle-right"></i></button>
                            </p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

@stop
@section('script_page')

@stop
