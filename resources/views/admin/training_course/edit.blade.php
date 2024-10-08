@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cập nhật bài viết</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                <form action="{{url("admin/training-course/update",$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-2">Tiêu đề bài viết:</div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Mô tả:</div>
                        <div class="col-10">
                        <textarea name="describe" id="describe" required rows="4"
                                  class="form-control">{{$data->describe}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Hình ảnh :</div>
                        <div class="col-8">
                            <div class="form-control position-relative div-parent" style="padding-top: 50%">
                                <div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">
                                    <button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>
                                    <img src="{{asset($data->src)}}" class="w-100 h-100" style="object-fit: cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Tại sao nên chọn 1:</div>
                        <div class="col-10">
                        <textarea name="why_choose1" id="why_choose1" rows="4"
                                  class="form-control">{{$data->why_choose1}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Tại sao nên chọn 2:</div>
                        <div class="col-10">
                        <textarea name="why_choose2" id="why_choose2" rows="4"
                                  class="form-control">{{$data->why_choose2}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Tại sao nên chọn 3:</div>
                        <div class="col-10">
                        <textarea name="why_choose3" id="why_choose3" rows="4"
                                  class="form-control">{{$data->why_choose3}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Tuổi đời:</div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="age" value="{{$data->age}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Học vấn:</div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="education" value="{{$data->education}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Ngoại ngữ:</div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="foreign_language" value="{{$data->foreign_language}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Sức khỏe:</div>
                        <div class="col-10">
                        <textarea name="health" id="health" required rows="4"
                                  class="form-control">{{$data->health}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Mô tả:</div>
                        <div class="col-10">
                        <textarea name="describe" id="describe" required rows="4"
                                  class="form-control">{{$data->describe}}</textarea>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header bg-info text-white">
                            Nội dung
                        </div>
                        <div class="card-body mt-2">
                            <textarea name="content" class="ckeditor" required>{!! $data->content !!}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Bật/tắt :</div>
                        <div class="col-8">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="display" @if($data->display == 1) checked @endif type="checkbox"
                                       id="flexSwitchCheckChecked">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Hiện </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Tiêu đề trên header:</div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="title" value="{{$data->title}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Làm header :</div>
                        <div class="col-8">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="type" @if($data->type == 1) checked @endif type="checkbox"
                                       id="flexSwitchCheckChecked">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Làm menu header </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-3"></div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{route('admin.training-course.index')}}" class="btn btn-danger">Hủy</a>
                        </div>
                    </div>
                    <input type="file" name="file" accept="image/x-png,image/gif,image/jpeg" hidden>
                </form>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
@section('script')
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height:'700px'
        });
    </script>
    <script>
        let parent;
        $(document).on("click", ".select-image", function () {
            $('input[name="file"]').click();
            parent = $(this).parent();
        });
        $('input[type="file"]').change(function(e){
            imgPreview(this);
        });
        function imgPreview(input) {
            let file = input.files[0];
            let mixedfile = file['type'].split("/");
            let filetype = mixedfile[0]; // (image, video)
            if(filetype == "image"){
                let reader = new FileReader();
                reader.onload = function(e){
                    $("#preview-img").show().attr("src", );
                    let html = '<div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">' +
                        '<button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>'+
                        '<img src="'+e.target.result+'" class="w-100 h-100" style="object-fit: cover">' +
                        '</div>';
                    parent.html(html);
                }
                reader.readAsDataURL(input.files[0]);
            }else if(filetype == "video" || filetype == "mp4"){
                let html = '<div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">' +
                    '<button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%;z-index: 14"><i class="bi bi-x-lg text-white"></i></button>'+
                    '<video class="w-100 h-100" style="object-fit: cover" controls>\n' +
                    '<source src="'+URL.createObjectURL(input.files[0])+'"></video>'+
                    '</div>';
                parent.html(html);
            }else{
                alert("Invalid file type");
            }
        }
        $(document).on("click", "button.clear", function () {
            parent = $(this).closest(".div-parent");
            $(".div-file").remove();
            let html = '<button type="button" class="position-absolute border-0 bg-transparent select-image" style="top: 50%;left: 50%;transform: translate(-50%,-50%)">\n' +
                '                                    <i style="font-size: 30px" class="bi bi-download"></i>\n' +
                '                                </button>';
            parent.html(html);
            $('input[type="file"]').val("");
        });
    </script>
@endsection
