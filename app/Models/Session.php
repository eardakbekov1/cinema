<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['id', 'session_time'];
    public function HallMovieSeatSessions(): HasMany
    {
        return $this->hasMany(HallMovieSeatSession::class);
    }
}
