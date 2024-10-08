@extends('admin.layout.index')
@section('title', 'Về chúng tôi')

@section('style')

@endsection

@section('main')
    <main id="main" class="main d-flex flex-column justify-content-center">
        <div class="">
            <h1 class="h3 mb-4 text-gray-800">{{$titlePage}}</h1>
            <hr>
            <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-2">Hình ảnh 1:</div>
                    <div class="col-10">
                        @if(@$data->src1 != null)
                            <div class="form-control position-relative div-parent" style="padding-top: 50%">
                                <div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">
                                    <button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>
                                    <img src="{{asset(@$data->src1)}}" class="w-100 h-100" style="object-fit: cover">
                                </div>
                            </div>
                        @else
                            <div class="form-control position-relative" style="padding-top: 50%">
                                <button type="button" class="position-absolute border-0 bg-transparent select-image" style="top: 50%;left: 50%;transform: translate(-50%,-50%)">
                                    <i style="font-size: 30px" class="bi bi-download"></i>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">Hình ảnh 2 :</div>
                    <div class="col-10">
                        @if(@$data->src2 != null)
                            <div class="form-control position-relative div-parent2" style="padding-top: 50%">
                                <div class="position-absolute w-100 h-100 div-file2" style="top: 0; left: 0;z-index: 10">
                                    <button type="button" class="position-absolute clear2 border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>
                                    <img src="{{asset(@$data->src2)}}" class="w-100 h-100" style="object-fit: cover">
                                </div>
                            </div>
                        @else
                            <div class="form-control position-relative" style="padding-top: 50%">
                                <button type="button" class="position-absolute border-0 bg-transparent select-image2" style="top: 50%;left: 50%;transform: translate(-50%,-50%)">
                                    <i style="font-size: 30px" class="bi bi-download"></i>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">Tiêu đề :</div>
                    <div class="col-10">
                        <input class="form-control" name="name" value="{{@$data->name}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">Mô tả:</div>
                    <div class="col-10">
                        <textarea name="describe" id="describe" required rows="4"
                                  class="form-control">{!! @$data->describe !!}</textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">Số tiếp viên :</div>
                    <div class="col-10">
                        <input class="form-control" name="stewardess" value="{{@$data->stewardess}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">Số phi công :</div>
                    <div class="col-10">
                        <input class="form-control" name="pilot" value="{{@$data->pilot}}" type="text" >
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        Nội dung
                    </div>
                    <div class="card-body mt-2">
                        <textarea name="content" class="ckeditor" required>{!! @$data->content !!}</textarea>
                    </div>
                </div>
                <input type="file" name="file" accept="image/x-png,image/gif,image/jpeg" hidden>
                <input type="file" name="img_logo" accept="image/x-png,image/gif,image/jpeg" hidden>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>

    </main>
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
        $('input[name="file"]').change(function(e){
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

        let parent2;
        $(document).on("click", ".select-image2", function () {
            $('input[name="img_logo"]').click();
            parent2 = $(this).parent();
        });
        $('input[name="img_logo"]').change(function(e){
            imgPreview2(this);
        });
        function imgPreview2(input) {
            let file2 = input.files[0];
            let mixedfile2 = file2['type'].split("/");
            let filetype2 = mixedfile2[0];
            if(filetype2 == "image"){
                let reader2 = new FileReader();
                reader2.onload = function(e){
                    $("#preview-img2").show().attr("src", );
                    let html = '<div class="position-absolute w-100 h-100 div-file2" style="top: 0; left: 0;z-index: 10">' +
                        '<button type="button" class="position-absolute clear2 border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>'+
                        '<img src="'+e.target.result+'" class="w-100 h-100" style="object-fit: cover">' +
                        '</div>';
                    parent2.html(html);
                }
                reader2.readAsDataURL(input.files[0]);
            }else{
                alert("Invalid file type");
            }
        }
        $(document).on("click", "button.clear2", function () {
            parent2 = $(this).closest(".div-parent2");
            $(".div-file2").remove();
            let html2 = '<button type="button" class="position-absolute border-0 bg-transparent select-image2" style="top: 50%;left: 50%;transform: translate(-50%,-50%)">\n' +
                '                                    <i style="font-size: 30px" class="bi bi-download"></i>\n' +
                '                                </button>';
            parent2.html(html2);
            $('input[type="img_qr"]').val("");
        });
    </script>
@endsection
