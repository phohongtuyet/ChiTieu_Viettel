<?php

namespace App\Imports;

use App\Models\ChiTieu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ChiTieuImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        return new ChiTieu([
            'thang' => $row['thang'],
            'doanhthudichvu' => $row['doanh_thu_dich_vu'],
            'tytrongdoanhthudichvu' => $row['ty_trong_dtdv'],
            'tongdoanhthu' => $row['tong_doanh_thu'],
            'tytrongtongdoanhthu' => $row['ty_trong_tdt'],
            'duan' => $row['doanh_thu_ban_hang_du_an_chinh_quyen'],
            'tytrongduan' => $row['ty_trong_du_an'],
            'kenhtruyen' => $row['doanh_thu_ban_hang_kenh_truyen'],
            'tytrongkenhtruyen' => $row['ty_trong_kenh_truyen'],
            'giaoduc' => $row['doanh_thu_dich_vu_linh_vuc_giao_duc'],
            'tytronggiaoduc' => $row['ty_trong_giao_duc'],
            'yte' => $row['doanh_thu_ban_hang_linh_vuc_y_te'],
            'tytrongyte' => $row['ty_trong_y_te'],

        ]);
    }
}
