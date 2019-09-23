@extends('admin.layout.admin_layout')
@section('admin')
<div class="container-fluid">
        @if(Session::has("success"))
        <h1 class="text-center" style="color:green">{{ Session::get("success") }}</h1>
        @endif
    <div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên Phòng</th>
                    <th scope="col">Số Phạm Nhân</th>
                    <th scope="col">Chỗ Trống</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Giám thị</th>
                    <th scope="col">Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phonggiams as $phonggiam)
                    <tr class="danhsach">
                        <td scope="row">{{ $phonggiam -> pg_id }}</td>
                        <td>{{ $phonggiam -> ten_pg }}</td>
                        <td>{{ $phonggiam -> so_pn }} &nbsp người</td>
                        <td>{{ $phonggiam -> cho_trong }}&nbsp chỗ trống</td>
                        <td>{{ $phonggiam -> ghi_chu }}</td>
                        <td>{{ $phonggiam -> gt_id }}</td>
                        <td>
                            <a href="{{ url("admin/suaPG?id=".$phonggiam -> pg_id) }}">Sửa</a> &nbsp
                            <a onclick="return confirm('Bạn chắc chắn muốn xóa??')"  href="{{ url('admin/xoaPG/' .$phonggiam -> pg_id) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between">

            <a href="{{ url('admin/them-phong-giam') }}" class="btn btn-dark mb-3">Tạo Thêm Phòng</a>
            <div>
                    {!! $phonggiams -> Links() !!}
            </div>
        </div>

    </div>

</div>

@endsection
