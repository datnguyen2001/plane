@extends('web.index')
@section('title','Giấy chứng nhận')

@section('style_page')
    <style>
        .box-content img{
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
                    <div class="po11 heading">
                        <h1 class="po12 ">Giấy chứng nhận</h1>
                    </div>
                    <div class="po13 chi-tiet-bai-viet">
                        <p><img src="{{asset($data->src)}}" /></p>
                        <div class="box-content" style="font-family: 'times new roman', times, serif; font-size: 12pt;">{!! @$data->content !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section('script_page')

@stop
