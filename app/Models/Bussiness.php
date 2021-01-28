<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bussiness extends Model
{
    protected $table = 'bussiness';
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
}
