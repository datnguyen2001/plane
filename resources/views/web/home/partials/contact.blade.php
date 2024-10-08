<section class="r92 " id=""
         style="background-image:url({{asset('assets/frontend/image/BG-04.png')}});background-size: cover;background-position: center;">
    <div class="r93 container">
        <div class="r94 row">
            <div class="r95 col-md-5">
                <div class="r96 heading">
                    <p class="r97 ">đăng ký nhận thông tin</p>
                    <h2 class="r98 ">Hãy bắt đầu hành trình mới <br>cùng RAYMOND</h2>
                </div>
                <p class="r99 "></p>
            </div>
            <div class="r100 col-md-5 col-md-offset-2">
                <div class="r101 ">
                    <p class="r102 ">Đăng ký nhận thông tin</p>
                    <p class="r103 ">Hãy cùng Raymond thực hiện ước mơ của mình</p>
                    <form class="r104 " id="dangky" method="POST" action="{{route('save-information')}}" data-element="mail-to-admin">
                        @csrf
                        <div class="r105 form-group">
                            <input type="text" name="name" class="r106 form-control name" placeholder="Họ và tên" required>
                        </div>
                        <div class="r107 form-group">
                            <input type="text" name="phone" class="r108 form-control phone" required
                                   placeholder="Số điện thoại">
                        </div>
                        <div class="r109 form-group">
                            <input type="email" name="email" class="r110 form-control email" placeholder="Email" required>
                        </div>
                        <div class="r111 form-group ">
                            <select name="course" class="r112 form-control">
                                <option>Khóa học đang quan tâm</option>
                                <option>Khóa Lý thuyết Phi công vận tải hàng không</option>
                                <option>Khóa Đào tạo thi tuyển Tiếp viên hàng không</option>
                                <option>Khóa Đào tạo thi tuyển Nhân viên phục vụ mặt đất</option>
                                <option>Thuê phòng lái mô phỏng máy bay A320/321</option>
                            </select>
                        </div>
                        <div class="r113 form-group ">
                            <button class="r116 btn btn-my btn-send-mail wow pulse" data-wow-iteration="100000"
                                    data-wow-duration="0.3s" type="submit" style="width: 100%">Đăng ký ngay
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
