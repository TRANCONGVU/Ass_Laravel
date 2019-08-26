<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiamThi;
use App\PhamNhan;
use App\PhongGiam;
class MyController extends Controller
{
    function PhamNhanList(){
        $phamnhans = PhamNhan::join("PhongGiam","PhamNhan.pg_id","=","PhongGiam.pg_id")
        ->orderBy("pn_id","ASC")->paginate(10,["PhamNhan.pn_id"
        ,"ten_pg as pg_id","ten","PhamNhan.ngay_sinh","PhamNhan.gioitinh","PhamNhan.trang_thai","PhamNhan.so_cmt","PhamNhan.toi_danh","PhamNhan.ngay_vao",
        "PhamNhan.thoi_gian","PhamNhan.ghi_chu"]);
        return view('danhsach.list',compact("phamnhans"));
    }
    function GiamThiList(){
        $giamthis = giamthi::orderBy("gt_id","ASC")->paginate(10,["gt_id","chuc_vu","ten","gioi_tinh","so_cmt",
        "ghi_chu"]);
        return view('danhsach.listgt',compact('giamthis'));
    }
    function PhongGiamList(){
        $PhongGiams =  PhongGiam::join("GiamThi","PhongGiam.gt_id","=","GiamThi.gt_id")
        ->orderBy("pg_id","ASC")->paginate(10 ,["PhongGiam.pg_id","PhongGiam.ten_pg","PhongGiam.so_pn","PhongGiam.cho_trong"
        ,"PhongGiam.ghi_chu","ten as gt_id"
        ]);
        return view('danhsach.listpg',compact('PhongGiams'));
    }
    public $messages = [
        "required" => "vui lòng nhập vào thông tin",
        "string" => "Phải nhập vào 1 chuỗi",
        "numeric" => "Nhập vào một số",
        "min" => "giá trị tối thiểu 0",
        "max" => "tối đa 255 ký tự",
        "unique" => "Đã tồn tại",
    ];

    public $rules = [
        "book_name" => "required|string|max:255|unique:book",
        "qty" => "required|numeric|min:0",
        "author_id" => "required|numeric",
        "nxb_id" => "required|numeric"
    ];
    function themPN(){
        $phamnhans = PhamNhan::orderBy("pn_id","ASC")->get();
        $PhongGiams = PhongGiam::orderBy("pg_id","ASC")->get();
        return view('them.themphamnhan',compact("phamnhans","PhongGiams"));
    }
    public function luuPN(request $request){
        // dd($request->all());
        $messages = [
            "required" => "vui lòng nhập thông tin vào trường này",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",
            "date" => "nhập vào ngày tháng năm"
        ];

        $rules =[
            "pg_id" => "required|numeric",
            "ten" => "required|string",
            "ngay_sinh" => "required|date",
            "so_cmt" => "required|numeric",
            "toi_danh" => "required|string",
            "ngay_vao" => "date",
            "thoi_gian" => "required|numeric",
            "trang_thai" => "required|string",
            "ghi_chu" => "required|string"
        ];
        $this->validate($request, $rules , $messages);
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
        $PhongGiams = PhongGiam::orderBy("pg_id","DESC")->get();
        $giamthis = GiamThi::orderBy("gt_id")->get();
        return view("them.themphong" , compact("PhongGiams","giamthis"));
    }
    function luuPG(request $request){
        $this->validate($request,[
            "ten_pg" => "required|string|max:255|unique:PhongGiam",
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
