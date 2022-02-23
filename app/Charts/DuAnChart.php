<?php

declare(strict_types = 1);

namespace App\Charts;

use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use App\Models\ChiTieu;
use Illuminate\Support\Facades\DB;

class DuAnChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $duan = ChiTieu::where('tenlinhvuc',4)->first();
        $doanhthuduan = $duan->doanhthu;

        $doanhthu =  DB::table('duan')->sum('duan.doanhthu');
            
        return Chartisan::build()
            ->labels(['Doanh thu'])
            ->dataset('Đạt được ', [$doanhthu])
            ->dataset('Doanh thu mục tiêu', [$doanhthuduan])
            ->dataset('Còn Thiếu', [$doanhthuduan-$doanhthu]);
    }
}