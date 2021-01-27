<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'event_name',
        'content',
        'image',
        'time_start',
        'time_end'
    ];
}
