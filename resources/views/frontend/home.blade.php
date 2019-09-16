@extends('layouts.app')
@section('content')


<section class="section-1">
        <div class="container">

                <h3 class="text-uppercase text-center">Phạm nhân</h3>

                <div class="row">
                    @foreach ($phamnhans as $phamnhan)
                         <div class="col-md-4 my-5">
                            <div class="box d-flex flex-column">
                                    <img class="card-img-top" src="img/a.jpg" alt="">
                                    <span class="name">Họ và Tên :{{ $phamnhan -> ten }}</span>
                                    <span>Số chứng minh thư :{{ $phamnhan -> so_cmt }}</span>
                                    <span>Ngày sinh :{{ $phamnhan -> ngay_sinh }}</span>
                                    <span>Giới tính : {{ \App\PhamNhan::$_Gender[$phamnhan->gioitinh] }}</span>
                                    <span>Tội danh :{{$phamnhan -> toi_danh}}</span>
                                    <span>Mức án : {{$phamnhan -> thoi_gian}} &nbsp Năm</span>
                                    <span>Trạng thái : {{ $phamnhan -> trang_thai }}</span>
                                    <span>Phòng Giam : {{$phamnhan -> pg_id}}</span>
                            </div>
                        </div>
                    @endforeach
                    <div style="float : right">
                        {!! $phamnhans -> Links() !!}
                    </div>


                </div>
        </div>
</section>
@endsection
