@extends('admin.layout.admin_layout')
@section('admin')
<div class="container-fluid">
    @if(Session::has("success"))
    <h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
    @endif
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Số chứng minh thư</th>
                <th scope="col">Chức vụ</th>
                <th scope="col">Ghi chú</th>
                <th scope="col">Sửa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($giamthis as $giamthi)
            <tr class="danhsach">
                <td scope="row">{{ $giamthi -> gt_id }}</td>
                <td>{{ $giamthi -> ten }}</td>
                <td>{{ \App\GiamThi::$_Gender[$giamthi -> gioi_tinh] }}</td>
                <td>{{ $giamthi -> so_cmt }}</td>
                <td>{{ $giamthi -> chuc_vu }}</td>
                <td>{{ $giamthi -> ghi_chu }}</td>
                <td>
                    <a href="{{ url("suaGT?id=" .$giamthi -> gt_id) }}">Sửa</a> &nbsp
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa??')"
                        href="{{ url('/xoaGT/' .$giamthi -> gt_id) }}">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between">

            <a href="{{ url('/them-giam-thi') }}" class="btn btn-danger mb-4">Thêm giám thị</a>
            {!! $giamthis -> Links() !!}
    </div>
</div>
@endsection
