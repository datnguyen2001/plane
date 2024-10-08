@extends('web.index')
@section('title',$data->name)

@section('style_page')
    <style>
        .chi-tiet-bai-viet img{
            max-width: 100%;
        }
    </style>
@stop
{{--content of page--}}
@section('content')

    <section id="" class="po1 p-b-0" style="background:#F1F1F1">
        <div class="po2 container">
            <div class="po3 row m-b-60">
                <div class="po4 col-md-8 col-md-offset-2">
                    <div class="po5 row">
                        <div class="po6 col-xs-6">
                            <p class="po7 ">
                                <a href="{{route('home')}}">Trang chủ</a> <i class="po8 fa fa-angle-right"></i>
                                <a href="{{route('new')}}">Tin Tức &amp; Sự Kiện</a>
                            </p>
                        </div>
                    </div>
                    <div class="po11 heading">
                        <h1 class="po12 ">{{$data->name}}</h1>
                    </div>
                    <div class="po13 chi-tiet-bai-viet">
                        {!! $data->content !!}
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <section class="po15 p121 r41" id="" style="background:#F1F1F1">
        <div class="po16 p122 r42 container">
            <div class="po17 p123 r43 heading">
                <h2 class="po18 p124 r44 ">Có thể bạn quan tâm</h2>
            </div>
            <div class="po20 r82 row">
                @foreach($listData as $mores)
                    <div class="po21 r83 col-md-4">
                        <div class="po22 r84 ">
                            <a class="po23 r85 " href="{{route('detail-new',$mores->slug)}}">
                                <p class="po24 r86 "><img src="{{$mores->src}}"></p>
                                <p class="po25 r87 matchHeight" style="height: 81.6px;">{{$mores->name}}</p>
                                <p class="po26 r88 matchHeight2" style="height: 196px;">{{$mores->describe}}</p>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@stop
@section('script_page')

@stop
