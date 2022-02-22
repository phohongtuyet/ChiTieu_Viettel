<?php

namespace App\Http\Controllers;

use App\Models\LinhVuc;
use Illuminate\Http\Request;

class LinhVucController extends Controller
{
    
    public function getDanhSach()
    {
        $linhvuc = LinhVuc::all();
        return view('chitieu.danhsach',compact('linhvuc'));
    }

    
    
}
