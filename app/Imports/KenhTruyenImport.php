<?php

namespace App\Imports;

use App\Models\KenhTruyen;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KenhTruyenImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KenhTruyen([
            'tenduan' => $row['ten_du_an'],
            'doanhthu' => $row['doanh_thu'],
        ]);
    }
}
