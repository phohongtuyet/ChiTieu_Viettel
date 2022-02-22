<?php

namespace App\Http\Controllers;

use App\Models\YTe;
use Illuminate\Http\Request;
use App\Imports\YTeImport;
use Excel;

class YTeController extends Controller
{
    public function getDanhSach()
    {
        $yte = YTe::all();
        return view('yte.danhsach',compact('yte'));
    }

    public function postNhap(Request $request)
    {
        Excel::import(new YTeImport, $request->file('file_excel'));
    
        return redirect()->route('yte');
    }
}
