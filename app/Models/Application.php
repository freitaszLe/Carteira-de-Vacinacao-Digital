<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vaccine_id',
        'server_id',
        'health_post_id',
        'applied_at',
        'lot_number',
        'qr_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }

    public function server()
    {
        return $this->belongsTo(User::class, 'server_id');
    }

    public function health_post()
    {
        return $this->belongsTo(HealthPost::class);
    
}
