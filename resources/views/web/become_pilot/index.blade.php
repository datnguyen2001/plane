@extends('web.index')
@section('title','Trở thành phi công')

@section('style_page')

@stop
{{--content of page--}}
@section('content')

    <section id="" class="pc2 po1" style="background:#F1F1F1">
        <div class="pc3 po2 container">
            <div class="pc4 po3 ">
                <div class="pc5 po4 ">
                    <div class="pc6 po11 heading">
                        <h1 class="pc7 po12 ">{{@$data->name}}</h1>
                    </div>
                    <div class="pc8 po13 chi-tiet-bai-viet">
                        {!! @$data->content !!}
                    </div>
                    <div class="pc9 ">
                        @if(isset($data->title_one))
                            <h2 class="pc10 ">{{@$data->title_one}}</h2>
                        @endif
                        <div class="pc11 ">
                            <div class="pc12 row">
                                <div class="pc20 col-md-5">
                                    <div class="pc21 ">
                                        @if(isset($data->src_1))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_1)}}"></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc13 col-md-7">
                                    <div class="pc14 ">
                                        @if(isset($data->name_1))
                                            <h3 class="pc15 ">{{@$data->name_1}}</h3>
                                        @endif
                                        @if(isset($data->content_1))
                                            <div class="">{!! @$data->content_1 !!}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc11 pc11-1">
                            <div class="pc12 row">
                                <div class="pc20 col-md-5 visible-xs  visible-sm">
                                    <div class="pc21 ">
                                        @if(isset($data->src_2))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_2)}}"></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc13 col-md-7">
                                    <div class="pc14 ">
                                        @if(isset($data->name_2))
                                            <h3 class="pc15 ">{{@$data->name_2}}</h3>
                                        @endif
                                        @if(isset($data->content_2))
                                            <div class="pc16x">{!! @$data->content_2 !!}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc20 col-md-5 hidden-xs hidden-sm">
                                    <div class="pc21 ">
                                        @if(isset($data->src_2))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_2)}}"></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc11 pc11-2">
                            <div class="pc12 row">
                                <div class="pc20 col-md-5">
                                    <div class="pc21 ">
                                        @if(isset($data->src_3))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_3)}}"></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc13 col-md-7">
                                    <div class="pc14 ">
                                        @if(isset($data->name_3))
                                            <h3 class="pc15 ">{{@$data->name_3}}</h3>
                                        @endif
                                        @if(isset($data->content_3))
                                            <div class="pc16x">{!! @$data->content_3 !!}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc11 pc11-3">
                            <div class="pc12 row">
                                <div class="pc20 col-md-5 visible-xs  visible-sm">
                                    <div class="pc21 ">
                                        @if(isset($data->src_4))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_4)}}"></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc13 col-md-7">
                                    <div class="pc14 ">
                                        @if(isset($data->name_4))
                                            <h3 class="pc15 ">{{@$data->name_4}}</h3>
                                        @endif
                                        @if(isset($data->content_4))
                                            <div class="pc16x">{!! @$data->content_4 !!}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc20 col-md-5 hidden-xs hidden-sm">
                                    <div class="pc21 ">
                                        @if(isset($data->src_4))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_4)}}"></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc11 pc11-4">
                            <div class="pc12 row">
                                <div class="pc20 col-md-5">
                                    <div class="pc21 ">
                                        @if(isset($data->src_5))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_5)}}"></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc13 col-md-7">
                                    <div class="pc14 ">
                                        @if(isset($data->name_5))
                                            <h3 class="pc15 ">{{@$data->name_5}}</h3>
                                        @endif
                                        @if(isset($data->content_5))
                                            <div class="pc16x">{!! @$data->content_5 !!}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pc11 pc11-3">
                            <div class="pc12 row">
                                <div class="pc20 col-md-5 visible-xs  visible-sm">
                                    <div class="pc21 ">
                                        @if(isset($data->src_6))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_6)}}"></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc13 col-md-7">
                                    <div class="pc14 ">
                                        @if(isset($data->name_6))
                                            <h3 class="pc15 ">{{@$data->name_6}}</h3>
                                        @endif
                                        @if(isset($data->content_6))
                                            <div class="pc16x">{!! @$data->content_6 !!}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="pc20 col-md-5 hidden-xs hidden-sm">
                                    <div class="pc21 ">
                                        @if(isset($data->src_6))
                                            <p class="pc22 "><img class="pc23 " src="{{asset(@$data->src_6)}}"></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(isset($data->title_two))
                            <h2 class="pc10 ">{{@$data->title_two}}</h2>
                        @endif
                        @if(isset($data->content_two))
                            <div class="pc11 pc11-6">
                                <div class="pc12 chi-tiet-bai-viet">
                                    {!! @$data->content_two !!}
                                </div>
                            </div>
                        @endif
                        @if(isset($data->title_three))
                            <h2 class="pc10 ">{{@$data->title_three}}</h2>
                        @endif
                        @if(isset($data->content_three))
                            <div class="pc11 pc11-5">
                                <div class="pc12 ">
                                    <div class="pc13 ">
                                        <div class="pc14 ">
                                            {!! @$data->content_three !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(isset($data->title_four))
                            <h2 class="pc10 pc10x text-center">{{@$data->title_four}}</h2>
                        @endif
                        @if(isset($data->content_four))
                            <div class="pc11 pc11-5">
                                <div class="pc12 ">
                                    <div class="pc13 ">
                                        <div class="pc14 ">
                                            {!! @$data->content_four !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('web.home.partials.contact')

@stop
@section('script_page')

@stop
