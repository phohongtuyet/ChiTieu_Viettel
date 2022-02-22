<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\ChiTieu;
use App\Models\YTe;
use Illuminate\Support\Facades\DB;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $yte = ChiTieu::where('tenlinhvuc',2)->first();
        $doanhthuyte = $yte->doanhthu;

        $doanhthu =  DB::table('yte')->sum('yte.doanhthu');
            
        return Chartisan::build()
            ->labels(['Doanh thu'])
            ->dataset('Đạt được ', [$doanhthu])
            ->dataset('Doanh thu mục tiêu', [$doanhthuyte])
            ->dataset('Còn Thiếu', [$doanhthuyte-$doanhthu]);
    }
}