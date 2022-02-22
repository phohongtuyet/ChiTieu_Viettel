<?php

namespace App\Imports;

use App\Models\ChiTieu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ChiTieuImport implements ToModel,WithHeadingRow
{
  
    public function model(array $row)
    {
        return new ChiTieu([
            'tenlinhvuc' => $row['ten_linh_vuc'],
            'doanhthu' => $row['doanh_thu_muc_tieu'],
        ]);
    }
}
