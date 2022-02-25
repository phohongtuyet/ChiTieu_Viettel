<?php

declare(strict_types = 1);

namespace App\Charts;

use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use App\Models\ChiTieu;
use App\Models\ThucHien;
class DoanhThuDichVuChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $KH = ChiTieu::select('doanhthudichvu','tytrongdoanhthudichvu')->first();
        $TH = ThucHien::select('doanhthudichvu')->first();

        $ptTH = $TH->doanhthudichvu/$KH->doanhthudichvu ;
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrongdoanhthudichvu;
        }
        else
        {
            $diem = (120/100) * $KH->tytrongdoanhthudichvu;
        }

        return Chartisan::build()
            ->labels(['Doanh thu dịch vụ  '])
            ->dataset('Kế hoạch', [$KH->doanhthudichvu])
            ->dataset('Thực hiện', [$TH->doanhthudichvu])
            ->dataset('Phần trâm thực hiện', [$ptTH *100])
            ->dataset('Điểm ', [number_format($diem,1)]);
    }
}