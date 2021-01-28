<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'vouchers_name',
        'content',
        'image',
        'time_start',
        'time_end'
    ];
}
