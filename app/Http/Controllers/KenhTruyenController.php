<?php

namespace App\Http\Controllers;

use App\Models\KenhTruyen;
use Illuminate\Http\Request;
use Excel;
use App\Imports\KenhTruyenImport;

class KenhTruyenController extends Controller
{
    public function getDanhSach()
    {
        $kenhtruyen = KenhTruyen::all();
        return view('kenhtruyen.danhsach',compact('kenhtruyen'));
    }

    public function postNhap(Request $request)
    {
        Excel::import(new KenhTruyenImport, $request->file('file_excel'));
    
        return redirect()->route('kenhtruyen');
    }
}
