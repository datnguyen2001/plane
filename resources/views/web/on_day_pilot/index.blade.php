@extends('web.index')
@section('title','Một ngày trở thành phi công')

@section('style_page')

@stop
{{--content of page--}}
@section('content')

    <section id="" class="po1 p-b-0" style="background:#F1F1F1">
        <div class="po2 container">
            <div class="po3 row m-b-60">
                <div class="po4 col-md-8 col-md-offset-2">
                    <div class="po11 heading">
                        <h1 class="po12 ">Một ngày trở thành phi công</h1>
                    </div>
                    <div class="po13 chi-tiet-bai-viet">
                       {!! $data->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section('script_page')

@stop
