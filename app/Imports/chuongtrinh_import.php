<?php

namespace App\Imports;

use App\Models\CTrinhHD;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class chuongtrinh_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CTrinhHD([
            'thang' => $row['thang'],
            'tenchuongtrinh' => $row['tenchuongtrinh'],
            'kehoach' => $row['kehoach'],
            'titrong' => $row['titrong'],
        ]);
    }
}
