<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiamThi;
use App\PhamNhan;
use App\PhongGiam;
class MyController extends Controller
{
    function PhamNhanList(){
        $phamnhans = PhamNhan::orderBy("pn_id","ASC")->paginate(10,["pn_id"
        ,"pg_id","ten","ngay_sinh","gioitinh","so_cmt","toi_danh","ngay_vao",
        "thoi_gian","ghi_chu"]);
        return view('danhsach.list',compact("phamnhans"));
    }
    function GiamThiList(){
        $giamthis = GiamThi::orderBy("gt_id","ASC")->paginate(10);
        return view('danhsach.listgt',compact('giamthis'));
    }
    function PhongGiamList(){
        $phonggiams =  PhongGiam::
        orderBy("pg_id","ASC")->paginate(10 ,["pg_id","ten_pg","so_pn","cho_trong"
        ,"ghi_chu","gt_id"
        ]);
        return view('danhsach.listpg',compact('phonggiams'));
    }
}
