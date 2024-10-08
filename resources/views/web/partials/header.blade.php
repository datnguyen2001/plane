<header id="header" class="f2   header-menu-bottom">
    <div id="header-wrap">
        <div class="f3 container">
            <div id="logo" class="f4 ">
                <a href="{{route('home')}}" class="f5 logo">
                    <img class="f6 " src="{{asset(@$setting->logo)}}"
                         alt="">
                </a>
            </div>
            <div id="top-search" class="f7 ">
                <form action="{{route('search')}}" method="get">
                    <input type="text" name="key_search" class="f8 form-control"
                           placeholder="Gõ từ khóa và bấm enter để tìm kiếm">
                </form>
            </div>

            <div class="f17 header-extras">
                <ul class="f18 ">
                    <li class="f19  "><a href="{{route('contact')}}">Liên hệ</a></li>
                    <li class="f22 "><a target="_blank" href="{{@$setting->facebook}}"><i
                                class="f23 fa fa-facebook"></i></a></li>
                    <li class="f24 "><a target="_blank" href="{{@$setting->youtube}}"><i
                                class="f25 fa fa-youtube"></i></a></li>
                    <li class="f26 "><a target="_blank" href="{{@$setting->twitter}}"><i
                                class="f27 fa fa-twitter"></i></a></li>
                    <li class="f28 "><a target="_blank" href="{{@$setting->instagram}}"><i
                                class="f29 fa fa-instagram"></i></a></li>
                    {{--                    <li class="f32 ">--}}
                    {{--                        <div class="f33 topbar-dropdown">--}}
                    {{--                            <span class="f34 title"><img src="{{asset('assets/frontend/image/lang_vi.jpg')}}">vi</span>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}
                </ul>
            </div>
            <div id="mainMenu-trigger" class="f40 ">
                <button class="f41 lines-button x"><span class="f42 lines"></span></button>
            </div>
            <div id="mainMenu" class="f43 light  menu-bottom">
                <div class="f44">
                    <nav class="f45 ">
                        <ul class="f46 ">
                            <li class="f48 "><a href={{route('about')}}>Về chúng tôi</a></li>
                            <li class="f49 "><a href={{route('certificate')}}>Giấy chứng nhận</a></li>
                            <li class="f50 "><a href={{route('become-pilot')}}>Trở thành phi công</a>
                            </li>
                            <li class="f51 "><a href={{route('one-day-pilot')}}>Một ngày trở thành phi công</a>
                            </li>
                            @if(count($menuHeader)>0)
                                @foreach($menuHeader as $header)
                                    <li class="f52 "><a
                                            href="{{route('detail-training-course',$header->slug)}}">{{$header->title}}</a>
                                    </li>
                                @endforeach
                            @endif
                            <li class="f20 "><a href={{route('new')}}>Tin tức</a></li>
                            <li class="f21 visible-xs visible-sm"><a href={{route('contact')}}>Liên hệ</a></li>
                            <li class="f53 hidden-xs hidden-sm">
                                <a id="top-search-trigger" href="#" class="f54 toggle-item">
                                    <i class="f55 fa fa-search"></i>
                                    <i class="f56 fa fa-close"></i>
                                </a>
                            </li>
                            <li class="visible-xs visible-sm">
                                <div class="f7 ">
                                    <form action="{{route('search')}}" method="get">
                                        <input type="text" name="key_search" class="f8 form-control"
                                               placeholder="Gõ từ khóa và bấm enter để tìm kiếm">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
