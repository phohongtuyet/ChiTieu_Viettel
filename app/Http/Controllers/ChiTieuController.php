<?php

namespace App\Http\Controllers;

use App\Models\ChiTieu;
use Illuminate\Http\Request;
use Excel;
use App\Imports\ChiTieuImport;

class ChiTieuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDanhSach()
    {
        $chitieu = ChiTieu::all();
        return view('chitieu.danhsach',compact('chitieu'));
    }

    public function postNhap(Request $request)
    {
        Excel::import(new ChiTieuImport, $request->file('file_excel'));
    
        return redirect()->route('chitieu');
    }

    public function getThem()
    {
        return view('chitieu.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'tenlinhvuc' => ['required', 'max:255', 'unique:chitieu'],
            'doanhthu' => ['required'],

        ], 
        $messages = [
            'tenlinhvuc.required' => 'Tên lĩnh vực không được bỏ trống.',
            'unique' => 'Tên lĩnh vực đã có trong hệ thống.',
            'doanhthu.required' => 'Doanh thu không được bỏ trống.',

        ]);
           
        $orm = new ChiTieu();
        $orm->tenlinhvuc = $request->tenlinhvuc;
        $orm->doanhthu = $request->doanhthu;
        $orm->save();

        return redirect()->route('chitieu')->with('status', 'Thêm mới thành công');
    }


}
