<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhamNhan;
use App\PhongGiam;
use App\GiamThi;
class FrontendController extends Controller
{
    public function phamnhan(){
        $phamnhans = PhamNhan::join("PhongGiam","PhamNhan.pg_id","=","PhongGiam.pg_id")
        ->orderBy("pn_id","ASC")->paginate(6,["PhamNhan.pn_id"
        ,"ten_pg as pg_id","ten","PhamNhan.ngay_sinh","PhamNhan.gioitinh","PhamNhan.trang_thai","PhamNhan.so_cmt","PhamNhan.toi_danh",
        "PhamNhan.ngay_vao",
        "PhamNhan.thoi_gian","PhamNhan.ghi_chu"]);

        $phonggiams =  PhongGiam::join("GiamThi","PhongGiam.gt_id","=","GiamThi.gt_id")
        ->orderBy("pg_id","ASC")->paginate(3 ,["PhongGiam.pg_id","PhongGiam.ten_pg","PhongGiam.so_pn","PhongGiam.cho_trong"
        ,"PhongGiam.ghi_chu","ten as gt_id"
        ]);

        $giamthis = giamthi::orderBy("gt_id","ASC")->paginate(3,["gt_id","chuc_vu","ten","gioi_tinh","so_cmt",
        "ghi_chu"]);
        return view('frontend.home',compact("phamnhans","phonggiams","giamthis"));
    }
}
