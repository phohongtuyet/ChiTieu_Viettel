<?php

declare(strict_types = 1);

namespace App\Charts;

use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use App\Models\ChiTieu;
use App\Models\ThucHien;
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
        $KH = ChiTieu::select('kenhtruyen','tytrongkenhtruyen')->first();
        $TH = ThucHien::select('kenhtruyen')->first();

        $ptTH = $TH->kenhtruyen/$KH->kenhtruyen ;
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrongkenhtruyen;
        }
        else
        {
            $diem = (120/100) * $KH->tytrongkenhtruyen;
        }

        return Chartisan::build()
            ->labels(['Kênh truyền '])
            ->dataset('Kế hoạch', [$KH->kenhtruyen])
            ->dataset('Thực hiện', [$TH->kenhtruyen])
            ->dataset('Phần trâm thực hiện', [$ptTH *100])
            ->dataset('Điểm ', [$diem]);
    }
}