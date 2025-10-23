<?php

namespace App\Models;

use Illuminate\Console\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manufacturer',
        'doses',
        'interval_days',
    ];
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_vaccine');
    }
}
