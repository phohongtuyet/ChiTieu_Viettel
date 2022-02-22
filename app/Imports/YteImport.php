<?php

namespace App\Imports;

use App\Models\YTe;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class YteImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new YTe([
            'tenduan' => $row['ten_du_an'],
            'doanhthu' => $row['doanh_thu'],
        ]);
    }
}
