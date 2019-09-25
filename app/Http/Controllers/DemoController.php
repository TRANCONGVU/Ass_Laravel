<?php

namespace App\Http\Controllers;

use App\sinhvien;
use App\Student;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function StudentList(){
        $students = Student::all();
        return view('studentList', compact("students"));
    }
    public function addStudent(){
        $students = Student::orderBy("name","ASC")->get();
        return view("addStudent" , compact('students'));
    }

    public function addFeedBack(){
        $sinhvien = sinhvien::orderBy("id" ,"ASC")->get();
        return view("addFeedback" , compact('sinhvien'));
    }
    public function saveFeedBack(Request $request){
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",

        ];
        $rules = [
            "student_name" => "required|string",
            "student_telephone" => "required|numeric|min:0",
            "student_email" => "required",
            "feedback" => "required"
        ];

        $this->validate($request,$rules , $messages);
        try{
        sinhvien::create([
            "student_name"=>$request->get("student_name"),
            "student_telephone"=>$request->get("student_telephone"),
            "student_email"=>$request->get("student_email"),
            "feedback"=>$request->get("feedback")
        ])->save();
        }
        catch(\Exception $e){
            die($e -> getMessage());
        }
        return redirect("/feedback");
    }

    public function index()
    {
        $sinhviens = sinhvien::orderBy("created_at","DESC")->take(self::_LIMIT)->get();
        return view('/feedback',compact("sinhviens"));
    }



    public function loadstudent(Request $request){
        // $page = $request -> has("page") ? $request -> get("page"):1;
        // $offset = ($page -1)*self::_Limit;
        $sinhviens = sinhvien::orderBy("created_at","DESC")
        // ->offset($offset)
        ->take(10)->get();

        return response()->json($sinhviens);
    }





    public function saveStudent(Request $request){
        $messages = [
            "required" => "vui lòng nhập vào thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Nhập vào một số",
            "min" => "giá trị tối thiểu 0",
            "max" => "tối đa 255 ký tự",
            "unique" => "Đã tồn tại",

        ];
        $rules = [
            "name" => "required|string",
            "age" => "required|numeric|min:0",
            "adress" => "required",
            "telephone" => "required"
        ];

        $this->validate($request,$rules , $messages);
        try{
        Student::create([
            "name"=>$request->get("name"),
            "age"=>$request->get("age"),
            "adress"=>$request->get("adress"),
            "telephone"=>$request->get("telephone")
        ])->save();
        }
        catch(\Exception $e){
            die($e -> getMessage());
        }
        return redirect("/student");
    }
}
