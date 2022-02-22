<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YTe extends Model
{
    use HasFactory;
    protected $table = 'yte';

    protected $fillable = [
        'tenduan',
        'doanhthu',   
    ];
}
