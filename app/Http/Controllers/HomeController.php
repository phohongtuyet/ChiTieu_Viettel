<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\YTe;
use App\Models\GiaoDuc;
use App\Models\KenhTruyen;
use App\Models\DuAn;
use App\Models\ChiTieu;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function getHome()
    {
        if(Auth::check())
        {
            $kenhtruyen = ChiTieu::where('tenlinhvuc',1)->first();
            $yte = ChiTieu::where('tenlinhvuc',2)->first();
            $giaoduc = ChiTieu::where('tenlinhvuc',3)->first();
            $duan = ChiTieu::where('tenlinhvuc',4)->first();
            
            return view('index',compact('kenhtruyen','yte','giaoduc','duan'));
        }
        else
        {
            return view('auth.login');
        }
    }
}
