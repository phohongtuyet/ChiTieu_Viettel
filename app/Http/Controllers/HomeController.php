<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ChiTieu;
use App\Models\ThucHien;
use App\Models\thang;
use App\Models\CTrinhHD;

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

                $thang=thang::all(); 
                $showchuongtrinh=CTrinhHD::where('thang',1)->orderby('thang','DESC')->paginate(10);
                
                return view('index',compact('kenhtruyen','yte','giaoduc','duan','thang','showchuongtrinh'));  
            }
            $thang=thang::all();             
            return view('index',compact('thang'));  
        }
        else
        {
            return view('auth.login');
        }
    }
    public function showchuongtrinh($id){
        $showchuongtrinh=CTrinhHD::where('thang',$id)->orderby('thang','DESC')->paginate(10);
        $thang=thang::all(); 
        return view('index',compact('thang','showchuongtrinh'));
    }
}
