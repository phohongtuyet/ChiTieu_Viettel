<?php

declare(strict_types = 1);

namespace App\Charts;

use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use App\Models\ChiTieu;
use Illuminate\Support\Facades\DB;
class KenhTruyenChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $yte = ChiTieu::where('tenlinhvuc',1)->first();
        $doanhthuyte = $yte->doanhthu;

        $doanhthu =  DB::table('kenhtruyen')->sum('kenhtruyen.doanhthu');
            
        return Chartisan::build()
            ->labels(['Doanh thu'])
            ->dataset('Đạt được ', [$doanhthu])
            ->dataset('Doanh thu mục tiêu', [$doanhthuyte])
            ->dataset('Còn Thiếu', [$doanhthuyte-$doanhthu]);
    }
}