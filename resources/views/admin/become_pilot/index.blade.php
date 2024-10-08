@extends('admin.layout.index')
@section('title', 'Trở thành phi công')

@section('style')

@endsection

@section('main')
    <main id="main" class="main d-flex flex-column justify-content-center">
        <div class="">
            <h1 class="h3 mb-4 text-gray-800">{{$titlePage}}</h1>
            <hr>
            <form action="{{ route('admin.become-pilot.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-2">Tiêu đề bài viết:</div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="name" required value="{{@$data->name}}">
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
                <div class="row mt-3">
                    <div class="col-2">Tiêu đề 1 (mục nhỏ):</div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="title_one" value="{{@$data->title_one}}">
                    </div>
                </div>
                @for($e=1;$e<=6;$e++)
                    <div class="row mt-3">
                        <div class="col-2">Tên mục nhỏ {{$e}}:</div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="name_{{$e}}"
                                   value="{{old('name_'.$e, @$data->{'name_'.$e})}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">Hình ảnh mục nhỏ {{$e}}:</div>
                        <div class="col-5">
                            @if(!empty($data->{'src_'.$e}))
                                <div class="form-control position-relative div-parent{{$e}}" style="padding-top: 50%">
                                    <div class="position-absolute w-100 h-100 div-file{{$e}}"
                                         style="top: 0; left: 0;z-index: 10">
                                        <button type="button"
                                                class="position-absolute clear{{$e}} border-0 bg-danger p-0 d-flex justify-content-center align-items-center"
                                                style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%">
                                            <i class="bi bi-x-lg text-white"></i></button>
                                        <img src="{{asset($data->{'src_'.$e})}}" class="w-100 h-100"
                                             style="object-fit: cover">
                                    </div>
                                </div>
                            @else
                                <div class="form-control position-relative div-parent{{$e}}" style="padding-top: 50%">
                                    <button type="button"
                                            class="position-absolute border-0 bg-transparent select-image{{$e}}"
                                            style="top: 50%;left: 50%;transform: translate(-50%,-50%)">
                                        <i style="font-size: 30px" class="bi bi-download"></i>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header bg-info text-white">
                            Nội dung mục nhỏ 1
                        </div>
                        <div class="card-body mt-2">
                            <textarea name="content_{{$e}}" class="ckeditor">{!! @$data->content_1 !!}</textarea>
                        </div>
                    </div>
                @endfor
                <div class="row mt-3">
                    <div class="col-2">Tiêu đề 2 (mục nhỏ):</div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="title_two"  value="{{@$data->title_two}}">
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        Nội dung 2 (mục nhỏ)
                    </div>
                    <div class="card-body mt-2">
                            <textarea name="content_two" class="ckeditor"
                                      >{!! @$data->content_two !!}</textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">Tiêu đề 3 (mục nhỏ):</div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="title_three"  value="{{@$data->title_three}}">
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        Nội dung 3 (mục nhỏ)
                    </div>
                    <div class="card-body mt-2">
                            <textarea name="content_three" class="ckeditor"
                                      >{!! @$data->content_three !!}</textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-2">Tiêu đề 4 (mục nhỏ):</div>
                    <div class="col-10">
                        <input type="text" class="form-control" name="title_four"  value="{{@$data->title_four}}">
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        Nội dung 4 (mục nhỏ)
                    </div>
                    <div class="card-body mt-2">
                            <textarea name="content_four" class="ckeditor"
                                      >{!! @$data->content_four !!}</textarea>
                    </div>
                </div>


                <input type="file" name="file1" accept="image/x-png,image/gif,image/jpeg" hidden>
                <input type="file" name="file2" accept="image/x-png,image/gif,image/jpeg" hidden>
                <input type="file" name="file3" accept="image/x-png,image/gif,image/jpeg" hidden>
                <input type="file" name="file4" accept="image/x-png,image/gif,image/jpeg" hidden>
                <input type="file" name="file5" accept="image/x-png,image/gif,image/jpeg" hidden>
                <input type="file" name="file6" accept="image/x-png,image/gif,image/jpeg" hidden>
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
            height: '500px'
        });
        for ($i = 1; $i <= 6; $i++) {
            CKEDITOR.replace(`content_${$i}`, {
                filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form',
                height: '400px'
            });
        }
        CKEDITOR.replace('content_two', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: '500px'
        });
        CKEDITOR.replace('content_three', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: '500px'
        });
        CKEDITOR.replace('content_four', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: '500px'
        });
    </script>
    <script>
        let parent;
        for (let j = 1; j <= 6; j++) {
            // Sự kiện chọn ảnh
            $(document).on("click", `.select-image${j}`, function () {
                $(`input[name="file${j}"]`).click();
                parent = $(this).parent();
            });

            // Khi thay đổi ảnh
            $(`input[name="file${j}"]`).change(function (e) {
                imgPreview(e, this);
            });

            // Preview ảnh
            function imgPreview(e, input) {
                let file = input.files[0];
                let mixedfile = file['type'].split("/");
                let filetype = mixedfile[0];
                if (filetype == "image") {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        let html = '<div class="position-absolute w-100 h-100 div-file' + j + '" style="top: 0; left: 0;z-index: 10">' +
                            '<button type="button" class="position-absolute clear' + j + ' border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>' +
                            '<img src="' + event.target.result + '" class="w-100 h-100" style="object-fit: cover">' +
                            '</div>';
                        parent.html(html);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert("Invalid file type");
                }
            }

            // Xóa ảnh
            $(document).on("click", `.clear${j}`, function () {
                parent = $(this).closest(`.div-parent${j}`);
                $(`.div-file${j}`).remove();
                let html = '<button type="button" class="position-absolute border-0 bg-transparent select-image' + j + '" style="top: 50%;left: 50%;transform: translate(-50%,-50%)">' +
                    '<i style="font-size: 30px" class="bi bi-download"></i>' +
                    '</button>';
                parent.html(html);
                $(`input[name="file${j}"]`).val("");
            });
        }


    </script>
@endsection
