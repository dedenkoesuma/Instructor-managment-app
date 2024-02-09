<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['name', 'schedule_id', 'description','status'];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id'); // Sesuaikan dengan nama model yang benar
    }
}

