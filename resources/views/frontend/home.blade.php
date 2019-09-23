@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="banner owl-carousel owl-theme">
        <div class="item">
            <img src="image/anh.jpg" alt="">
        </div>
        <div class="item">
            <img src="image/anh.jpg" alt="">
        </div>

    </div>
</div>

<div class="container">
    <h3 class="text-uppercase text-center">Phạm nhân</h3>
    <div class="row">
        @foreach ($phamnhans as $phamnhan)
        <div class="col-md-4 my-5">
            <div class="box d-flex flex-column">
                <img class="card-img-top image-bg" src="img/a.jpg" alt="">
                <span class="name">Họ và Tên :{{ $phamnhan -> ten }}</span>
                {{--  <span>Số chứng minh thư :{{ $phamnhan -> so_cmt }}</span>
                <span>Ngày sinh :{{ $phamnhan -> ngay_sinh }}</span>
                <span>Giới tính : {{ \App\PhamNhan::$_Gender[$phamnhan->gioitinh] }}</span>
                <span>Tội danh :{{$phamnhan -> toi_danh}}</span>
                <span>Mức án : {{$phamnhan -> thoi_gian}} &nbsp Năm</span>
                <span>Trạng thái : {{ $phamnhan -> trang_thai }}</span>
                <span>Phòng Giam : {{$phamnhan -> pg_id}}</span>  --}}
                <a href="{{ url("chitiet?id=" .$phamnhan -> pn_id) }}" class="btn btn-primary mt-5">Chi tiết</a>
            </div>

        </div>
        @endforeach
        <div style="float : right">
            {!! $phamnhans -> Links() !!}
        </div>
    </div>


    <h3 class="text-uppercase text-center">Hệ Thống Phòng Giam</h3>
    <div class="row">
        @foreach ($phonggiams as $phonggiam)
        <div class="col-md-4 my-5">
            <div class="box d-flex flex-column">
                <img class="card-img-top image-bg" src="img/a.jpg" alt="">
                <span class="name">Tên Phòng :{{ $phonggiam -> ten_pg }}</span>
                {{--  <span>Số chứng minh thư :{{ $phamnhan -> so_cmt }}</span>
                <span>Ngày sinh :{{ $phamnhan -> ngay_sinh }}</span>
                <span>Giới tính : {{ \App\PhamNhan::$_Gender[$phamnhan->gioitinh] }}</span>
                <span>Tội danh :{{$phamnhan -> toi_danh}}</span>
                <span>Mức án : {{$phamnhan -> thoi_gian}} &nbsp Năm</span>
                <span>Trạng thái : {{ $phamnhan -> trang_thai }}</span>
                <span>Phòng Giam : {{$phamnhan -> pg_id}}</span>  --}}
                <a href="{{ url("chitiet?id=" .$phonggiam -> pg_id) }}" class="btn btn-primary mt-5">Chi tiết</a>
            </div>

        </div>
        @endforeach
        <div style="float : right">
            {!! $phonggiams -> Links() !!}
        </div>
    </div>


    <h3 class="text-uppercase text-center">Hệ Thống giám thị</h3>
    <div class="row">
        @foreach ($giamthis as $giamthi)
        <div class="col-md-4 my-5">
            <div class="box d-flex flex-column">
                <img class="card-img-top image-bg" src="img/a.jpg" alt="">
                <span class="name">Tên Phòng :{{ $giamthi -> ten }}</span>
                {{--  <span>Số chứng minh thư :{{ $phamnhan -> so_cmt }}</span>
                <span>Ngày sinh :{{ $phamnhan -> ngay_sinh }}</span>
                <span>Giới tính : {{ \App\PhamNhan::$_Gender[$phamnhan->gioitinh] }}</span>
                <span>Tội danh :{{$phamnhan -> toi_danh}}</span>
                <span>Mức án : {{$phamnhan -> thoi_gian}} &nbsp Năm</span>
                <span>Trạng thái : {{ $phamnhan -> trang_thai }}</span>
                <span>Phòng Giam : {{$phamnhan -> pg_id}}</span>  --}}
                <a href="{{ url("chitiet?id=" .$giamthi -> gt_id) }}" class="btn btn-primary mt-5">Chi tiết</a>
            </div>

        </div>
        @endforeach
        <div style="float : right">
            {!! $giamthis -> Links() !!}
        </div>
    </div>
</div>
</section>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
@endsection
