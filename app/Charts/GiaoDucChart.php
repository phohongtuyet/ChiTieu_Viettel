<?php

declare(strict_types = 1);

namespace App\Charts;

use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use App\Models\ChiTieu;
use Illuminate\Support\Facades\DB;
use App\Models\ThucHien;

class GiaoDucChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $KH = ChiTieu::select('giaoduc','tytronggiaoduc')->first();
        $TH = ThucHien::select('giaoduc')->first();

        $ptTH = $TH->giaoduc/$KH->giaoduc ;
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytronggiaoduc;
        }
        else
        {
            $diem = (120/100) * $KH->tytronggiaoduc;
        }

        return Chartisan::build()
            ->labels(['Kênh truyền '])
            ->dataset('Kế hoạch', [$KH->giaoduc])
            ->dataset('Thực hiện', [$TH->giaoduc])
            ->dataset('Phần trâm thực hiện', [$ptTH *100])
            ->dataset('Điểm ', [$diem]);
    }
}