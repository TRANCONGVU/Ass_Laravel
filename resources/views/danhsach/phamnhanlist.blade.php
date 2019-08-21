@extends('layout')
@section('body')
    <div class="container-flui bg-dark header">
        <div class="container">

        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-2 menu">
                <a href="#">Danh sách phạm nhân</a>
            </div>
            <div class="col-md-10">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">CMT</th>
                            <th scope="col">Tội danh</th>
                            <th scope="col">Ngày vào</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ghi chú</th>
                            <th scope="col">Phòng giam</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($phamnhans as $phamnhan)
                        <tr class="danhsach">
                            <td scope="row">{{$phamnhan -> pn_id}}</td>
                            <td>{{$phamnhan -> ten}}</td>
                            <td>{{$phamnhan -> ngay_sinh}}</td>
                            <td>{{$phamnhan -> gioitinh}}</td>
                            <td>{{$phamnhan -> so_cmt}}</td>
                            <td>{{$phamnhan -> toi_danh}}</td>
                            <td>{{$phamnhan -> ngay_vao}}</td>
                            <td>{{$phamnhan -> thoi_gian}}</td>
                            <td>{{$phamnhan -> trang_thai}}</td>
                            <td>{{$phamnhan -> ghi_chu}}</td>
                            <td>{{$phamnhan -> pg_id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $phamnhans -> Links() !!}
            </div>


        </div>
    </div>
@endsection
