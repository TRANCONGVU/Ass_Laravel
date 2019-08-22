<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiamThi;
use App\PhamNhan;
use App\PhongGiam;
class MyController extends Controller
{
    function PhamNhanList(){
        $phamnhans = PhamNhan::join("phonggiam","phamnhan.pg_id","=","phonggiam.pg_id")
        ->orderBy("pn_id","ASC")->paginate(10,["phamnhan.pn_id"
        ,"ten_pg as pg_id","ten","phamnhan.ngay_sinh","phamnhan.gioitinh","phamnhan.so_cmt","phamnhan.toi_danh","phamnhan.ngay_vao",
        "phamnhan.thoi_gian","phamnhan.ghi_chu"]);
        return view('danhsach.list',compact("phamnhans"));
    }
    function GiamThiList(){
        $giamthis = GiamThi::orderBy("gt_id","ASC")->paginate(10);
        return view('danhsach.listgt',compact('giamthis'));
    }
    function PhongGiamList(){
        $phonggiams =  PhongGiam::join("giamthi","phonggiam.gt_id","=","giamthi.gt_id")
        ->orderBy("pg_id","ASC")->paginate(10 ,["phonggiam.pg_id","phonggiam.ten_pg","phonggiam.so_pn","phonggiam.cho_trong"
        ,"phonggiam.ghi_chu","ten as gt_id"
        ]);
        return view('danhsach.listpg',compact('phonggiams'));
    }
}
