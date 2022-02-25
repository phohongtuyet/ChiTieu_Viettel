<?php

namespace App\Http\Controllers;

use App\Models\ThucHien;
use Illuminate\Http\Request;

class ThucHienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDanhSach()
    {
        $thuchien = ThucHien::all();
        return view('thuchien.danhsach',compact('thuchien'));
    }

    public function getThem()
    {
        return view('thuchien.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'doanhthudichvu' => ['required'],
            'tongdoanhthu' => ['required'],
            'yte' => ['required'],
            'giaoduc' => ['required'],
            'kenhtruyen' => ['required'],
            'duan' => ['required'],
        ], 
        $messages = [
            'doanhthudichvu.required' => 'Doanh thu dịch vụ không được bỏ trống.',
            'tongdoanhthu.required' => 'Tổng doanh thu không được bỏ trống.',
            'yte.required' => 'Y tế không được bỏ trống.',
            'giaoduc.required' => 'Giáo dục  không được bỏ trống.',
            'duan.required' => 'Dự án  không được bỏ trống.',
            'kenhtruyen.required' => 'Kênh truyền  không được bỏ trống.',

        ]);
           
        $orm = new ThucHien();
        $orm->doanhthudichvu = $request->doanhthudichvu;
        $orm->tongdoanhthu = $request->tongdoanhthu;
        $orm->yte = $request->yte;
        $orm->giaoduc = $request->giaoduc;
        $orm->duan = $request->duan;
        $orm->kenhtruyen = $request->kenhtruyen;
        $orm->save();

        return redirect()->route('thuchien')->with('status', 'Thêm mới thành công');
    }

    public function getSua($id)
    {
        $thuchien = ThucHien::find($id);
        return view('thuchien.sua', compact('thuchien'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'doanhthudichvu' => ['required'],
            'tongdoanhthu' => ['required'],
            'yte' => ['required'],
            'giaoduc' => ['required'],
            'kenhtruyen' => ['required'],
            'duan' => ['required'],
        ], 
        $messages = [
            'doanhthudichvu.required' => 'Doanh thu dịch vụ không được bỏ trống.',
            'tongdoanhthu.required' => 'Tổng doanh thu không được bỏ trống.',
            'yte.required' => 'Y tế không được bỏ trống.',
            'giaoduc.required' => 'Giáo dục  không được bỏ trống.',
            'duan.required' => 'Dự án  không được bỏ trống.',
            'kenhtruyen.required' => 'Kênh truyền  không được bỏ trống.',

        ]);
           
        $orm = ThucHien::find($id);
        $orm->doanhthudichvu = $request->doanhthudichvu;
        $orm->tongdoanhthu = $request->tongdoanhthu;
        $orm->yte = $request->yte;
        $orm->giaoduc = $request->giaoduc;
        $orm->duan = $request->duan;
        $orm->kenhtruyen = $request->kenhtruyen;
        $orm->save();

        return redirect()->route('thuchien');

    }

    public function getXoa($id)
    {
        $orm = ThucHien::find($id);
        $orm->delete();
    
        return redirect()->route('thuchien');
    }

    public function postNhap(Request $request)
    {
        
    }
}
