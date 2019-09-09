<?php

namespace App\Http\Controllers;

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
    public function saveStudent(request $request){
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
