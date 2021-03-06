<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function availabilities()
    {
        return $this->hasMany(Availability::class);
    }
}
