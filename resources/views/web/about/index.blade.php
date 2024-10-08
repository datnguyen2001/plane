@extends('web.index')
@section('title','Về chúng tôi')

@section('style_page')
    <style>
        .chi-tiet-bai-viet img{
            max-width: 100%;
        }
    </style>
@stop
{{--content of page--}}
@section('content')

    <section class="gt1 ">
        <div class=container>
            <div class="gt2 heading">
                <h1 class="gt3 ">Giới thiệu</h1>
            </div>
            <div class="gt4 chi-tiet-bai-viet text-light">
                {!! $about->content !!}
            </div>
        </div>
    </section>

    @if(isset($partner))
    <section class="gt7 ">
        <div class=container>
            <div class="gt8 r73 doitac-section">
                <div class="gt9 r74 heading heading-center">
                    <h2 class="gt10 r75 ">ĐỐI TÁC CỦA RAYA</h2>

                </div>
                <div class="gt12 r77 shop">

                    <div class="gt14 r78 row">
                        @foreach($partner as $partners)
                        <div class="gt15 col-md-3">
                            <a class="gt16 " @if($partners->link) href="{{$partners->link}}" @endif>
                                <span
                                    style="background-image: url({{asset($partners->src)}});background-size: contain; background-position: center; background-repeat: no-repeat;">&nbsp;</span>
                                <p class="gt17 r79 "></p>
                            </a>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(isset($image))
    <section class="gt18 " id=""
             style="background-image:url({{asset('assets/frontend/image/BG.png')}});background-size: cover;background-position: bottom;">
        <div class="gt19 container">
            <div class="i562 heading heading-center">
                <h2 class="i563 uppercase">MỘT SỐ HÌNH ẢNH VỀ RAYA</h2>
                <p class="i564 lead"></p>
            </div>
            <div class="i565 grid-layout grid-5-columns" data-margin=5 data-item="grid-item" data-lightbox="gallery">
                @foreach($image as $images)
                    <div class="i566 grid-item">
                        <a class="i570 image-hover-zoom" href="{{asset($images->src)}}"
                           data-lightbox="gallery-item"><img class="i571" src="{{asset($images->src)}}"></a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    @endif

    <section class="gt32 r63 " id=""
             style="background-image:url({{asset('assets/frontend/image/Trial.png')}});background-size: cover;background-position: center;">
        <div class="gt33 r64 container">
            <div class="row">
                <div class="col-md-6 m-b-60">
                    <div class="gt34 heading">
                        <p class="gt35 r65 text-left"></p>
                        <h2 class="gt36 r66 text-left">{{@$oneDayPilot->title}}</h2>
                    </div>
                    <p class="gt37 r67 text-left">{{@$oneDayPilot->describe}}</p>
                    <p class="gt38 r68 text-left"><a href="{{route('one-day-pilot')}}"
                                                     class="gt39 r69 btn btn-my">Xem chi tiết <i
                                class="gt40 r70 fa fa-angle-right"></i></a></p>
                </div>
                <div class="col-md-6">
{{--                    <iframe width="560" height="315" style="width: 100%" src="//www.youtube.com/embed/PZaKlhaPCbI"--}}
{{--                            frameborder="0"--}}
{{--                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                            allowfullscreen></iframe>--}}
                    {!! @$oneDayPilot->iframe !!}
                </div>
            </div>
        </div>
    </section>

    @include('web.home.partials.contact')

@stop
@section('script_page')

@stop
