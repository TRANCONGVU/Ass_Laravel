<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiamThi;
use App\PhamNhan;
use App\PhongGiam;
use Exception;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    function PhamNhanList(){
       // dd(Auth::user());
       $user = Auth::user();
       if( !$user -> isAdmin() && $user->id == 1){
           $user -> admin = 1;
           $user -> save();
       }
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
        $phonggiams =  PhongGiam::join("GiamThi","PhongGiam.gt_id","=","GiamThi.gt_id")
        ->orderBy("pg_id","ASC")->paginate(10 ,["PhongGiam.pg_id","PhongGiam.ten_pg","PhongGiam.so_pn","PhongGiam.cho_trong"
        ,"PhongGiam.ghi_chu","ten as gt_id"
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
        $phonggiams = PhongGiam::orderBy("pg_id","DESC")->get();
        $giamthis = GiamThi::orderBy("gt_id")->get();
        return view("them.themphong" , compact("phonggiams","giamthis"));
    }
    function luuPG(request $request){
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
            "gt_id" => "required|numeric",
            "ten_pg" => "required|string|unique:PhongGiam",
            "so_pn" => "required|numeric",
            "cho_trong" => "required|numeric",
            "ghi_chu" => "required|string"
        ];
        $this->validate($request, $rules , $messages);
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
            "ten" => "required|string",
            "so_cmt" => "required|numeric|unique:GiamThi",
            "chuc_vu" => "required|string",
            "ghi_chu" => "required|string"
        ];
        $this->validate($request, $rules , $messages);
        try{
            GiamThi::create([
                "ten" => $request -> get("ten"),
                "gioi_tinh" => $request -> get('gioi_tinh'),
                "so_cmt" => $request -> get('so_cmt'),
                "chuc_vu" => $request -> get('chuc_vu'),
                "ghi_chu" => $request -> get('ghi_chu')
            ])-> save();
        }
        catch(Exception $e){
            die($e -> getMessage());
        }
        return redirect("/giam-thi");
    }




    //xoa du lieu
    function xoaPN($id){
        $phamnhan = PhamNhan::find($id);
        try{
            $phamnhan -> delete();
        }
        catch(Exception $e){
            die($e -> getMessage());
        }
        return redirect("pham-nhan")->with("success","Xóa thành công !");
    }

    function xoaPG($id){
        $phonggiam = PhongGiam::find($id);
        try{
            $phonggiam -> delete();
        }
        catch(Exception $e){
            die($e -> getMessage());
        }
        return redirect("phong-giam")->with("success","Xóa thành công !");
    }

    function xoaGT($id){
        $giamthi = GiamThi::find($id);
        try{
            $giamthi -> delete();
        }
        catch(Exception $e){
            die($e -> getMessage());
        }
        return redirect("phong-giam")->with("success","Xóa thành công !");
    }

    // sua thong tin

    function suaPN(Request $request){
        $pn_id = $request -> get("id");
        $phamnhan = PhamNhan::find($pn_id);
        $phonggiams = PhongGiam::orderBy("pg_id","ASC") -> get();

        return view("update.suapn" ,compact("phamnhan","phonggiams"));
    }
    function suaPG(Request $request){
        $pg_id = $request -> get("id");
        $phonggiam = PhongGiam::find($pg_id);
        $giamthis = GiamThi::orderBy("gt_id","ASC") -> get();

        return view("update.suapg" ,compact("giamthis","phonggiam"));
    }
    function suaGT(Request $request){
        $gt_id = $request -> get("id");
        $giamthi = GiamThi::find($gt_id);
        return view("update.suagt" ,compact("giamthi"));
    }

    // luu lai thong tin da sua
    function updatePN(Request $request){
        $phamnhan = PhamNhan::find($request -> get("pn_id"));
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",
        ];

        $rules = [
            "ten" => "required|string|max:255",
            "pg_id" => "required|numeric",
            "ngay_sinh" => "required",
            "so_cmt" => "required|numeric|unique:PhamNhan,so_cmt,".$phamnhan -> pn_id. ",pn_id",
            "toi_danh" => "required|string",
            "ngay_vao" => "required",
            "thoi_gian" => "required",
            "trang_thai" => "required|string",
            "ghi_chu" => "required|string"
        ];
        // dd($request->all());

        $this -> validate($request , $rules , $messages);

        try{
            $phamnhan -> update([
                "ten" => $request -> get("ten"),
                "ngay_sinh" => $request -> get("ngay_sinh"),
                "ngay_vao" => $request -> get("ngay_vao"),
                // "gioitinh" => $request -> get("gioi_tinh"),
                "so_cmt" => $request -> get("so_cmt"),
                "toi_danh" => $request -> get("toi_danh"),
                "thoi_gian" => $request -> get("thoi_gian"),
                "trang_thai" => $request -> get("trang_thai"),
                "ghi_chu" => $request -> get("ghi_chu"),
                "pg_id" => $request -> get("pg_id"),
            ]);
        }
        catch(\Exception $e){
            die( $e -> getMessage());
        }

        return redirect("/pham-nhan");
    }

    function updatePG(Request $request){
        $phonggiam = PhongGiam::find($request -> get("pg_id"));
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",
        ];

        $rules = [
            "ten_pg" => "required|string|max:255",
            "so_pn" => "required|numeric",
            "cho_trong" => "required|numeric",
            "ghi_chu" => "required|string"
        ];
        // dd($request->all());

        $this -> validate($request , $rules , $messages);

        try{
            $phonggiam -> update([
                "ten_pg" => $request -> get("ten_pg"),
                "so_pn" => $request -> get("so_pn"),
                "cho_trong" => $request -> get("cho_trong"),
                "ghi_chu" => $request -> get("ghi_chu")

            ]);
        }
        catch(\Exception $e){
            die( $e -> getMessage());
        }

        return redirect("/phong-giam");
    }

    function updateGT(Request $request){
        $giamthi = GiamThi::find($request -> get("gt_id"));
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",
        ];

        $rules = [
            "ten" => "required|string|max:255",
            "so_cmt" => "required|numeric|unique:GiamThi,so_cmt,".$giamthi -> gt_id. ",gt_id",
            "chuc_vu" => "required|string|max:255",
            "ghi_chu" => "required|string|max:255"
        ];
        // dd($request->all());

        $this -> validate($request , $rules , $messages);

        try{
            $giamthi -> update([
                "ten" => $request -> get("ten"),
                "so_cmt" => $request -> get("so_cmt"),
                "chuc_vu" => $request -> get("chuc_vu"),
                "ghi_chu" => $request -> get("ghi_chu")

            ]);
        }
        catch(\Exception $e){
            die( $e -> getMessage());
        }

        return redirect("/giam-thi");
    }
}
