<?php

namespace App\Http\Controllers;

use App\Models\DuAn;
use Illuminate\Http\Request;
use App\Imports\DuAnImport;
use Excel;
class DuAnController extends Controller
{
    public function getDanhSach()
    {
        $duan = DuAn::all();
        return view('duan.danhsach',compact('duan'));
    }

    public function postNhap(Request $request)
    {
        Excel::import(new DuAnImport, $request->file('file_excel'));
    
        return redirect()->route('duan');
    }
}
