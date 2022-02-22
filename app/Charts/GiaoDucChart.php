<?php

declare(strict_types = 1);

namespace App\Charts;

use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use App\Models\ChiTieu;
use App\Models\GiaoDuc;
use Illuminate\Support\Facades\DB;

class GiaoDucChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $giaoduc = ChiTieu::where('tenlinhvuc',3)->first();
        $doanhthugiaoduc = $giaoduc->doanhthu;

        $doanhthu = GiaoDuc::sum('doanhthu');
            
        return Chartisan::build()
            ->labels(['Doanh thu'])
            ->dataset('Đạt được ', [$doanhthu])
            ->dataset('Doanh thu mục tiêu', [$doanhthugiaoduc])
            ->dataset('Còn Thiếu', [$doanhthugiaoduc-$doanhthu]);
    }
}