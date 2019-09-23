@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h3>Chi tiết Phạm nhân : {{ $phamnhan -> ten }} </h3>
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="banner owl-carousel owl-theme">
                <div class="item">
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBPtsb3.img?h=0&w=720&m=6&q=60&u=t&o=f&l=f&x=476&y=374" alt="">
                </div>
                <div class="item">
                    <img src="https://img-s-msn-com.akamaized.net/tenant/amp/entityid/BBPtsb3.img?h=0&w=720&m=6&q=60&u=t&o=f&l=f&x=476&y=374" alt="">
                </div>

            </div>
        </div>
        <div class="col-md-6 d-flex flex-column chitiet">
            <div class="d-flex">
                <h4>Họ Và Tên :</h4><h4 class="thongtin">{{ $phamnhan -> ten }}</h4>
            </div>
            <div class="d-flex">
                <h4>Giới Tính:</h4><h4 class="thongtin" >{{  \App\PhamNhan::$_Gender[$phamnhan->gioitinh] }} </h4>
            </div>
            <div class="d-flex">
                <h4>Ngày sinh :</h4><h4 class="thongtin" >{{ $phamnhan -> ngay_sinh }} </h4>
            </div>
            <div class="d-flex">
                <h4>Số Chứng Minh Thư:</h4><h4 class="thongtin" >{{ $phamnhan -> so_cmt }} </h4>
            </div>
            <div class="d-flex">
                <h4>Thời gian lĩnh án :</h4><h4 class="thongtin" >{{ $phamnhan -> thoi_gian }} </h4>
            </div>
            <div class="d-flex">
                <h4>Trạng thái :</h4><h4 class="thongtin" >{{ $phamnhan -> trang_thai }} </h4>
            </div>
            <div class="d-flex">
                <h4>Ghi chú :</h4><h4 class="thongtin" >{{ $phamnhan -> ghi_chu }} </h4>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
@endsection
