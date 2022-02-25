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
        $chitieu = ChiTieu::orderBy('thang', 'desc')->get();
        return view('chitieu.danhsach',compact('chitieu'));
    }

    public function getThem()
    {
        return view('chitieu.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'thang' => ['required', 'numeric' ],
            'doanhthudichvu'=> ['required', 'numeric' ],
            'tytrongdoanhthudichvu'=> ['required', 'numeric' ],
            'tongdoanhthu'=> ['required', 'numeric' ], 
            'tytrongtongdoanhthu'=> ['required', 'numeric' ],
            'duan'=> ['required', 'numeric' ],   
            'tytrongduan'=> ['required', 'numeric' ],
            'kenhtruyen'=> ['required', 'numeric' ], 
            'tytrongkenhtruyen'=> ['required', 'numeric' ],
            'giaoduc'=> ['required', 'numeric', ],   
            'tytronggiaoduc'=> ['required', 'numeric' ],
            'yte'=> ['required', 'numeric' ],
            'tytrongyte'=> ['required', 'numeric' ]  
        ], 
        $messages = [
            'thang.required' => 'Tháng không được bỏ trống.',
            'doanhthudichvu.required' => 'Doanh thu dịch vụ không được bỏ trống.',
            'tytrongdoanhthudichvu.required' => 'Tỷ trọng doanh thu không được bỏ trống.',
            'tytrongtongdoanhthu.required' => 'Tỷ trọng tổng doanh thu không được bỏ trống.',
            'duan.required' => 'Dự án không được bỏ trống.',
            'tytrongduan.required' => 'Tỷ trọng dự án không được bỏ trống.',
            'kenhtruyen.required' => 'Kênh truyền không được bỏ trống.',
            'tytrongkenhtruyen.required' => 'Tỷ trọng kênh truyền không được bỏ trống.',
            'giaoduc.required' => 'Giáo dục không được bỏ trống.',
            'tytronggiaoduc.required' => 'Tỷ trọng giáo dục không được bỏ trống.',
            'yte.required' => 'Y tế không được bỏ trống.',
            'tytrongyte.required' => 'Tỷ trọng y tế không được bỏ trống.',

        ]);
           
        $orm = new ChiTieu();
        $orm->thang = $request->thang;
        $orm->doanhthudichvu = $request->doanhthudichvu;
        $orm->tytrongdoanhthudichvu = $request->tytrongdoanhthudichvu;
        $orm->tytrongtongdoanhthu = $request->tytrongtongdoanhthu;
        $orm->duan = $request->duan;
        $orm->tytrongduan = $request->tytrongduan;
        $orm->kenhtruyen = $request->kenhtruyen;
        $orm->tytrongkenhtruyen = $request->tytrongkenhtruyen;
        $orm->giaoduc = $request->giaoduc;
        $orm->tytronggiaoduc = $request->tytronggiaoduc;
        $orm->yte = $request->yte;
        $orm->tytrongyte = $request->tytrongyte;
        $orm->save();

        return redirect()->route('chitieu')->with('status', 'Thêm mới thành công');
    }

    public function getSua($id)
    {
        $chitieu = ChiTieu::find($id);
        return view('chitieu.sua', compact('chitieu'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'tenlinhvuc' => ['required', 'numeric', ],
            'doanhthu' => ['required'],

        ], 
        $messages = [
            'tenlinhvuc.required' => 'Lĩnh vực chưa chọn.',
            'unique' => 'Tên lĩnh vực đã có trong hệ thống.',
            'doanhthu.required' => 'Doanh thu không được bỏ trống.',

        ]);
           
        $orm = ChiTieu::find($id);
        $orm->tenlinhvuc = $request->tenlinhvuc;
        $orm->doanhthu = $request->doanhthu;
        $orm->save();

        return redirect()->route('chitieu');

    }

    public function getXoa($id)
    {
        $orm = ChiTieu::find($id);
        $orm->delete();
    
        return redirect()->route('chitieu');
    }

    public function postNhap(Request $request)
    {
        Excel::import(new ChiTieuImport, $request->file('file_excel'));

        return redirect()->route('chitieu');
    }
}
