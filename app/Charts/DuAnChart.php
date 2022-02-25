<?php

declare(strict_types = 1);

namespace App\Charts;

use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use App\Models\ChiTieu;
use Illuminate\Support\Facades\DB;
use App\Models\ThucHien;

class DuAnChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $KH = ChiTieu::select('duan','tytrongduan')->first();
        $TH = ThucHien::select('duan')->first();

        $ptTH = $TH->duan/$KH->duan ;
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrongduan;
        }
        else
        {
            $diem = (120/100) * $KH->tytrongduan;
        }

        return Chartisan::build()
            ->labels(['Kênh truyền '])
            ->dataset('Kế hoạch', [$KH->duan])
            ->dataset('Thực hiện', [$TH->duan])
            ->dataset('Phần trâm thực hiện', [$ptTH *100])
            ->dataset('Điểm ', [number_format($diem,1)]);
    }
}