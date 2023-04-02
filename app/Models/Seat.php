<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['id', 'set_number'];
    public function HallMovieSeatSessions(): HasMany
    {
        return $this->hasMany(HallMovieSeatSession::class);
    }
}
