@extends('admin.layout.admin_layout')
@section('admin')
@if(Session::has("success"))
<h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
@endif
<div class="container-fluid mt-1">
    <div class="row">
        <div class="col-md-12">
            <h1>Danh Sách Phạm Nhân</h1>
            <table class="table table-striped table-bordered  table-bordered table-hover" id="example2">
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
                            <a href="{{ url("admin/suaPN?id=" .$phamnhan -> pn_id) }}">Sửa</a> &nbsp
                            <a onclick="return confirm('Bạn chắc chắn muốn xóa??')"
                                href="{{ url('admin/xoaPN/' .$phamnhan -> pn_id) }}">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <a href="{{ url('admin/them-pham-nhan') }}" class="btn btn-danger">Thêm Phạm Nhân</a>
            <div style="float : right">
                {!! $phamnhans -> Links() !!}
            </div>

        </div>
    </div>
</div>
@endsection
