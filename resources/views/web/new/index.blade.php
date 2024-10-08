@extends('web.index')
@section('title','Tin tức')

@section('style_page')
    <style>
        .r85 {
            display: inline-block;
        }
    </style>
@stop
{{--content of page--}}
@section('content')

    <section class="pageHeader">
        <div class="box-position"
             style="background-image:url({{asset('assets/frontend/image/bg.jpg')}});background-position: center;background-size: cover;"></div>
        <div class="container">
            <div class="heading text-center">
                <h1 class="uppercase">Tin Tức &amp; Sự Kiện</h1>
            </div>
        </div>
    </section>

    <section class="r71 " id=""
             style="background-image:url({{asset('assets/frontend/image/BG-05.png')}});background-size: cover;background-position: bottom;">
        <div class="r72 container">
            @if(isset($listData[0]))
                <div class="r83 big">
                    <div class="r84 ">
                        <a class="r85 " href="{{route('detail-new',$listData[0]->slug)}}">
                            <div class="row ">
                                <div class="col-md-8 ">
                                    <p class="r86 ">
                                        <img src="{{asset($listData[0]->src)}}" class="visible-xs">
                                        <span class="hidden-xs"
                                              style="background-image:url({{asset($listData[0]->src)}});background-size: cover;background-position: center;"></span>
                                    </p>
                                </div>
                                <div class="col-md-4 ">
                                    <p class="r87 matchHeight" style="">{{$listData[0]->name}}</p>
                                    <p class="r88 ">{{$listData[0]->describe}}</p>
                                    <p class="r89 ">Xem chi tiết</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endif
            @if(isset($listData[1]))
                <div class="r82 row">
                    @foreach($listData as $index => $news)
                        @if($index > 0)
                            <div class="r83 col-md-4">
                                <div class="r84 ">
                                    <a class="r85 " href="{{route('detail-new',$news->slug)}}">
                                        <p class="r86 "><img src="{{asset($news->src)}}"></p>
                                        <p class="r87 matchHeight" style="height: 61.2px;">{{$news->name}}</p>
                                        <p class="r88 matchHeight2" style="height: 117.6px;">{{$news->describe}}</p>

                                    </a>
                                </div>
                            </div>
                        @endif
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
