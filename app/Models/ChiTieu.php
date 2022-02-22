<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTieu extends Model
{
    use HasFactory;

    protected $table = 'chitieu';

    protected $fillable = [
        'tenlinhvuc',
        'doanhthu',   
    ];
}
