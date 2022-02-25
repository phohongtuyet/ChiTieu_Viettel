<?php

namespace App\Http\Controllers;

use App\Models\CTrinhHD;
use Illuminate\Http\Request;
use Excel;
use App\Imports\chuongtrinh_import;

class CTrinhHDController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDanhSach()
    {
        $ctrinhhd = CTrinhHD::orderBy('id', 'desc')->get();
        return view('chuongtrinh.danhsach',compact('ctrinhhd'));
    }

    public function getThem()
    {
        return view('chuongtrinh.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'tenchuongtrinh' => ['required', 'string' ],
            'kehoach'=> ['required', 'numeric' ],
            'titrong'=> ['required', 'numeric' ]
        ], 
        $messages = [
            'tenchuongtrinh.required' => 'Tháng không được bỏ trống.',
            'kehoach.required' => 'Doanh thu dịch vụ không được bỏ trống.',
            'titrong.required' => 'Tỷ trọng doanh thu không được bỏ trống.',

        ]);
           
        $orm = new CTrinhHD();
        $orm->tenchuongtrinh = $request->tenchuongtrinh;
        $orm->kehoach = $request->kehoach;
        $orm->titrong = $request->titrong;
        $orm->save();

        return redirect()->route('chuongtrinh')->with('status', 'Thêm mới thành công');
    }

    public function getSua($id)
    {
        $ctrinhhd = CTrinhHD::find($id);
        return view('chuongtrinh.sua', compact('ctrinhhd'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'tenchuongtrinh' => ['required', 'string'],
            'kehoach'=> ['required', 'numeric' ],
            'titrong'=> ['required', 'numeric' ],
            'thuchien'=> ['required', 'numeric' ]

        ], 
        $messages = [
            'tenchuongtrinh.required' => 'Tên chương trình không được bỏ trống.',
            'kehoach.required' => 'Kế hoạch không được bỏ trống.',
            'titrong.required' => 'Tỷ trọng không được bỏ trống.',

        ]);
           
        $orm = CTrinhHD::find($id);
        $orm->tenchuongtrinh = $request->tenchuongtrinh;
        $orm->kehoach = $request->kehoach;
        $orm->titrong = $request->titrong;
        $orm->thuchien = $request->thuchien;
        $orm->save();

        return redirect()->route('chuongtrinh');

    }

    public function getXoa($id)
    {
        $orm = CTrinhHD::find($id);
        $orm->delete();
    
        return redirect()->route('chuongtrinh');
    }

    public function postNhap(Request $request)
    {
        Excel::import(new chuongtrinh_import, $request->file('file_excel'));

        return redirect()->route('chuongtrinh');
    }
}
