<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ChiTieu;
use App\Models\ThucHien;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function getHome()
    {
        if(Auth::check())
        {
            $KH = ChiTieu::select('yte','duan','kenhtruyen','giaoduc')->first();
            if(!empty($KH))
            {
                $kenhtruyen = $KH->kenhtruyen;
                $yte =  $KH->yte;
                $giaoduc = $KH->giaoduc;
                $duan = $KH->duan;
                return view('index',compact('kenhtruyen','yte','giaoduc','duan'));  

            } 
            return view('index');  

        }
        else
        {
            return view('auth.login');
        }
    }
}
