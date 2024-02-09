<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = ["id"];
    protected $fillable = 
    [
        "title",
        "date",
        "start_time",
        "end_time",
    ];
    use HasFactory;
}
