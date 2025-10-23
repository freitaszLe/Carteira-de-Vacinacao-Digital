<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'health_post_id', 
        'vaccine_id', 
        'scheduled_at', 
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function healthPost()
    {
        return $this->belongsTo(HealthPost::class);
    }

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }
}
