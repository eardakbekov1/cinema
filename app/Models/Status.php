<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['id', 'name'];

    public function HallMovieSeatSessions(): HasMany
    {
        return $this->hasMany(HallMovieSeatSession::class);
    }
}
