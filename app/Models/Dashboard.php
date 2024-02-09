<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id'); // Sesuaikan dengan nama model yang benar
    }
    public function question()
    {
        return $this->belongsTo(Questions::class, 'question_id'); 
    }
}
