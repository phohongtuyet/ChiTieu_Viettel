<?php

namespace App\Http\Controllers;

use App\Models\GiaoDuc;
use Illuminate\Http\Request;
use App\Imports\GiaoDucImport;
use Excel;

class GiaoDucController extends Controller
{
    public function getDanhSach()
    {
        $giaoduc = GiaoDuc::all();
        return view('giaoduc.danhsach',compact('giaoduc'));
    }

    public function postNhap(Request $request)
    {
        Excel::import(new GiaoDucImport, $request->file('file_excel'));
    
        return redirect()->route('giaoduc');
    }
}
