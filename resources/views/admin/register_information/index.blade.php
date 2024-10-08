@extends('admin.layout.index')
@section('title', 'Đăng ký nhận thông tin')

@section('style')

@endsection

@section('main')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">{{$titlePage}}</h5>
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Thông tin</th>
                                    <th scope="col">Khóa học</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($listData as $key => $value)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>
                                            {{$value->name}}<br>
                                            {{$value->phone}}<br>
                                            {{$value->email}}
                                        </td>
                                        <td>
                                            {{$value->course}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $listData->appends(request()->all())->links('admin.pagination_custom.index') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->
@endsection
@section('script')

@endsection
