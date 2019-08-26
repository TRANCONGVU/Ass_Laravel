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
        ,"ten_pg as pg_id","ten","phamnhan.ngay_sinh","phamnhan.gioitinh","phamnhan.trang_thai","phamnhan.so_cmt","phamnhan.toi_danh","phamnhan.ngay_vao",
        "phamnhan.thoi_gian","phamnhan.ghi_chu"]);
        return view('danhsach.list',compact("phamnhans"));
    }
    function GiamThiList(){
        $giamthis = GiamThi::orderBy("gt_id","ASC")->paginate(10,["gt_id","ten","gioi_tinh","so_cmt",
        "ghi_chu"]);
        return view('danhsach.listgt',compact('giamthis'));
    }
    function PhongGiamList(){
        $phonggiams =  PhongGiam::join("giamthi","phonggiam.gt_id","=","giamthi.gt_id")
        ->orderBy("pg_id","ASC")->paginate(10 ,["phonggiam.pg_id","phonggiam.ten_pg","phonggiam.so_pn","phonggiam.cho_trong"
        ,"phonggiam.ghi_chu","ten as gt_id"
        ]);
        return view('danhsach.listpg',compact('phonggiams'));
    }



    function themPN(){
        $phamnhans = PhamNhan::orderBy("pn_id","ASC")->get();
        $phonggiams = PhongGiam::orderBy("pg_id","ASC")->get();
        return view('them.themphamnhan',compact("phamnhans","phonggiams"));
    }
    public function luuPN(request $request){
        // dd($request->all());
        $this->validate($request,[
            "ten" => "required|string|max:255|unique:phamnhan",
            "thoi_gian" => "required|numeric|min:0"
        ]);
        try{
            PhamNhan::create([
                "pg_id" => $request -> get("pg_id"),
                "ten" => $request -> get("ten"),
                "ngay_sinh" => $request -> get("ngay_sinh"),
                "gioitinh" => $request -> get("gioitinh"),
                "so_cmt" => $request -> get("so_cmt"),
                "toi_danh" => $request -> get("toi_danh"),
                "ngay_vao" => $request -> get("ngay_vao"),
                "thoi_gian" => $request -> get("thoi_gian"),
                "trang_thai" => $request -> get("trang_thai"),
                "ghi_chu" => $request -> get("ghi_chu")
            ])-> save();
        }
        catch(\Exception $e){
            die($e -> getMessage());
        }
        return redirect("/pham-nhan");
    }

    function themPG(){
        $phonggiams = PhongGiam::orderBy("pg_id","DESC")->get();
        $giamthis = GiamThi::orderBy("gt_id")->get();
        return view("them.themphong" , compact("phonggiams","giamthis"));
    }
    function luuPG(request $request){
        $this->validate($request,[
            "ten_pg" => "required|string|max:255|unique:phonggiam",
        ]);
        try{
            PhongGiam::create([
                "ten_pg" => $request -> get("ten_pg"),
                "gt_id" => $request -> get("gt_id"),
                "so_pn" => $request -> get("so_pn"),
                "cho_trong" => $request -> get("cho_trong"),
                "ghi_chu" => $request -> get("ghi_chu")
            ])-> save();
        }
        catch(\Exception $e){
            die($e -> getMessage());
        }
        return redirect("/phong-giam");
    }

    function themGT(){
        $giamthis = GiamThi::orderBy("gt_id","DESC")->get();
        return view("them.themgiamthi", compact("giamthis"));
    }
    function luuGT(request $request){
        // dd($request->all());
        // $this->validate($request,[
        //     "ten" => "required|string|max:255",
        // ]);
        try{
            GiamThi::create([
                "ten" => $request -> get("ten"),
                "gioi_tinh" => $request -> get("gioi_tinh"),
                "so_cmt" => $request -> get("so_cmt"),
                "chuc_vu" => $request -> get("chuc_vu"),
                "ghi_chu" => $request -> get("ghi_chu")
            ])-> save();
        }
        catch(Exception $e){
            die($e -> getMessage());
        }
        return redirect("/giam-thi");
    }
}
