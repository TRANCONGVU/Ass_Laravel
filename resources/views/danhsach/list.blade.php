@extends('layout')
@section('body')
    @if(Session::has("success"))
    <h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
    @endif
    <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-md-12">

                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên Phạm Nhân</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">CMT</th>
                            <th scope="col">Tội danh</th>
                            <th scope="col">Ngày vào</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ghi chú</th>
                            <th scope="col">Phòng giam</th>
                            <th scope="col">Thay đổi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($phamnhans as $phamnhan)
                        <tr class="danhsach">
                            <td scope="row">{{$phamnhan -> pn_id}}</td>
                            <td>{{$phamnhan -> ten}}</td>
                            <td>{{$phamnhan -> ngay_sinh}}</td>
                            <td>{{ \App\PhamNhan::$_Gender[$phamnhan->gioitinh] }}</td>
                            <td>{{$phamnhan -> so_cmt}}</td>
                            <td>{{$phamnhan -> toi_danh}}</td>
                            <td>{{$phamnhan -> ngay_vao}}</td>
                            <td>{{$phamnhan -> thoi_gian}} &nbsp Năm</td>
                            <td>{{$phamnhan -> trang_thai}}</td>
                            <td>{{$phamnhan -> ghi_chu}}</td>
                            <td>{{$phamnhan -> pg_id}}</td>
                            <td>
                                <a href="{{ url("suaPN?id=" .$phamnhan -> pn_id) }}">Sửa</a>
                                <a onclick="return confirm('Bạn chắc chắn muốn xóa??')"  href="{{ url('/xoaPN/' .$phamnhan -> pn_id) }}">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">

                    <a href="{{ url('/them-pham-nhan') }}" class="btn btn-outline-danger m-2">Thêm Phạm Nhân</a>
                    {!! $phamnhans -> Links() !!}
                </div>

            </div>
        </div>
    </div>
@endsection
