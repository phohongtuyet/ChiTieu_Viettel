<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTieu extends Model
{
    use HasFactory;

    protected $table = 'chitieu';

    protected $fillable = [
        'thang',
        'doanhthudichvu',
        'tytrongdoanhthudichvu',
        'tongdoanhthu', 
        'tytrongtongdoanhthu',
        'duan',   
        'tytrongduan',
        'kenhtruyen', 
        'tytrongkenhtruyen',
        'giaoduc',   
        'tytronggiaoduc',
        'yte',   
        'tytrongyte',
    ];
}
