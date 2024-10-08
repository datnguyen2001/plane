@extends('admin.layout.index')
@section('title', 'Một ngày trở thành phi công')

@section('style')

@endsection

@section('main')
    <main id="main" class="main d-flex flex-column justify-content-center">
        <div class="">
            <h1 class="h3 mb-4 text-gray-800">{{$titlePage}}</h1>
            <hr>
            <form action="{{ route('admin.one-day-pilot.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-2">Tiêu đề ở home :</div>
                    <div class="col-10">
                        <input class="form-control" name="title" value="{{@$data->title}}" type="text" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">Mô tả ở home:</div>
                    <div class="col-10">
                        <textarea name="describe" id="describe" required rows="4"
                                  class="form-control">{!! @$data->describe !!}</textarea>
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
@endsection
