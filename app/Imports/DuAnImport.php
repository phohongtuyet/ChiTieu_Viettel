<?php

namespace App\Imports;

use App\Models\DuAn;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DuAnImport implements ToModel,WithHeadingRow
{
  
    public function model(array $row)
    {
        return new DuAn([
            'tenduan' => $row['ten_du_an'],
            'doanhthu' => $row['doanh_thu'],
        ]);
    }
}
