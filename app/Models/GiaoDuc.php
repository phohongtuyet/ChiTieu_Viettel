<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaoDuc extends Model
{
    use HasFactory;
    protected $table = 'giaoduc';

    protected $fillable = [
        'tenduan',
        'doanhthu',   
    ];
}
