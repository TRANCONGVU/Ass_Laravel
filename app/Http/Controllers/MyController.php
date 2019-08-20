<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiamThi;
use App\PhamNhan;
use App\PhongGiam;
class MyController extends Controller
{
    function PhamNhanList(){
        $phamnhans = PhamNhan::orderBy("pn_id","ASC")->paginate(20);
        return view('phamnhanlist',compact("phamnhans"));
    }
}
