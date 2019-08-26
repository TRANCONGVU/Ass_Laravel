@extends('layout')
@section('body')
<div class="container-fluid">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Số chứng minh thư</th>
                <th scope="col">Chức vụ</th>
                <th scope="col">Ghi chú</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($giamthis as $giamthi)
                <tr>
                    <td scope="row">{{ $giamthi -> gt_id }}</td>
                    <td>{{ $giamthi -> ten }}</td>
                    <td>{{ \App\GiamThi::$_Gender[$giamthi -> gioi_tinh] }}</td>
                    <td>{{ $giamthi -> so_cmt }}</td>
                    <td>{{ $giamthi -> chuc_vu }}</td>
                    <td>{{ $giamthi -> ghi_chu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $giamthis -> Links() !!}
    <a href="{{ url('/them-giam-thi') }}" class="btn btn-outline-danger">Thêm giám thị</a>
</div>
@endsection
