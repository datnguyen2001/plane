<section class="r117">
    <div class="r119 container">
        <div class="r120 row">
            <div class="r121 col-md-5">
                <p class="r122 "><img class="r123 m-b-20" src="{{asset(@$setting->logo_footer)}}"></p>
                <p class="r125 ">{{@$setting->describe}}</p>
                <p class="r126 foot-icon">
                    <a target="_blank" rel="noreferrer noopener nofollow"
                       href="{{@$setting->facebook}}"><i class="r127 fa fa-facebook"></i></a>
                    <a target="_blank" rel="noreferrer noopener nofollow"
                       href="{{@$setting->youtube}}"><i class="r128 fa fa-youtube"></i></a>
                    <a target="_blank" rel="noreferrer noopener nofollow"
                       href="{{@$setting->twitter}}"><i class="r129 fa fa-twitter"></i></a>
                    <a target="_blank" rel="noreferrer noopener nofollow"
                       href="{{@$setting->instagram}}"><i class="r130 fa fa-instagram"></i></a>
                </p>
                <p class="r133 ">Copyright © 2024 RAYA Training. All Rights Reserved.</p>
            </div>
            <div class="r134 col-md-2">
                <h4 class="r135 ">Giới thiệu</h4>
                <p><a href={{route('about')}}>Về chúng tôi</a></p>
                <p><a href={{route('training-course')}}>Khóa huấn luyện</a></p>
                <p><a href="{{route('new')}}">Tin tức</a></p>
            </div>
            <div class="r138 col-md-2">
                <h4 class="r139 ">Liên hệ</h4>
                <div class="r140 ">
                    <p>
                        <b>Địa chỉ</b><br>{{@$setting->address}}<br><br><b>Hotline</b><br>{{@$setting->phone}}<br></p>
                </div>
            </div>
            <div class="r141 col-md-3">
                <h4 class="r142 ">Facebook</h4>
                {!! @$setting->iframe_facebook !!}
            </div>
        </div>
    </div>
</section>

<a id="goToTop"><i class="f57 fa fa-angle-up top-icon"></i><i class="f58 fa fa-angle-up"></i></a>



