<?php

namespace App\Http\Controllers;

use App\PhamNhan;
use App\PhongGiam;
use App\GiamThi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    const _Limit = 10;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $phamnhans = PhamNhan::orderBy("created_at","DESC")-> take(self::_Limit)->get();
        $phonggiams = PhongGiam::orderBy("created_at","DESC")-> take(self::_Limit)->get();

        return view('home', compact('phamnhans',"phonggiams"));
    }
    public function loadMore(Request $request){
        $page = $request -> has("page") ? $request -> get("page"):1;
        $offset = ($page -1)*self::_Limit;
        $phamnhans = PhamNhan::orderBy("created_at","DESC")
        ->offset($offset)
        ->take(self::_Limit)->get();

        return response()->json($phamnhans);
    }
    public function loadMoreHtml(Request $request){
        $page = $request -> has("page") ? $request -> get("page"):1;
        $offset = ($page -1)*self::_Limit;
        $phamnhans = PhamNhan::orderBy("created_at","DESC")
        ->offset($offset)
        ->take(self::_Limit)->get();

        return view('danhsach.loadmore',compact('phamnhans'));
    }

    public function chitietPN(Request $request){
        $pn_id = $request -> get("id");
        $phamnhan = PhamNhan::find($pn_id);
        $phonggiams = PhongGiam::orderBy("pg_id","ASC") -> get();

        return view("frontend.chitiet" ,compact("phamnhan","phonggiams"));
    }
}
