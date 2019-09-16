<?php

namespace App\Http\Controllers;

use App\PhamNhan;
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
        return view('home', compact('phamnhans'));
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

}
