<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thang extends Model
{
    use HasFactory;

    protected $table = 'thang';

    protected $fillable = [
        'thang'
    ];
}
