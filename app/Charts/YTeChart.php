<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\ChiTieu;
use App\Models\ThucHien;
use Illuminate\Support\Facades\DB;

class YTeChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $KH = ChiTieu::select('yte','tytrongyte')->first();
        $TH = ThucHien::select('yte')->first();

        $ptTH = $TH->yte/$KH->yte ;
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrongyte;
        }
        else
        {
            $diem = (120/100) * $KH->tytrongyte;
        }

        return Chartisan::build()
            ->labels(['Y tế'])
            ->dataset('Kế hoạch', [$KH->yte])
            ->dataset('Thực hiện', [$TH->yte])
            ->dataset('Phần trâm thực hiện', [$ptTH *100])
            ->dataset('Điểm ', [$diem]);

    }
}