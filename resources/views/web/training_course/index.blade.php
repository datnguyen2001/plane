@extends('web.index')
@section('title','Chương chình huấn luyện')

@section('style_page')

@stop
{{--content of page--}}
@section('content')

    <section class="pageHeader">
        <div class="box-position"
             style="background-image:url({{asset('assets/frontend/image/near-plane.png')}});background-position: center;background-size: cover;"></div>
        <div class="container">
            <div class="heading text-center">
                <h1 class="uppercase">Chương Trình Huấn Luyện</h1>
            </div>
        </div>
    </section>

    <section class="r41 " id=""
             style="background-image:url({{asset('assets/frontend/image/BG-03.png')}});background-size: cover;background-position: bottom;">
        <div class="r42 container">
            @if(isset($listData))
                <div class="r46 row">
                    @foreach($listData as $value)
                        <div class="r47 r55 col-md-3">
                            <div class="r48 r56 ">
                                <a class="r49 r57 " href="{{route('detail-training-course',$value->slug)}}">
                                    <p class="r50 r58 "><img src="{{asset($value->src)}}"></p>
                                    <p class="r51 r59 matchHeight" style="height: 54px;">{{$value->name}}</p>
                                    <p class="r52 r60 ">
                                        <button class="r53 r61 btn btn-my">Xem chi tiết <i
                                                class="r62 fa fa-angle-right"></i></button>
                                    </p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center p-20">
                    {{ $listData->appends(request()->all())->links('web.partials.pagination') }}
                </div>
            @endif
        </div>
    </section>

@stop
@section('script_page')

@stop
