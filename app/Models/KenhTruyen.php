<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KenhTruyen extends Model
{
    use HasFactory;
    protected $table = 'kenhtruyen';

    protected $fillable = [
        'tenduan',
        'doanhthu',   
    ];
}
