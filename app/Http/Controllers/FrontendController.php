<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhamNhan;
use App\PhongGiam;
class FrontendController extends Controller
{
    public function phamnhan(){
        $phamnhans = PhamNhan::join("PhongGiam","PhamNhan.pg_id","=","PhongGiam.pg_id")
        ->orderBy("pn_id","ASC")->paginate(6,["PhamNhan.pn_id"
        ,"ten_pg as pg_id","ten","PhamNhan.ngay_sinh","PhamNhan.gioitinh","PhamNhan.trang_thai","PhamNhan.so_cmt","PhamNhan.toi_danh",
        "PhamNhan.ngay_vao",
        "PhamNhan.thoi_gian","PhamNhan.ghi_chu"]);
        return view('frontend.home',compact("phamnhans"));
    }
}
