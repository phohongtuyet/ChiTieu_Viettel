<?php

namespace App\Imports;

use App\Models\GiaoDuc;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GiaoDucImport implements ToModel,WithHeadingRow
{
   
    public function model(array $row)
    {
        return new GiaoDuc([
            'tenduan' => $row['ten_du_an'],
            'doanhthu' => $row['doanh_thu'],
        ]);
    }
}
